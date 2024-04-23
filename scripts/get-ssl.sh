git clone https://github.com/kelunik/acme-client

cd acme-client

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');";

php composer-setup.php;

php -r "unlink('composer-setup.php’);";

php composer.phar install --no-dev

php bin/acme setup –server letsencrypt –email your@email.com

php bin/acme issue –domains yourdomain.com,www.yourdomain.com –path /home/username/public_html –server letsencrypt