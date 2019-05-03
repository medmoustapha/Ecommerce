<?php include('entete.php'); 
session_write_close();
session_start();
if(!isset($_SESSION['email'])) {
	?> 
	<script type='text/javascript'>alert("Connecter ou enregister")</script>
	
<?php } else{
?>
<div class="page-head">
	<div class="container">
		<h3>Check Out</h3>
	</div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
	<div class="container">
		<h3>My Shopping Bag</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>Remove</th>
						<th>Product</th>
						<th>Quantity</th>
						<th>Product Name</th>
						<th>Price</th>
					</tr>
				</thead>
				<?php 
						require_once("connect.php");
						
						$sum = 0;
					    $email = $_SESSION['email'];  
							$sql  = "SELECT * FROM `commande` WHERE `email`='".$email."'";
							$resultat = mysql_query($sql);	 
							$nb_total = mysql_fetch_array($resultat);
						while($a=mysql_fetch_assoc($resultat)) { $sum  =  $sum + $a['total']?>
					<tr class="rem1">
						<td class="invert-closeb">
							<div class="rem">
							<?php Print' <a href="deleteCommande.php?id='.$a['id'].'"><div class="close1"> </div></a>'?>							</div>
							
						</td>
						<?php Print'<td class="invert-image"><a href="single.php?id='.$a['idProdui'].'"><img src="images/'.$a['photo'].'.png" alt=" " class="img-responsive" /></a></td>'?>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">            
									<div class="entry value"><span><?php print ($a['qte'])?></span></div>
									
								</div>
							</div>
						</td>
						<td class="invert"><?php print ($a['design'])?></td>
						<td class="invert">$<?php print ($a['total'])?></td>
					</tr>
					
						<?php } ?>
					
					
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
			</table>
		</div>
		<div class="checkout-left">	
				
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
				</div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Shopping basket</h4>
					<ul>
						<!-- <li>Hand Bag <i>-</i> <span>$45.99</span></li>
						<li>Watches <i>-</i> <span>$45.99</span></li>
						<li>Sandals <i>-</i> <span>$45.99</span></li>
						<li>Wedges <i>-</i> <span>$45.99</span></li> -->
						<li>Total <i>-</i> <span>$<?php print ($sum)?></span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
<?php  } ?>
