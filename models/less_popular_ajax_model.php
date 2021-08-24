<?php

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

    return JSON_encode($all);

}


?>