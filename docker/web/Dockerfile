FROM nginx:latest

#RUN apk add --update nginx curl
#RUN rm -rf /var/cache/apk/* && rm -rf /tmp/*

ADD docker/web/init.conf /etc/nginx/

#RUN echo "upstream php-upstream { server php-fpm:9001; }" > /etc/nginx/http.d/upstream.conf

#RUN adduser -D -g '' -G www-data www-data

#CMD ["nginx"]

COPY src/index.php /usr/share/nginx/html/
COPY src/index.php /var/www/html/
#COPY src/index.html /usr/share/nginx/html/


