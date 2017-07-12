<?php
namespace PHPMailDyn;
include 'PHPMailDyn/PHPMailDyn.php';


$class = new PHPMailDyn();

$tab = ['#name' => 'Maxime', '#mail' => 'maxime.grec@gmail.com'];

$mail = $class->dynamise('mail.html', $tab);

ec
?>