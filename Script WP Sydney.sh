#!/bin/bash

yum update -y
yum install git httpd php php-mysql stress -y

#wget https://wordpress.org/latest.tar.gz
#tar -xzf latest.tar.gz
#cd wordpress
#git remote add origin https://github.com/francelage/wp2.git
#git commit -m "Adicionando Wordpress"

cd ~
git clone https://github.com/francelage/wp2.git

cd /etc/httpd/conf
cp -r httpd.conf httpdconfbackup.conf
rm -rf httpd.conf

cd ~/wp2
cp -r httpd.conf /etc/httpd/conf/httpd.conf
cp -rf wp-config-sydney.wp /var/www/html/wp-config.php
cp -rf wordpress/* /var/www/html/
#cp -rf wp-config.php /var/www/html/

cd /var/www/html/

chmod -R 755 wp-content
chown -R apache.apache wp*

service httpd start
chkconfig httpd on
