<?php

//requête pour récupérer tous les pourcentages par rapport aux dates et aux langages les + populaires
require('../_config/db.php');

$req_pop_lang = $bdd->prepare("SELECT dates.dates_col, langages.noms, pourcentages.pourcentages_col, langages.logos
                               FROM table_generale
                               JOIN dates
                               ON table_generale.dates_idDates =  dates.idDates
                               JOIN pourcentages
                               ON table_generale.pourcentages_idPourcentages = pourcentages.idPourcentages
                               JOIN langages
                               ON table_generale.langages_idLangages = langages.idLangages
                               WHERE table_generale.langages_idLangages = 2 OR table_generale.langages_idLangages = 5 
                               OR table_generale.langages_idLangages = 6 
                               OR table_generale.langages_idLangages = 10 OR table_generale.langages_idLangages = 11 
                               OR table_generale.langages_idLangages = 12");


$req_pop_lang->execute();
$pop_lang = $req_pop_lang->fetchAll(PDO::FETCH_NUM);


?>