<?php
$handle = fopen('php://stdin','r');
$input = fgets($handle);
fclose($handle);
$tempchannel =  substr($input, 5, 10);
$channel = explode(" ", $tempchannel);

$channelstring = implode("",$channel);
foreach($channel as $v){
    echo $v;
}
shell_exec("./home/osboxes/Desktop/abrirfirefox.sh"." $channelstring");