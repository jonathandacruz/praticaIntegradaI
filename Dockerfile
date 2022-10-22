FROM httpd:2.4
RUN apt-get install php -y
COPY ./assets /usr/local/apache2/htdocs/public-html/
COPY ./cadastro /usr/local/apache2/htdocs/public-html/
COPY ./errors /usr/local/apache2/htdocs/public-html/
COPY ./fragments /usr/local/apache2/htdocs/public-html/
COPY ./shop /usr/local/apache2/htdocs/public-html/
COPY ./.htaccess /usr/local/apache2/htdocs/public-html/
COPY ./index.php /usr/local/apache2/htdocs/public-html/