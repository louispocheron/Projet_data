<?php
function getInfosPop($idDate, $bdd){
    
    $req_home = $bdd->prepare("SELECT idtable_generale, dates.dates_col, langages.noms, pourcentages.pourcentages_col
                                   FROM table_generale
                                   JOIN dates
                                   ON table_generale.dates_idDates =  dates.idDates
                                   JOIN pourcentages
                                   ON table_generale.pourcentages_idPourcentages = pourcentages.idPourcentages
                                   JOIN langages
                                   ON table_generale.langages_idLangages = langages.idLangages
                                   WHERE table_generale.dates_idDates = '".$idDate."'");


    $req_home->execute();
    $less_lang = $req_home->fetchAll(PDO::FETCH_NUM);

    $annee = [$less_lang[0][1]];
    $pourcentage = [];
    $lang = [];

    array_push($lang, $less_lang[0][2], $less_lang[2][2], $less_lang[3][2], $less_lang[6][2], $less_lang[7][2], $less_lang[8][2]);
    array_push($pourcentage, $less_lang[0][3], $less_lang[2][3], $less_lang[3][3], $less_lang[6][3], $less_lang[7][3], $less_lang[8][3]);
    

    $all = [$lang, $annee, $pourcentage];

    return $all;


}

?>