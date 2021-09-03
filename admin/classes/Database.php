<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("mysql.lecheribloom.com", "lecheri", "Lecheriblooms", "lecheri");
		return $this->con;
	}
}

?>