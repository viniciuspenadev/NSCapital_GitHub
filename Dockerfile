FROM php:8.2-apache

# Configurar o diretório público como raiz do site
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Habilitar mod_rewrite para URLs amigáveis
RUN a2enmod rewrite

WORKDIR /var/www/html

# Copiar todo o projeto
COPY . .

# Ajustar permissões para o Apache
RUN chown -R www-data:www-data /var/www/html
