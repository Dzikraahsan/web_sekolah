from flask import Flask, request, redirect, render_template, url_for
import smtplib
from email.message import EmailMessage
import os
import mysql.connector
from dotenv import load_dotenv

load_dotenv()

app = Flask(__name__)

def get_db_connection():
    return mysql.connector.connect(
        host=os.getenv("DB_HOST", "localhost"),
        user=os.getenv("DB_USER", "root"),
        password=os.getenv("DB_PASS", ""),
        database=os.getenv("DB_NAME", "")
    )

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/profile')
def profile():
    return render_template('profile.html')

@app.route('/project')
def project():
    return render_template('project.html')

@app.route('/kontak')
def kontak():
    return render_template('kontak.html')

@app.route('/kirim', methods=['POST'])
def kirim_email():
    nama = request.form['nama']
    email_pengirim = request.form['email']
    pesan = request.form['message']

    # === 1. Simpan ke database ===
    try:
        conn = get_db_connection()
        cursor = conn.cursor()
        cursor.execute(
            "INSERT INTO saran (nama, email, pesan) VALUES (%s, %s, %s)",
            (nama, email_pengirim, pesan)
        )
        conn.commit()
        cursor.close()
        conn.close()
    except Exception as e:
        print(f"Gagal simpan ke DB: {e}")

    # === 2. Kirim email ===
    email_tujuan = os.getenv("EMAIL_APP")
    email_password = os.getenv("EMAIL_PASSWORD")

    msg = EmailMessage()
    msg['Subject'] = f'Pesan dari {nama}'
    msg['From'] = email_pengirim
    msg['To'] = email_tujuan
    msg.set_content(pesan)

    try:
        with smtplib.SMTP('smtp.gmail.com', 587) as smtp:
            smtp.starttls()
            smtp.login(email_tujuan, email_password)
            smtp.send_message(msg)
        return redirect(url_for('kontak', status='success'))
    except Exception as e:
        print(f"Email gagal dikirim: {e}")
        return redirect(url_for('kontak', status='error'))

if __name__ == '__main__':
    port = int(os.environ.get("PORT", 5000))
    app.run(debug=True, host='0.0.0.0', port=port)
