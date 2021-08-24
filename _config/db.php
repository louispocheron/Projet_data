<?php
$dsn = 'mysql:host=localhost;dbname=data_projet;charset=utf8';
$username = 'louis';
$password = 'Galardo39-';

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