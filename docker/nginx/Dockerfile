FROM nginx:1.13-alpine

RUN apk --no-cache add shadow

RUN rm -f /etc/nginx/nginx.conf /etc/nginx/conf.d/*

ADD ./docker/nginx/nginx.conf /etc/nginx/nginx.conf
ADD ./docker/nginx/upstream.conf /etc/nginx/conf.d/upstream.conf
ADD ./docker/nginx/symfony.conf /etc/nginx/conf.d/symfony.conf

RUN addgroup -g 1000 -S www-data && \
    adduser -u 1000 -D -S -G www-data www-data
