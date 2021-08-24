<?php
include '../models/class_model.php';



// Fonction pour Ajax
if(isset($_POST['value']) AND !empty($_POST['value'])){

$idLess = $_POST['value'];
require('../models/less_popular_ajax_model.php');

$mod = new Model($req, $idLess);
$result = $mod->selectData();

$annee = [];
$pourcentage = [];
$lang = $result[0][2];

for($i=0; $i < count($result); $i++){
    array_push($annee, $result[$i][1]);
    array_push($pourcentage, $result[$i][3]);
}

$all = [$lang, $annee, $pourcentage];
echo JSON_encode($all);
}
else{
    echo 'Erreur';
}

?>