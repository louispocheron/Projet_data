<?php

require('../_config/db.php');

require('../models/home_ajax_model.php');


if(isset($_POST['value']) AND !empty($_POST['value'])){

echo JSON_encode(getInfosPop($_POST['value'], $bdd));

}
else{
    echo 'Erreur';
}

?>