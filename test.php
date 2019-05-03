<?php 
			session_start();
			if(isset($_GET['id'])){ 
                require_once("connect.php");
                $id= $_GET['id'];
                $design= $_GET['design'];
                $photo= $_GET['photo'];
               $email = $_SESSION['email'];
               $qte="1";
               echo $email;
               $req1 = "INSERT INTO `ecommerce`.`commande`(`idProdui`,`design`, `qte`, `email`, `photo`) VALUES ('".$id."','".$design."',1,'".$email."','".$photo."')";   
                    $rs1=mysql_query($req1);
                 
                }
		 
			?>