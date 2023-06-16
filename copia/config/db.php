<?php

class Database{
	public static function connect(){
		$db = new mysqli('213.190.6.179', 'u558315427_ingenieria', 'Ingenieria2022', 'u558315427_ingenieria');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

