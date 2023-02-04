# Docker All In One Setup
## How to setup docker
```
https://docs.google.com/document/d/1Ux02TLVBbjC5CjbJacUX4RsRDdh-4AGnLoyRQeicWl0/edit?usp=sharing
```
# 1. MYSQL 
## MYSQL Commands 
```
mysql -u root(mysql root user name) -p
password: root 
```

##  MYSQL Listing All DB
```
show databases;
```

# 2. Php my admin
## Username root & password is root

# 3. Nginx
```
docker ps
# Non window system
docker exec -it container_id bash
# window
winpty docker exec -it container_id bash
cd /var/www/html
ls 
```

# 3. PHP
```
docker ps
# Non window system
docker exec -it container_id bash
# window
winpty docker exec -it container_id bash
go to /var/www/html
composer install 
php artisan migrate 
```


# 4. Laravel
```
docker ps
# Non window system
docker exec -it php bash
# window
winpty docker exec -it php bash
default /var/www/html
composer install 
php artisan migrate 

composer --version 

php --version

Laravel version
php artisan --version

Install php extension 
php -m 
```

##  MYSQL ENV DB
```
DB_CONNECTION=mysql
DB_HOST=db # mysql container name
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root
```

## Manually upgarde composer in container
```
sudo apt purge composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```

## Postgresql container
```
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=postgresql
DB_PASSWORD=postgresql
```

# Goto pgsql terminal

```
docker ps 
docker exec -it contaner_id  bash
psql -d laravel -U postgresql -W
password= postgresql
Run in terminal 
postgresql is user name 
laravel is database
psql -U postgresql -d laravel -c "SELECT * FROM users"
```

## Redis controlelr


## Mailhog
```
MAIL_ENCRYPTION=null
MAIL_DRIVER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_FROM_NAME="${APP_NAME}"
MAIL_FROM_ADDRESS="hello@example.com"
```
```
Visit URL
http://localhost:8025/
```
