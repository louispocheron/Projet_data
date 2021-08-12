<?php
require('../models/less_popular_model.php');


if(isset($_POST['value']) AND !empty($_POST['value'])){

echo JSON_encode(getInfosLess($_POST['value'], $bdd));

}
else{
    echo 'Erreur';
}
?>