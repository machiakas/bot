#!/bin/bash
echo "Re-starting MYSQL service"
service mysql restart
sleep 2s;
read -s -p "Enter current root password: " cpd
echo ""
read -s -p "Enter new password: " npd
echo ""
read -s -p "Confirm Password: " cnpd
if [ $npd == $cnpd ]
then
        mysql -u "root" -p"$cpd" -D "mysql" -e "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '$npd';"
        sleep 1s;
        printf "\nPassword changed for mysql root user!!!\n"
else
        printf "\nSorry...Password do not match!!!\n"
fi
