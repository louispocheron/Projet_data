<?php
include '../models/class_model.php';

if(isset($_POST['value']) AND !empty($_POST['value'])){

$idHome = $_POST['value'];
require('../models/home_ajax_model.php');

$mod = new Model($req, $idHome);
$result = $mod->selectData();

$annee = [$result[0][1]];
$pourcentage = [];
$lang = [];

array_push($lang, $result[0][2], $result[2][2], $result[3][2], $result[6][2], $result[7][2], $result[8][2]);
array_push($pourcentage, $result[0][3], $result[2][3], $result[3][3], $result[6][3], $result[7][3], $result[8][3]);
    

$all = [$lang, $annee, $pourcentage];

echo JSON_encode($all);

}
else{
    echo 'Erreur';
}

?>