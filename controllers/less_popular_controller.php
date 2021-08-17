<?php
require('models/less_popular_ajax_model.php');

// // Fonction pour Ajax
// if(isset($_POST['value']) AND !empty($_POST['value'])){

// echo JSON_encode(getInfosLess($_POST['value'], $bdd));

// }
// else{
//     echo 'Erreur';
// }

require('views/less_popular_view.php')
?>