<?php
include('config.php');
$conn =  New DbConn();
$DbConn =  $conn->dbconection();
include('product.php');
$minrange = $_POST['val_min'];
$maxrange = $_POST['val_max'];
$productbyprices = New Product($DbConn);
$product_pastares= $productbyprices->product_pastares($maxrange,$minrange);
//echo $productbypriceoil->num_rows;
if($product_pastares->num_rows>0){ 
if(!empty($product_pastares)){
?>
<div class="product-sec1">
	<h3 class="heading-tittle">Pasta & Noodles</h3>
	<?php 
	 while($product_pasta = mysqli_fetch_array($product_pastares))
	  {
		?>

	<div class="col-md-4 product-men">
		<div class="men-pro-item simpleCart_shelfItem">
			<div class="men-thumb-item">
				<img src="images/mk7.jpg" alt="">
				<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
						<a href="single.php" class="link-product-add-cart">Quick View</a>
					</div>
				</div>
			</div>
			<div class="item-info-product ">
				<h4>
					<a href="single.php"><?php echo $product_pasta['pro_name'];?></a>
				</h4>
				<div class="info-product-price">
					<span class="item_price">$<?php echo $product_pasta['pro_price'];?></span>
					<del>$<?php echo $product_pasta['pro_oldprice'];?></del>
				</div>
				<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
					<form action="#" method="post">
						<fieldset>
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" />
							<input type="hidden" name="business" value=" " />
							<input type="hidden" name="item_name" value="YiPPee Noodles, 65g" />
							<input type="hidden" name="amount" value="15.00" />
							<input type="hidden" name="discount_amount" value="1.00" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="return" value=" " />
							<input type="hidden" name="cancel_return" value=" " />
							<input type="submit" name="submit" value="Add to cart" class="button" />
						</fieldset>
					</form>
				</div>

			</div>
		</div>
	</div>
	<?php } ?>
	<div class="clearfix"></div>
</div>
<?php
 }
}else{
	?>
<div class="product-sec1">
	<h3 class="heading-tittle">Pasta</h3>
	  <?php echo 'No records';?>
	<div class="clearfix"></div>
</div>
<?php }?>