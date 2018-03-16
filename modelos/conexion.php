<?php

class Conexion{

	static public function conectar(){

		$link = new PDO(":host=;dbname=",
			            "",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}