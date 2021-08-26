<?php
require('../_config/db.php');

function getDataLang($id, $bdd){
    $req_less_lang = $bdd->prepare("SELECT dates.dates_col, langages.noms, pourcentages.pourcentages_col, langages.colorchart
                                   FROM table_generale
                                   JOIN dates
                                   ON table_generale.dates_idDates =  dates.idDates
                                   JOIN pourcentages
                                   ON table_generale.pourcentages_idPourcentages = pourcentages.idPourcentages
                                   JOIN langages
                                   ON table_generale.langages_idLangages = langages.idLangages
                                   WHERE table_generale.langages_idLangages ='".$id."'");


    $req_less_lang->execute();
    $pop_lang = $req_less_lang->fetchAll(PDO::FETCH_NUM);
    
    $annee = [];
    $pourcentage = [];
    $lang = $pop_lang[0][1];
    $color = $pop_lang[0][3];

    for($i=0; $i < count($pop_lang); $i++){
        array_push($annee, $pop_lang[$i][0]);
        array_push($pourcentage, $pop_lang[$i][2]);
    }

    $all = [$lang, $annee, $pourcentage, $color];

    return JSON_encode($all);
}
?>