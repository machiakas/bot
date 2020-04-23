#!/bin/bash 
echo Fetching instance id 
iid="$(curl http://169.254.169.254/latest/meta-data/instance-id)";
echo Fetching complete 
echo "Changing password to root for mysql" 
mysql -u "root" -p"$iid" -D "mysql" -e "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('root');"

