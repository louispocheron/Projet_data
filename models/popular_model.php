<?php

//requête pour récupérer tous les pourcentages par rapport aux dates et aux langages les + populaires
// langage.idLangage = 1 = C++
// langage.idLangage = 3 = Java
// langage.idLangage = 4 = Javascript
// langage.idLangage = 7 = Perl
// langage.idLangage = 8 = PHP
// langage.idLangage = 9 = Python

require('../_config/db.php');

$req_pop_lang = $bdd->prepare("SELECT dates.dates_col, langages.noms, pourcentages.pourcentages_col, langages.logos
                               FROM table_generale
                               JOIN dates
                               ON table_generale.dates_idDates =  dates.idDates
                               JOIN pourcentages
                               ON table_generale.pourcentages_idPourcentages = pourcentages.idPourcentages
                               JOIN langages
                               ON table_generale.langages_idLangages = langages.idLangages
                               WHERE table_generale.langages_idLangages = 1 OR table_generale.langages_idLangages = 3 
                               OR table_generale.langages_idLangages = 4 
                               OR table_generale.langages_idLangages = 7 OR table_generale.langages_idLangages = 8 
                               OR table_generale.langages_idLangages = 9");


$req_pop_lang->execute();
$pop_lang = $req_pop_lang->fetchAll(PDO::FETCH_NUM);


?>