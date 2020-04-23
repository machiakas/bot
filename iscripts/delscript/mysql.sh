#/bin/bash
echo "Re-starting MYSQL service"
service mysql restart
sleep 2s;
echo Fetching instance id
iid="$(curl http://169.254.169.254/latest/meta-data/instance-id)";
echo Fetching Complete
echo "Changing password to instance id for mysql"
mysql -u "root" -p"root" -D "mysql" -e "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('$iid');"
echo "Password changed for MYSQL"
/etc/webmin/start
sleep 2s;
echo "Changing password for webmin user admin"
/var/www/html/webmin/changepass.pl /etc/webmin admin $iid;
sleep 5s;
/etc/webmin/start


