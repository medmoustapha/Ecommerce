<?php include('entete.php') ?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- single -->
<script src="js/imagezoom.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- single -->

</head>
<body>



<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Single</h3>
	</div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
	<div class="container">
	<?php 
						require_once("connect.php");
						$idProduit=$_GET['id'];
						$sql  = "SELECT * 
						FROM  `produit` 
						WHERE  `id` =  '".$idProduit."'";
						$resultat = mysql_query($sql);	 
						$nb_total = mysql_fetch_array($resultat);
						
						if (!empty($nb_total)) {
								?> 
								
						  
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<!-- FlexSlider -->
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
					<ul class="slides">
						<li data-thumb="images/<?php print $nb_total['photo']?>.png">
							<div class="thumb-image"> <img src="images/<?php print $nb_total['photo']?>.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/<?php print $nb_total['photo']?>.png">
							<div class="thumb-image"> <img src="images/<?php print $nb_total['photo']?>.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
						<li data-thumb="images/<?php print $nb_total['photo']?>.png">
							<div class="thumb-image"> <img src="images/<?php print $nb_total['photo']?>.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/<?php print $nb_total['photo']?>.png">
							<div class="thumb-image"> <img src="images/<?php print $nb_total['photo']?>.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
					<h3><?php print $nb_total['design']?></h3>
					<p><span class="item_price">$<?php print $nb_total['prix']?></span> <del>- $<?php print $nb_total['prix']+50?></del></p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="occasional">
						
						<div class="clearfix"> </div>
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Quality :</h5>
							<!-- <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">5 Qty</option>
								<option value="null">6 Qty</option> 
								<option value="null">7 Qty</option>					
								<option value="null">10 Qty</option>								
							</select> -->
							<form action="" method="post">
					     	
							<?php 
								Print '<input required="" type="number" name="qte" min=1 max='.$nb_total['quantite'].'/>' ?>							
								
							
						</div>
					</div>
					<div class="occasional">
						
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<!-- <a href="#" class="item_add hvr-outline-out button2">Add to cart</a> -->
						<input type="submit"  name="action" class="item_add hvr-outline-out button2" value="Add to cart" >
					</div>
					</form> 
		</div>
	
		<?php
	  
	} 
	if(isset($_POST['action'])){
		session_write_close();
		session_start();
		 $qte = $_POST['qte'];
		 $total = $_POST['qte']* $nb_total['prix'];
		 $email = $_SESSION['email'];
		 $req1 = "INSERT INTO `ecommerce`.`commande`(`idProdui`,`design`, `qte`, `email`, `photo`, `total`) VALUES ('".$nb_total['id']."','".$nb_total['design']."','".$qte."','".$email."','".$nb_total['photo']."','".$total."')";   
		 $rs1=mysql_query($req1);
		 header("location:checkout.php");
		} ?>
	</div>
</div>
<!-- //single -->

</body>
</html>
