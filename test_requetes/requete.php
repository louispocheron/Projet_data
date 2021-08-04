<?php
require('connexion.php');

$req_pop_lang = $bdd->prepare("SELECT dates.dates_col, langages.noms, pourcentages.pourcentages_col, langages.logos
                                FROM table_generale
                                JOIN dates
                                ON table_generale.dates_idDates =  dates.idDates
                                JOIN pourcentages
                                ON table_generale.pourcentages_idPourcentages = pourcentages.idPourcentages
                                JOIN langages
                                ON table_generale.langages_idLangages = langages.idLangages
                                WHERE table_generale.langages_idLangages = 1");

$req_pop_lang->execute();
$pop_lang = $req_pop_lang->fetchAll(PDO::FETCH_NUM);


$result = [];
for ($i =0; $i <count($pop_lang); $i++){
    array_push($result, $pop_lang[$i][2]);
}

json_encode($result);



$req_pop_lang = $bdd->prepare("SELECT dates.dates_col, langages.noms, pourcentages.pourcentages_col
FROM table_generale
JOIN dates
ON table_generale.dates_idDates =  dates.idDates
JOIN pourcentages
ON table_generale.pourcentages_idPourcentages = pourcentages.idPourcentages
JOIN langages
ON table_generale.langages_idLangages = langages.idLangages
WHERE table_generale.dates_idDates = 1");

$req_pop_lang->execute();
$pop_lang = $req_pop_lang->fetchAll(PDO::FETCH_NUM);



    $arr = [$pop_lang[0][2], $pop_lang[2][2], $pop_lang[3][2], $pop_lang[6][2], $pop_lang[7][2], $pop_lang[8][2]];
    $name = [$pop_lang[0][0], $pop_lang[2][0], $pop_lang[3][0], $pop_lang[6][0], $pop_lang[7][0], $pop_lang[8][0]];

   
json_encode($name);
json_encode($arr);


$req_pop_lang = $bdd->prepare("SELECT dates.dates_col
FROM table_generale
JOIN dates
ON table_generale.dates_idDates =  dates.idDates
JOIN pourcentages
ON table_generale.pourcentages_idPourcentages = pourcentages.idPourcentages
JOIN langages
ON table_generale.langages_idLangages = langages.idLangages
WHERE table_generale.dates_idDates");

$req_pop_lang->execute();
$pop_lang = $req_pop_lang->fetchAll(PDO::FETCH_NUM);

$dates = [];
for ($i =0; $i <count($pop_lang); $i++){
    array_push($dates, $pop_lang[$i]);
}
json_encode($dates);



?>