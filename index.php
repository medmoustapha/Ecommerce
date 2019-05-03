
<?php include('entete.php'); ?>
<!-- banner -->									
<div class="product-easy">
	<div class="container">
	
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						
					<?php 
						require_once("connect.php");
							$sql  = "SELECT * FROM `produit` WHERE `quantite` > 0";
							$resultat = mysql_query($sql);	 
							$nb_total = mysql_fetch_array($resultat);
						while($a=mysql_fetch_assoc($resultat)) { ?>
											
						<div class="col-md-3 product-men">
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
										<del>$<?php print ($a['prix']+ 100); ?></del>
									</div>
									<?php 
								Print '	<a href="?id='.$a['id'].'&design='.$a['design'].'&photo='.$a['photo'].'&prix='.$a['prix'].'" class="item_add single-item hvr-outline-out button2">Add to cart</a> '?>							
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
			</div>
		</div>
	</div>
</div>
<!-- //product-nav -->

<!-- footer -->

<!-- //footer -->

