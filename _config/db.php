
<?php

try
{
// $bdd = new PDO('mysql:host=localhost;dbname=lauryq_db_projet_film;charset=utf8', 'lauryq', '5VfLpqpdqTzKgQ==');
 $bdd = new PDO('mysql:host=localhost;dbname=data_projet;charset=utf8', 'louis', 'Galardo39-');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

?>
