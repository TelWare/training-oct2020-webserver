FROM php:5.6-apache
WORKDIR /var/www/html
EXPOSE 80
COPY src/ /var/www/html/
# sendmail config
############################################

RUN apt-get update && apt-get install -q -y ssmtp mailutils

# root is the person who gets all mail for userids < 1000
RUN echo "root=domaincreation@telware.com" >> /etc/ssmtp/ssmtp.conf

# Here is the gmail configuration (or change it to your private smtp server)
RUN echo "mailhub=mail.smtp2go.com:587" >> /etc/ssmtp/ssmtp.conf
#RUN echo "AuthUser=your@gmail.com" >> /etc/ssmtp/ssmtp.conf
#RUN echo "AuthPass=yourGmailPass" >> /etc/ssmtp/ssmtp.conf

RUN echo "UseTLS=YES" >> /etc/ssmtp/ssmtp.conf
RUN echo "UseSTARTTLS=YES" >> /etc/ssmtp/ssmtp.conf
RUN echo "FromLineOverride=YES" >> /etc/ssmtp/ssmtp.conf

# Set up php sendmail config
RUN echo "sendmail_path=sendmail -i -t" >> /usr/local/etc/php/conf.d/php-sendmail.ini