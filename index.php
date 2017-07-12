<?php
namespace PHPMailDyn;

include 'PHPMailDyn/PHPMailDyn.php';


$class = new PHPMailDyn();

$tab = [
    '#name' => 'John',
    '#mail' => 'john.doe@gmail.com',
    '#text' => 'Ceci est un text',
    '#link' => 'http://test-de-lien.com'
];
$mail = $class->dynamise('mail.html', $tab);

echo $mail;

?>