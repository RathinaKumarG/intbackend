FROM wyveo/nginx-php-fpm
#RUN rm -rf /usr/share/nginx/html/index.php
COPY index.php /usr/share/nginx/html

