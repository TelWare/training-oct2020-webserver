FROM php:5.6-apache
WORKDIR /var/www/html
EXPOSE 80
COPY src/ /var/www/html/
run apt-get update && apt-get install -y sendmail