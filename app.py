from sqlalchemy import create_engine
import pandas as pd

db_connection_str='mysql+pymysql://mysql_user:mysql_password@mysql_host/mysql_db* 
db_connection= create engine (db_connection_str)

df=pd.read_sql('SELECT FROM ml', con=db_connection)