<?php

echo "Merci " . $_POST['name'] . " " . $_POST["nickname"] . " de nous avoir contacté à propos de" . $_POST['sujet'] .

    " Un de nos conseiller vous contactera soit à l’adresse" . $_POST['user_email'] . " ou par téléphone au " . $_POST['phone'] . "dans les plus brefs délais pour traiter votre demande : " .

    $_POST['user_message'];
