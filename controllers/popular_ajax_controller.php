<?php
require('../models/popular_ajax_model.php');


echo getFilmByYear($_POST['value'], $bdd);


?>