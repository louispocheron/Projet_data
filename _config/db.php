<?php
// $dsn = 'mysql:host=localhost;dbname=louisp_data;charset=utf8';
// $username = 'louisp';
// $password = '5XfF2L1XyxDgig==';
$dsn = 'mysql:host=localhost;dbname=data_projet;charset=utf8';
$username = 'laury';
$password = 'quarto.l';

try
{
// $bdd = new PDO('mysql:host=localhost;dbname=lauryq_db_projet_film;charset=utf8', 'lauryq', '5VfLpqpdqTzKgQ==');
 $bdd = new PDO($dsn, $username, $password);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

?>