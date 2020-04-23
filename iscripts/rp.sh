!/bin/bash
clear
echo "Press ctrl+c to exit!!!"
echo "Welcome to Snapshot Management Console"
echo Fetching current retention period......
a="$(sed -n 36p /var/www/html/iscripts/snapshotscript.sh >> a.txt)";
awk -F '"' '$0=$2' a.txt >> b.txt
b="$(cat b.txt)";
echo "Current retention period is $b days"
read -p  "Please enter your new retention period in days : " rpd
echo "The New retention period will be $rpd days"
sed -i "36s|$b|$rpd|" /var/www/html/iscripts/snapshotscript.sh
rm a.txt
rm b.txt
c="$(find . -type f -name sed\* -exec rm {} \;)"
echo "Creating snapshot...."
bash /var/www/html/iscripts/snapshotscript.sh
echo "Creating cron for daily backup at 2:00 AM UTC"
echo "You can always edit the cron by typing sudo crontab -e"
bash /var/www/html/iscripts/backup.sh
echo "We have setup retention period, current snapshot creation and daily cron for you"
