<?php include('entete.php'); ?>
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Electronics</h3>
	</div>
</div>
<!-- //banner -->
<!-- Electronics -->
<div class="electronics">
	<div class="container">
		<div class="col-md-8 electro-left text-center">
			<div class="electro-img-left mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/watch.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Branded Watches</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="electro-img-btm-left mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/e1.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Mobiles</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>




			
			<div class="electro-img-btm-right mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/e2.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Branded Watches</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 electro-right text-center">
			<div class="electro-img-rt mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/e4.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Mobiles</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="ele-bottom-grid">
				<h3><span>Latest </span>Collections</h3>
				<?php 
						require_once("connect.php");
							$sql  = "SELECT * FROM `produit` WHERE `categorie` = 'electronics'";
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
								header("location:electronics.php");
							}
						?>	 
</div>
<!-- //Electronics -->
