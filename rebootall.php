<?php

//Redemarre RecepteurGPIO

$connection = ssh2_connect('192.168.1.8', 22);

ssh2_auth_password($connection, 'root', 'pass');

$stream = ssh2_exec($connection, 'sudo reboot');



// Stoppe pour 4 secondes
sleep(4);



//Redemarre JARVIS
$output = shell_exec('sudo reboot');


?>
