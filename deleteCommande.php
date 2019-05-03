<?php 
		
			if(isset($_GET['id'])){ 
                require_once("connect.php");
                $id= $_GET['id'];
               $req1 = "DELETE FROM `commande` WHERE `id`='".$id."'";   
                    $rs1=mysql_query($req1);
                 
                }
                header("location:checkout.php");
			?>