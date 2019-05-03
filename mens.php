<?php include('entete.php') ?>
<!-- mens -->
<div class="men-wear">
	<div class="container">
	<?php 
						require_once("connect.php");
							$sql  = "SELECT * FROM `produit` WHERE `quantite`>0 AND  `type` =  'mens' and  `quantite`> 0 ORDER BY  `id` desc  ";
							$resultat = mysql_query($sql);
						while($a=mysql_fetch_assoc($resultat)) { ?>
	<div class="col-md-4 product-men no-pad-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src="images/<?php print ($a['photo'])?>.png" alt="" class="pro-image-front">
							<img src="images/<?php print ($a['photo'])?>.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
											<?php 	Print '	<a href="single.php?id='.$a['id'].'" class="link-product-add-cart">Quick View</a> '?>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
						</div>
						<div class="item-info-product ">
									<h4><a href="single.html"><?php print ($a['design']); ?></a></h4>
									<div class="info-product-price">
										<span class="item_price">$<?php print ($a['prix']); ?></span>
										<del>$<?php print ($a['prix'] + 50); ?></del>
									</div>
									<?php Print '	<a href="?id='.$a['id'].'&design='.$a['design'].'&photo='.$a['photo'].'&prix='.$a['prix'].'" class="item_add single-item hvr-outline-out button2">Add to cart</a> '?>									
						</div>
					</div>
				</div>
			</div>
			<?php }
						session_write_close();
						session_start();
						if(isset($_GET['id'])){ 
							require_once("connect.php");
							$id= $_GET['id'];
							$design= $_GET['design'];
							$photo= $_GET['photo'];
							$prix= $_GET['prix'];
						   $email = $_SESSION['email'];
						   $qte="1";
						   echo $email;
						   $req1 = "INSERT INTO `ecommerce`.`commande`(`idProdui`,`design`, `qte`, `email`, `photo`, `total`) VALUES ('".$id."','".$design."',1,'".$email."','".$photo."','".$prix."')";   
								$rs1=mysql_query($req1);
								header("location:index.php");
							}
						?>	 
	</div>
</div>	