
<?php
$output = shell_exec('gpio mode 2 out');

$output2 = shell_exec('gpio write 2 1');
echo "C'est On";

// Stoppe pour 10 secondes
sleep(4);

$output3 = shell_exec('gpio write 2 0');
echo "C'est off";

?>

