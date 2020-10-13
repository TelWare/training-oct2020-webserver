from flask import Flask
import os
import socket
app = Flask(__name__)
@app.route("/")
def hello():
     html = "<h3>Welcome to Hacktoberfest {name}!</h3>" \
            "<b>Your First Docker Image built on </b> {hostname}<br/>"
     return html.format(name=os.getenv("NAME", "Docker Master"), hostname=socket.gethostname())
if __name__ == "__main__":
     app.run(host='0.0.0.0', port=80)
