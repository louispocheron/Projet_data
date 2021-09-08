
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
 
//------------------------------------------------------------------DATES

(B) READ UPLOADED CSV
$fh = fopen("csv_projet_data.csv", "r");
if ($fh === false) { exit("Failed to open uploaded CSV file"); }
 
// (C) IMPORT ROW BY ROW
while (($row = fgetcsv($fh,1000,",")) !== false) {

  try {
   
    $stmt = $pdo->prepare("INSERT INTO `dates` (`dates_col`) VALUES (?)");
    $stmt->execute([$row[0]]);
  } catch (Exception $ex) { echo $ex->getmessage(); }
}
fclose($fh);
echo "DONE.";

//------------------------------------------------LANGAGES

$fh = fopen("csv_projet_data.csv", "r");

if ($fh === false) { exit("Failed to open uploaded CSV file"); }


// (C) IMPORT ROW BY ROW
 
// $row = fgetcsv($fh,1000,",");

// $elements = array();
// array_push($elements, $row[3], $row[8], $row[11], $row[12], $row[13], $row[14], $row[18], $row[19], $row[20], $row[23], $row[25], $row[26]);
// for($i=0; $i<12; $i++){

//       $test = array($elements[$i]);

//       try {
//         $stmt = $pdo->prepare("INSERT INTO `langages` (`noms`) VALUES (?)");
//         $stmt->execute($test);
//       } catch (Exception $ex) { echo $ex->getmessage(); }
//     }

// fclose($fh);
// echo "DONE.";

//------------------------------------------------------ POURCENTAGES


// $fh = fopen("csv_projet_data.csv", "r");
// if ($fh === false) { exit("Failed to open uploaded CSV file"); }

// $elements = array();
// $count = 0;
// $first_ligne = 0;
// while (($row = fgetcsv($fh,1000,",")) !== false) {

//   $first_ligne++;
//     $count++;

//     if ($first_ligne > 1) {

//       array_push($elements, $row[3], $row[8], $row[11], $row[12], $row[13], $row[14], $row[18], $row[19], $row[20], $row[23], $row[25], $row[26]);
    
//       if ($count == 19){

//         $arr = array_unique($elements);
//         print_r(array_unique($elements));
//         for($i=0; $i<216; $i++){
//             $test = array($arr[$i]);
//             try {
//             $stmt = $pdo->prepare("INSERT INTO `pourcentages`(`pourcentages_col`) VALUES (?)");
//             $stmt->execute($test);
//           } catch (Exception $ex) { echo $ex->getmessage(); }
//         }
//       }
//     }
//   }

// fclose($fh);
// echo "DONE.";

/////////////////////////////////////////////////////TABLE GENERALE//////////////////////////////////////////////////

$fh = fopen("csv_projet_data.csv", "r");

if ($fh === false) { exit("Failed to open uploaded CSV file"); }


// (C) IMPORT ROW BY ROW
$count = 0;
while (($data = fgetcsv($fh, 1000, ",")) !== FALSE) {
  $arr[$data[0]] = $data[26];
}


/////////////////////////////// Récupérer ID en fonction du langage
//modifier le data[3] pour les autres langages
    try {
            $stmt = $pdo->prepare("SELECT idLangages FROM langages WHERE noms = '".$arr[Date]."'");
            $stmt->execute();
            $result_langage = $stmt->fetch(PDO::FETCH_NUM);
    } catch (Exception $ex) { echo $ex->getmessage(); }

    

/////////////////////////////// Récupérer ID en fonction de l'année
     
  foreach($arr as $annee => $pourcentage){
     
        // echo 'année : '.$annee. ' avec pourcentage : ' .$pourcentage."\n";

        try {
            $stmt = $pdo->prepare("SELECT idDates FROM dates WHERE dates_col = '".$annee."'");
            $stmt->execute();
            $result_annee = $stmt->fetch(PDO::FETCH_NUM);
        } catch (Exception $ex) { echo $ex->getmessage(); }

         try {
            $stmt = $pdo->prepare("SELECT idPourcentages FROM pourcentages WHERE pourcentages_col = '".$pourcentage."'");
            $stmt->execute();
            $result_pourcentage = $stmt->fetch(PDO::FETCH_NUM);
        } catch (Exception $ex) { echo $ex->getmessage(); }

        $array_final = array($result_langage, $result_annee, $result_pourcentage);

        var_dump($result_langage);
          try {
            $stmt = $pdo->prepare("INSERT INTO table_generale (langages_idLangages, dates_idDates, pourcentages_idPourcentages) VALUES (?,?,?)");                       
            $stmt->execute([$result_langage[0], $result_annee[0], $result_pourcentage[0]]);
            // $result_all = $stmt->fetchAll();
        } catch (Exception $ex) { echo $ex->getmessage(); }
  }

?>
