<?php
  var_dump($_POST);
  echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . ' de nous avoir contacté à propos de ' . $_POST['user_subject'] . '.' . PHP_EOL . ' Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_phone'] . ' dans les plus brefs délais pour traiter votre demande : ' . PHP_EOL . $_POST['user_message'];
?>