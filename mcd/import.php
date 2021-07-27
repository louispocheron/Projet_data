
<?php
$dbHost = 'localhost';
$dbUser ='laury';
$dbName = 'data_projet';
$dbPass = 'quarto.l';
$dbChar = 'utf8';

try {
  $pdo = new PDO(
    "mysql:host=".$dbHost.";dbname=".$dbName.";charset=".$dbChar,
    $dbUser, $dbPass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }
 

// (B) READ UPLOADED CSV
// $fh = fopen("csv_projet_data.csv", "r");
// if ($fh === false) { exit("Failed to open uploaded CSV file"); }
 
// // (C) IMPORT ROW BY ROW
// while (($row = fgetcsv($fh,1000,",")) !== false) {
//   try {
   
//     $stmt = $pdo->prepare("INSERT INTO `dates` (`dates_col`) VALUES (?)");
//     $stmt->execute([$row[0]]);
//   } catch (Exception $ex) { echo $ex->getmessage(); }
// }
// fclose($fh);
// echo "DONE.";

//-------------------------------TEST LANGAGES

$fh = fopen("csv_projet_data.csv", "r");
$first_ligne = fgets($fh);
$array = explode(",", $first_ligne);

$array_langages = [$array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], $array[9], $array[10],
 $array[11], $array[12], $array[13], $array[14], $array[15], $array[16], $array[17], $array[18], $array[19], $array[20], $array[21], 
 $array[22], $array[23], $array[24], $array[25], $array[26]];

if ($fh === false) { exit("Failed to open uploaded CSV file"); }
 
// (C) IMPORT ROW BY ROW
 
$stmt = $pdo->prepare("INSERT INTO `langages` (`noms`) VALUES $array_langages ");
$stmt->execute();

fclose($fh);
echo "DONE.";

?>
