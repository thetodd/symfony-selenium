FROM alpine:3.7

LABEL maintainer="florian.schleich@gmail.com"

RUN apk update && apk upgrade && apk add php7 php7-fpm php7-pdo php7-pdo_mysql php7-openssl php7-xml php7-dom php7-json php7-ctype php7-mbstring \
php7-tokenizer php7-session php7-zip php7-xmlwriter php7-gd php7-curl php7-soap nginx

RUN ln -s /usr/sbin/php-fpm7 /usr/bin/php-fpm

COPY ./nginx.conf /etc/nginx/conf.d/default.conf
COPY . /var/www/app
# RUN cd /var/www/app && chgrp -R nobody storage bootstrap/cache && chmod -R ug+rwx storage bootstrap/cache
# RUN cd /var/www/app && cp .env.deploy .env && php artisan key:generate && php artisan cache:clear

RUN echo "clear_env = no" >> /etc/php7/php-fpm.conf

RUN mkdir /run/nginx && nginx -t

EXPOSE 80

CMD php-fpm -D && nginx -g "daemon off;"
