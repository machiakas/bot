#!/bin/bash
echo Starting cron.....
crontab -l > updatecron1
echo "0 2 * * * cd /var/www/html/iscripts && bash snapshotscript.sh" >> updatecron1
crontab updatecron1
rm updatecron1
echo "updated entry in crontab"
