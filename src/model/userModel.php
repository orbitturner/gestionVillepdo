<?php
	require_once 'db.php';

    //==================| LOGIN VERIFICATION |==================
	function verifierConnexion ($login, $password){
		global $db;
		$requete = "SELECT * FROM users WHERE login='$login' AND password='$password'";
		return $db->query($requete)->fetch();
		//fetch() est une requete qui ne retourne qu'un seul résultat
		
	}

	//==================| LOGIN VERIFICATION |==================
	function countAllUser(){
		$sql = "SELECT COUNT(id) as nbUser from users WHERE state=1";

        global $db;

        return $db->query($sql)->fetch();
	}