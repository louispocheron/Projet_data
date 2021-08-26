<?php

require('_config/db.php');

    $req_less_lang = $bdd->prepare("SELECT langages.idLangages, dates.dates_col, langages.noms, pourcentages.pourcentages_col, langages.logos, langages.scrap, langages.imagelang
                                   FROM table_generale
                                   JOIN dates
                                   ON table_generale.dates_idDates =  dates.idDates
                                   JOIN pourcentages
                                   ON table_generale.pourcentages_idPourcentages = pourcentages.idPourcentages
                                   JOIN langages
                                   ON table_generale.langages_idLangages = langages.idLangages
                                   WHERE table_generale.langages_idLangages ='".$id."'");


    $req_less_lang->execute();
    $pop_lang = $req_less_lang->fetch(PDO::FETCH_NUM);

?>
