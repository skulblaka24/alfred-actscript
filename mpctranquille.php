<?php

//Play tranquille

//$connection = ssh2_connect('192.168.1.8', 22);

//ssh2_auth_password($connection, 'root', 'pass');

//$stream = ssh2_exec($connection, '/media/USBHDD1/TOADMEDIA/Music/Playlists/mpcplaylist.sh tranquille');

$output = shell_exec('/media/Music/Playlists/mpcplaylist.sh tranquille');
?>
