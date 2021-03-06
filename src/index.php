<?php
	session_start();
	require_once 'routes/dir.php';
	if ($_SESSION!=null) {
		header('location:'.getProjectRoot().'home');
	}
	if (isset($_GET['connexion']) && $_GET['connexion']==0){
		echo "Login ou mot de passe incorrect !";
	}
?>
<!DOCTYPE html>
<html lang="fr">
	    <!--
        +======================={PROJECT - PRESENTATION}======================+
        |                                                                     |
        |Project Name    : gestionVillepdo - CMDB/ITIL                        |
        |Categorie       : Dynamic App Website                                |
        |FrameWorks      : Bootstrap 4 - MDB                                  |
        |Author          : OrbitTurner                                        |
        |Official Name   : Mohamed GUEYE                                      |
        |Version         : v.0.1.1                                            |
        |Created         : 01-JANUARY-2020                                    |
        |Last update     : 22-Janv-2019                                       |
        |Partie          : LOGIN                                              | 
        |LANGAGE UTILISE : ANGLAIS - FRANCAIS                                 |
        +=====================================================================+
        Pour tout aide concernant le code source contactez-moi!!
        -->
<head>
	<title>GESTION VILLE PDO | LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php getProjectRoot()?>public/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php getProjectRoot()?>public/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php getProjectRoot()?>public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php getProjectRoot()?>public/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php getProjectRoot()?>public/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php getProjectRoot()?>public/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php getProjectRoot()?>public/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php getProjectRoot()?>public/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php getProjectRoot()?>public/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php getProjectRoot()?>public/login/images/bg-002.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action='<?=getProjectPath();?>controller/userController.php' method="post">
					<div class="login100-form-avatar">
						<img src="<?php getProjectRoot()?>public/login/images/agent.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						GESTION VILLE PDO
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="#">
							CLAIM AN ACCOUNT
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php getProjectRoot()?>public/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php getProjectRoot()?>public/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php getProjectRoot()?>public/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php getProjectRoot()?>public/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php getProjectRoot()?>public/login/js/main.js"></script>

</body>
</html>