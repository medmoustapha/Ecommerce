<?php
session_start();
	if(isset($_POST['action'])){ 
  require_once("connect.php");
  $name= $_POST['name'];
  $prenom= $_POST['prenom'];
  $adress= $_POST['adress'];
  $telephone= $_POST['telephone'];
	$email=$_POST['email'];
  $password=md5($_POST['password']);

	/* ="insert into client values('".$name."','".$prenom."','".$adress."','".$telephone."','".$email."','".$password."')"; */
  $req1 = "INSERT INTO `ecommerce`.`client` (`name`, `prenom`, `adress`, `telephone`, `email`, `password`) VALUES ('".$name."','".$prenom."','".$adress."','".$telephone."','".$email."','".$password."')";   
  $rs1=mysql_query($req1);
        if($rs1){
          echo "inserer";
        }
        else echo "non inserer";
   } ?> 