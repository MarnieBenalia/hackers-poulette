<?php

$first_name_h = $_POST['first_name_h'];
$last_name_h_ = $_POST['last_name_h'];
$email_h = $_POST['email_h'];
$phone_number_h = $_POST['phone_number_h'];


if (empty($first_name_h) || empty($last_name_h) || empty($email_h) || empty($phone_number_h)) {

  echo('Activité malveillante détectée !');

} else {
    echo('votre mail a bien été envoyer');
}
?>