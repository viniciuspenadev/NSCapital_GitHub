# ESTÁGIO 1: Compilação do CSS (Node)
FROM node:20-slim AS css-builder
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build:css

# ESTÁGIO 2: Servidor Web (PHP + Apache)
FROM php:8.2-apache

# Configurar o diretório público como raiz do site
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Habilitar mod_rewrite para URLs amigáveis
RUN a2enmod rewrite

WORKDIR /var/www/html

# Copiar todo o projeto
COPY . .

# TRAZER O CSS COMPILADO: Copiamos apenas o arquivo gerado no estágio do Node
COPY --from=css-builder /app/public/assets/css/app.css ./public/assets/css/app.css

# Ajustar permissões para o Apache
RUN chown -R www-data:www-data /var/www/html
