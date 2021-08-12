<?php

require('../_config/db.php');

//requête pour récupérer le langage + le nom pour afficher dans cards
// $req_logos = $bdd->prepare("SELECT * FROM langages");
// $req_logos->execute();
// $logos = $req_logos->fetchAll(PDO::FETCH_NUM);
//logos[0] = id
//logos[1] = langage
//logos[2] = url img


//REQUETES POUR GRAPH CHART.JS
function getInfosLess($imgValue, $bdd){
    $req_less_lang = $bdd->prepare("SELECT idtable_generale, dates.dates_col, langages.noms, pourcentages.pourcentages_col, langages.logos
                                   FROM table_generale
                                   JOIN dates
                                   ON table_generale.dates_idDates =  dates.idDates
                                   JOIN pourcentages
                                   ON table_generale.pourcentages_idPourcentages = pourcentages.idPourcentages
                                   JOIN langages
                                   ON table_generale.langages_idLangages = langages.idLangages
                                   WHERE table_generale.langages_idLangages ='".$imgValue."'");


    $req_less_lang->execute();
    $less_lang = $req_less_lang->fetchAll(PDO::FETCH_NUM);

    $annee = [];
    $pourcentage = [];
    $lang = $less_lang[0][2];

    for($i=0; $i < count($less_lang); $i++){
        array_push($annee, $less_lang[$i][1]);
        array_push($pourcentage, $less_lang[$i][3]);
    }

    $all = [$lang, $annee, $pourcentage];

    return $all;

}

?>