import mysql.connector
import pandas as pd
import pickle

with open('rf_hacathon.pkl', 'rb') as f:
    data = pickle.load(f)
#STEP:1 Connect to the MySQL DataBase.
try:
    conn=mysql.connector.connect(
        host="127.0.0.1",
        user="root",
        password="",
        database="placement_portal"

    )
    mycursor=conn.cursor()
    print("Connection Established");
except:
    print("Connection Error");



# STEP:5. READ : Select Data From a Table.
mycursor.execute("select * from ml")
myresult=mycursor.fetchall()

print(myresult)

for x in myresult:
    print(x)
df=pd.read_sql('SELECT * FROM ml', con=conn)
print(df)

