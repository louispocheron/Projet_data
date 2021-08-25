<?php
$req = "SELECT idtable_generale, dates.dates_col, langages.noms, pourcentages.pourcentages_col, langages.logos
        FROM table_generale
        JOIN dates
        ON table_generale.dates_idDates =  dates.idDates
        JOIN pourcentages
        ON table_generale.pourcentages_idPourcentages = pourcentages.idPourcentages
        JOIN langages
        ON table_generale.langages_idLangages = langages.idLangages
        WHERE table_generale.langages_idLangages = :id";
?>