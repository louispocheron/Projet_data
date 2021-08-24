<?php

class Model{

    public $req;
    public $params;
   
    public function __construct($a,$b)
    {

        $this->req = $a;
        $this->params = $b;
        
    }

    function selectLang()
    {
        include "_config/db.php";

        try
        {
	        $bdd = new PDO($dsn, $username, $password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        }
        catch(Exception $e)
        {
	        die('Erreur : '.$e->getMessage());
        }

        $mdl = $bdd->prepare($this->req);
        $mdl->execute($this->params);

        return $mdl;
    }

}

?>