#!/bin/bash
echo "Password Management Console for Webmin"
read -p "Enter the new password for webmin user admin : " wm
/var/www/html/webmin/changepass.pl /etc/webmin admin $wm
