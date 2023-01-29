import mysql.connecter

mydb = mysql.connecter.connect(
    host = "localhost",
    user = "root",
    password = "",
    database = "login"
)

mycursor = mydb.cursor()

sql = "SELECT * FROM users" 

mycursor.execute(sql)

myresult = mycursor.fetchall()

for i in mycursor:
    print(i)