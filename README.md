# training-oct2020-webserver
This is a collection of files used during TelWare's Hacktober training events

# To Run SignUp Domain
* git clone this directory
* `cd webserver`
* `cp .env-example .env`
* `nano .env` and correct variables
* `docker build -t "webserver:domainadd" .`
* `docker-compose up`
* server should be running on localhost:8080