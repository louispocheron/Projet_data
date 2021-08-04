<?php

//requête pour récupérer tous les pourcentages par rapport aux dates et aux langages les + populaires
// langage.idLangage = 1 = C++
// langage.idLangage = 3 = Java
// langage.idLangage = 4 = Javascript
// langage.idLangage = 7 = Perl
// langage.idLangage = 8 = PHP
// langage.idLangage = 9 = Python

require('db.php');

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
    $name = [$pop_lang[0][1], $pop_lang[2][1], $pop_lang[3][1], $pop_lang[6][1], $pop_lang[7][1], $pop_lang[8][1]];

   
    echo json_encode($name);
    json_encode($arr);
?>