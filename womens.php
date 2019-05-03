<?php include('entete.php') ?>
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Women's Wear</h3>
	</div>
</div>
<!-- //banner -->
<!-- mens -->
<div class="men-wear">
	<div class="container">
		<div class="col-md-4 products-left">
			
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products">	
			<div class="men-wear-top">
				<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="images/men21.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="images/men11.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="images/men21.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="images/men11.jpg" alt=" "/>
						</li>
						
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-bottom">
				<div class="col-sm-4 men-wear-left">
					<img class="img-responsive" src="images/men31.jpg" alt=" " />
				</div>
				<div class="col-sm-8 men-wear-right">
					<h4>Exclusive Women's Collections</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
					accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
					ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
					explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
					odit aut fugit. </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="single-pro">
		<?php 
						require_once("connect.php");
							$sql  = "SELECT * FROM `produit` WHERE `quantite`> 0 AND  `type` =  'women' ORDER BY  `id` desc  ";
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
									<?php 
								Print '	<a href="?id='.$a['id'].'&design='.$a['design'].'&photo='.$a['photo'].'&prix='.$a['prix'].'" class="item_add single-item hvr-outline-out button2">Add to cart</a> '?>									
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
</div>
