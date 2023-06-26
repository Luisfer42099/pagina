<?php

class Database{
	public static function connect(){
		$db = new mysqli('localhost', 'root', '', 'u558315427_ingenieria');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

