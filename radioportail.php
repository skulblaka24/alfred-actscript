
<?php

$connection = ssh2_connect('192.168.1.7', 22);
					ssh2_auth_password($connection, 'root', 'pass');

					$stream = ssh2_exec($connection, '/var/www/yana-server/plugins/relay/radioEmission 0 8217034 0 on');

//$output = shell_exec('/var/www/yana-server/plugins/relay/radioEmission 0 8217034 0 on');

// Stoppe pour 4 secondes
sleep(0);

$connection = ssh2_connect('192.168.1.7', 22);
					ssh2_auth_password($connection, 'root', 'pass');

					$stream = ssh2_exec($connection, '/var/www/yana-server/plugins/relay/radioEmission 0 8217034 0 off');
//$output2 = shell_exec('/var/www/yana-server/plugins/relay/radioEmission 0 8217034 0 off');

?>

