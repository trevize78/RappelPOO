<?php
	// permet d'appeler la class au moment de son utilisation. evite d'avoir autant de ligne que de class
	function __autoload($class){ require(__DIR__."/class/".$class.".class.php"); }
/*
    try {
		$db = new PDO("mysql:host=localhost;dbname=class", "root","");
		//print_r($db);
		$db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}catch(Exception $e){
		Log::error("ERREUR dans " . $e->getFile() . " -- Ligne : " . $e->getLine() . " ===> " . $e->getMessage(),"erreurs_log.txt");
	}
*/
?>