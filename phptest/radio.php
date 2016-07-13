
<?php
$output = shell_exec('/var/www/yana-server/plugins/relay/radioEmission 0 8217034 0 on');

// Stoppe pour 4 secondes
sleep(4);


$output2 = shell_exec('/var/www/yana-server/plugins/relay/radioEmission 0 8217034 0 off');

?>

