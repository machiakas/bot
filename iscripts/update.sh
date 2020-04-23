#!/bin/bash
echo "Press ctrl+c to exit"
echo Starting cron.....
crontab -l > updatecron
echo "Creating cron for daily update and upgrade at 1:00 am UTC"
echo "You can always make changes in the cron by typing sudo crontab -e"
echo "0 1 * * * apt-get update && apt-get upgrade -y" >> updatecron
crontab updatecron
rm updatecron
echo "Finished setting up cron for daily update and upgrade!!!!"

