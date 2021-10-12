<?php 

 $username = $_POST['username'];
 $password = $_POST['password'];

 echo $password;

 require_once("../includes/pageConnexion.php");

 try {

  $req = "SELECT * FROM administration WHERE login=? AND mot_de_passe=?";
  $ps= $pdo->prepare($req);
  $ps->execute( array($username, $password) );

  if ($user=$ps->fetch()) {

  	
      

  	header("location:../admin.php");
  	exit();
  }else{

  	header("location:pages/connexion.php");
  }
 	
 } catch (PDOException $e) {
 	die('Erreur de syntaxe'.$e->getMessage());
 }
 ?>