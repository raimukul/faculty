<?php 
	/**
	 * DataBase connection
	 */
	class Data_base_connection
	{
		private $dbHost     = "sql109.epizy.com";
	    private $dbUsername = "epiz_25046263";
	    private $dbPassword = "gKBF3VoDFt";
	    private $dbName     = "epiz_25046263_tdata";

		function content(){
            // Connect to the database
           return new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
	    }
	}
	$db = new Data_base_connection();
	$connection = $db->content();

	function escape($string){
		global $connection;
		return mysqli_real_escape_string($connection, trim($string));
	}
 ?>

 