# Sử dụng hình ảnh PHP chứa Apache
FROM php:latest

# Cài đặt git (nếu cần)
RUN apt-get update && apt-get install -y git

# Cloning PHPMailer từ GitHub
RUN git clone https://github.com/PHPMailer/PHPMailer.git /var/www/html/phpmailer

# Di chuyển vào thư mục PHPMailer
WORKDIR /var/www/html/phpmailer

# Copy file page-gio-hang.php vào container
COPY ./page-gio-hang.php /var/www/html/phpmailer/page-gio-hang.php

# CMD để chạy Apache server
CMD ["apache2-foreground"]
