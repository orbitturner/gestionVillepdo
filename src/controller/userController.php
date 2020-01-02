<?php
session_start();
require_once '../routes/dir.php';
require_once '../model/userModel.php';
//connexion
if (isset($_POST['connexion']) && $_POST['username']!=NULL || $_POST['username']!=" " || $_POST['pass']!="")
{
	extract($_POST);
	var_dump($_POST);
	$utilisateur = verifierConnexion($username,$pass);
	if ($utilisateur != NULL) 
	{
		$_SESSION['status']=$utilisateur['status'];
		$_SESSION['idUser'] = $utilisateur['user_id'];
		$_SESSION['nomComplet'] = $utilisateur['nom'].' '.$utilisateur['prenom'];
		header("location:".getProjectRoot()."home");
		
	}else{
		
			header("location:".getProjectRoot()."login?connexion=0");		
	     }
	     

}
//deconnexion
if (isset($_GET['logout']) && ($_GET['logout']==1))
 {
	session_unset();
	$_SESSION= array();
	header("location:".getProjectRoot()."login?log=1");
 }

?>