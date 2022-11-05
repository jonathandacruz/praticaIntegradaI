FROM tomsik68/xampp:7.3.7
COPY ./assets /www/assets/
COPY ./cadastro /www/cadastro/
COPY ./errors /www/errors/
COPY ./fragments /www/fragments/
COPY ./shop /www/shop/
COPY ./.htaccess /www/
COPY ./index.php /www/