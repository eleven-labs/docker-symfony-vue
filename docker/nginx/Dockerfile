FROM nginx:1.13

RUN rm -f /etc/nginx/nginx.conf /etc/nginx/conf.d/*

ADD ./docker/nginx/nginx.conf /etc/nginx/nginx.conf
ADD ./docker/nginx/upstream.conf /etc/nginx/conf.d/upstream.conf
ADD ./docker/nginx/symfony.conf /etc/nginx/conf.d/symfony.conf