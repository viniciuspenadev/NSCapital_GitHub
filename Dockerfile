FROM php:8.2-apache

# Habilitar o mod_rewrite do Apache para URLs amigáveis
RUN a2enmod rewrite

# Configurar o DocumentRoot para a pasta public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Instalar extensões PHP se necessário (exemplo: pdo_mysql)
# RUN docker-php-ext-install pdo_mysql

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar package.json e instalar dependências para o build do CSS
COPY package*.json ./
RUN apt-get update && apt-get install -y nodejs npm && npm install

# Copiar o restante dos arquivos
COPY . .

# Rodar o build do Tailwind
RUN npm run build:css

# Ajustar permissões para o Apache
RUN chown -R www-data:www-data /var/www/html

# Expor a porta 80
EXPOSE 80
