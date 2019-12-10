<?php
// open connection
include('../includes/connection.php');

// the action will start if user press on button   product_id	product_name	product_price	product_desc	cat_id   product_image
if (isset($_POST['submit'])){
	//fetch Data from web form
	$name      = $_POST['product_name'];
	$price     = $_POST['product_price'];
	$desc      = $_POST['product_desc'];
	$cat_id    = $_POST['cat_id'];
	$pro_image = $_FILES['product_image']['name'];
	$tmp_name  = $_FILES['product_image']['tmp_name'];
	$path      = "upload/";

	move_uploaded_file($tmp_name,$path.$pro_image);
	


	$query     = "INSERT INTO product(product_name,product_price,product_desc,cat_id,product_image) VALUES ('$name','$price','$desc','$cat_id','$pro_image')";

	
	//perform query
	mysqli_query($conn,$query);
	
	header("location:manage_product.php");
	

}


include('../includes/admin_header.php');

?>
<!-- MAIN CONTENT-->
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Create Product</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">New Product</h3>
								</div>
								<hr>
								<form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
									<div class="form-group">
										<label for="cc-payment" class="control-label mb-1">Product Name</label>
										<input id="cc-pament" name="product_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
									</div>
									<div class="form-group">
										<label for="cc-payment" class="control-label mb-1">Product Price</label>
										<input id="cc-pament" name="product_price" type="text" class="form-control" aria-required="true" aria-invalid="false" >
									</div>
									<div class="form-group">
										<label for="cc-payment" class="control-label mb-1">Product Description</label>
										<input id="cc-pament" name="product_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" >
									</div>
									<div class="form-group">
										<label for="cc-payment" class="control-label mb-1">Product Image</label>
										<input id="cc-pament" name="product_image" type="file" class="form-control" aria-required="true" aria-invalid="false" >
									</div>
									<div class="form-group">
										<label for="cc-payment" class="control-label mb-1">Choose Category</label>
										<select id="cc-pament" name ="cat_id" class="form-control" >
											<?php

												$query  = "SELECT * FROM category";
												$result = mysqli_query($conn,$query);
												while ($row    = mysqli_fetch_assoc($result)){

													echo "<option value ='{$row['cat_id']}'>{$row['cat_name']}</opption>";
												}


											  ?>
										</select>
									</div>
									<div>
										<button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
											<span id="payment-button-amount">Save</span>
										</button>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row m-t-30  ">
				<div class="col-md-12">
					<!-- DATA TABLE-->
					<div class="table-responsive m-b-40">
						<table class="table table-borderless table-data3">
							<thead>
								<tr>
									<th>#</th>
									<th>Product Name</th>
									<th>Product Price</th>
									<th>Product Desc</th>
									<th>Category Name</th>
									<th>Product Image</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$query  = "SELECT * FROM product 
										   INNER JOIN category 
										   ON product.cat_id = category.cat_id";

								$result = mysqli_query($conn,$query);

								while ( $row =mysqli_fetch_assoc($result)) {
									echo "<tr>";
									echo "<td>{$row['product_id']}</td>";
									echo "<td>{$row['product_name']}</td>";
									echo "<td>{$row['product_price']}</td>";
									echo "<td>{$row['product_desc']}</td>";
									echo "<td>{$row['cat_name']}</td>";
									echo "<td><img src ='upload/{$row['product_image']}'></td>";
	
									echo "<td><a href = 'edit_product.php?product_id={$row['product_id']} ' class = 'btn btn-warning'>Edit</a></td>";
									echo "<td><a href = 'delete_product.php?product_id={$row['product_id']} ' class = 'btn btn-danger'>Delete</a></td>";
									echo"</tr>";
								}

								?>
							</tbody>
						</table>
					</div>
					<!-- END DATA TABLE-->
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('../includes/admin_footer.php'); ?>