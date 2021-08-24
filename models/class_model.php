
<?php
class Model{

    public $req;
    public $post_data;
   
    public function __construct($a,$b)
    {

        $this->req = $a;
        $this->post_data = $b;
        
    }

    function selectData()
    {
        include "../_config/db.php";

        try
        {
	        $bdd = new PDO($dsn, $username, $password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);

        }
        catch(Exception $e)
        {
	        die('Erreur : '.$e->getMessage());
        }

        $mdl = $bdd->prepare($this->req);
        $mdl->bindParam(':id', $this->post_data, PDO::PARAM_STR);
        $mdl->execute();
        $res = $mdl->fetchAll(PDO::FETCH_NUM);

        return $res;
    }

}

?>