from flask import Flask, render_template, request, redirect, session, flash
from flask_mysqldb import MySQL
import MySQLdb.cursors

app = Flask(__name__)
app.secret_key = "rahasia_bro"  # buat session

# Konfigurasi database MySQL
app.config["MYSQL_HOST"] = "localhost"
app.config["MYSQL_USER"] = "root"
app.config["MYSQL_PASSWORD"] = ""   # isi password MySQL lo
app.config["MYSQL_DB"] = "prototype_db"  # nama database
    
mysql = MySQL(app)

# Route halaman login
@app.route("/")
def index():
    return render_template("login.html")  # login.html = file form lo

# Route proses login
@app.route("/login", methods=["POST"])
def login():
    email = request.form["email"]
    password = request.form["password"]

    cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
    cursor.execute("SELECT * FROM users WHERE email=%s AND password=%s", (email, password))
    user = cursor.fetchone()
    cursor.close()

    if user:
        session["user_id"] = user["id"]     # asumsi kolom id ada
        session["email"] = user["email"]
        return redirect("/dashboard")
    else:
        flash("Login gagal! Email atau password salah.", "danger")
        return redirect("/")

# Route dashboard
@app.route("/dashboard")
def dashboard():
    if "user_id" in session:
        return f"Halo {session['email']}, selamat datang di dashboard!"
    else:
        return redirect("/")

# Route logout
@app.route("/logout")
def logout():
    session.clear()
    return redirect("/")

if __name__ == "__main__":
    app.run(debug=True)
