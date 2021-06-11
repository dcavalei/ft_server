# Install OS in your virtual environment
FROM debian:buster

# Update Software Packages
RUN apt-get update
RUN apt-get upgrade -y

##### Install/Setup Required Programs #####
RUN apt-get -y install wget
RUN apt-get -y install nginx
RUN apt-get -y install mariadb-server

WORKDIR /var/www/html/

RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz
RUN rm -rf latest.tar.gz

RUN apt-get -y install php7.3 php-mysql php-fpm php-pdo php-gd php-cli php-mbstring

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-english.tar.gz
RUN tar -xf phpMyAdmin-5.0.1-english.tar.gz
RUN rm -rf phpMyAdmin-5.0.1-english.tar.gz
RUN mv phpMyAdmin-5.0.1-english phpmyadmin

RUN openssl req -x509 -nodes -days 365 -subj "/C=PT/ST=Portugal/L=Lisbon/O=42lisbon/CN=dcavalei" \
    -addext "subjectAltName=DNS:www.localhost.com" \
    -newkey rsa:2048 -keyout /etc/ssl/nginx-selfsigned.key -out /etc/ssl/nginx-selfsigned.crt;

RUN rm /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default
COPY srcs/wordpress.conf /etc/nginx/sites-available/wordpress.conf
COPY ./srcs/wp-config.php /var/www/html
COPY srcs/config.inc.php phpmyadmin
COPY srcs/init.sh /tmp
COPY ./srcs/autoindex_on.sh /tmp
COPY ./srcs/autoindex_off.sh /tmp

RUN ln -s /etc/nginx/sites-available/wordpress.conf /etc/nginx/sites-enabled/wordpress.conf
RUN chown -R www-data:www-data /var/www/html/* 

WORKDIR /tmp

CMD bash init.sh
