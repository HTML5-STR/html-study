FROM ubuntu:latest 

USER root 


RUN rm -rf /etc/nginx/nginx.conf


ADD nginx.conf /etc/nginx 

ADD web /usr/share/nginx/html/
ADD web /var/www/html/

RUN echo "demon off;" >> /etc/nginx/nginx.conf

EXPOSE 90

CMD service nginx start