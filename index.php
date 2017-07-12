<?php
namespace PHPMailDyn;
include 'PHPMailDyn/PHPMailDyn.php';


$class = new PHPMailDyn();

$tab = ['#name' => 'Maxime'];

$mail = $class->dynamise('mail.html', $tab);

$send = $class->send('maxime.grec@gmail.com', 'Test', $mail, 'Maxime GREC', 'test@pphpmaildyn.com');

echo $send;
?>