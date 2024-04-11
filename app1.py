import psycopg2
import numpy as np
from flask import Flask, jsonify, request
import tensorflow as tf

# Connect to the PostgreSQL database
conn = psycopg2.connect(
    host="localhost",
    port="80",
    database="placement_portal",
    user="root",
    password=""
)

# Load the saved model
model = tf.keras.models.load_model('logreg.pkl')

# Create a Flask app
app = Flask(__name__)

# Define an endpoint for predictions
@app.route('/predict', methods=['POST'])
def predict():
    # Fetch data from the database
    cursor = conn.cursor()
    cursor.execute('SELECT col1, col2, col3,col4,col5,col6 FROM ml')
    rows = cursor.fetchall()

    # Convert the data to input format for the model
    inputs = np.array(rows)

    # Make a prediction with the model
    outputs = model.predict(inputs)

    # Convert the outputs to a JSON response
    response = {'outputs': outputs.tolist()}
    return jsonify(response)

# Run the app
if __name__ == '__main__':
    app.run()