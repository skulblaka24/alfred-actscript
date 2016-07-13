<?php

//Volume 0

//$connection = ssh2_connect('192.168.1.8', 22);

//ssh2_auth_password($connection, 'root', 'pass');

//$stream = ssh2_exec($connection, '/media/USBHDD1/TOADMEDIA/Music/Playlists/mpcvolume.sh 0');

$output = shell_exec('/media/Music/Playlists/mpcvolume.sh 0');
?>
