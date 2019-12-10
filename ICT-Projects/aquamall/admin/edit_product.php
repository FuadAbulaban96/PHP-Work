<?php
// open connection
include('../includes/connection.php');

// the action will start if user press on button
if (isset($_POST['submit'])){

	$name      = $_POST['product_name'];
	$price     = $_POST['product_price'];
	$desc      = $_POST['product_desc'];
	$cat_id    = $_POST['cat_id'];
	$pro_image = $_FILES['product_image']['name'];
	$tmp_name  = $_FILES['product_image']['tmp_name'];
	$path      = "upload/";

	if ($_FILES['product_image']['error']==0) {
		
		$query2 = " SELECT * FROM product WHERE product_id = {$_GET['product_id']} ";
		$result =mysqli_query($conn,$query2);
		$row    =mysqli_fetch_assoc($result);

		unlink("upload/{$row['product_image']}");
		

		move_uploaded_file($tmp_name,$path.$pro_image);
		$query = " UPDATE product SET  product_name  = '$name',
								       product_price = '$price',
								       product_desc  = '$desc',
								       cat_id        = '$cat_id',
									   product_image = '$pro_image' 
									   				   
							      WHERE 
							 	      product_id     = {$_GET['product_id']}";

	}
	else{
	
		$query = " UPDATE product SET  product_name  = '$name',
									   product_price = '$price',
									   product_desc  = '$desc',
									   cat_id        = '$cat_id' 
										   				   
								  WHERE 
								 	   product_id    = {$_GET['product_id']}";
		

    }
    	// Applied query
	if(mysqli_query($conn,$query)){

		header("Location: manage_product.php");

	} /* Back to manage product page */


}

//Fetch Old Data

$query  = "SELECT * FROM product WHERE   product_id     = {$_GET['product_id']}";
$result = mysqli_query($conn,$query);
$row    = mysqli_fetch_assoc($result);

include('../includes/admin_header.php');

?>
<!-- MAIN CONTENT-->
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Update Product</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Edit Product</h3>
							</div>
							<hr>
							<form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Product Name</label>
									<input id="cc-pament" name="product_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['product_name'] ?>" >
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Product Price</label>
									<input id="cc-pament" name="product_price" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['product_price'] ?>" >
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Product Description</label>
									<input id="cc-pament" name="product_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['product_desc'] ?>" >
								</div>
								<div class="form-group">
									<label for="cc-full_name" class="control-label mb-1">Product Image</label>
									<input id="full_name" name="product_image" type="file" class="form-control cc-full_name identified visa" value="">
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Choose Category</label>
									<select id="cc-pament" name ="cat_id" class="form-control" >
										<?php

											$query  = "SELECT * FROM category";
											$result = mysqli_query($conn,$query);
											while ($row    = mysqli_fetch_assoc($result)){

												echo "<option value ='{$row['cat_id']}'>{$row['cat_name']}</option>";
											}


										  ?>
									</select>
								<div>
									<button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
										<span id="payment-button-amount">Update</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('../includes/admin_footer.php'); ?>