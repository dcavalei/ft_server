sed "s/autoindex on/autoindex off/" /etc/nginx/sites-available/wordpress.conf > /tmp/wordpress.conf
rm -f /etc/nginx/sites-available/wordpress.conf
mv /tmp/wordpress.conf /etc/nginx/sites-available/
service nginx restart