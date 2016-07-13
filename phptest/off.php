
<?php
$output = shell_exec('gpio mode 2 out');

$output2 = shell_exec('gpio write 2 0');
echo "C'est off";




?>

