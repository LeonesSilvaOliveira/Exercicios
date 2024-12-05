# app.py
from flask import Flask

app = Flask(__name__)

@app.route('/hello', methods=['GET'])
def hello():
    return "Olá, esta é a minha primeira API com Flask!"

if __name__ == '__main__':
    app.run(debug=True)
