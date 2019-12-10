<?php
// open connection
include('../includes/connection.php');

// the action will start if user press on button
if (isset($_POST['submit'])){
	//fetch Data from web form
	$category  = $_POST['cat_name'];

	//get data from FILE
	$cat_image = $_FILES['cat_image']['name'];
	$tmp_name  = $_FILES['cat_image']['tmp_name'];
	$path      = "upload/";

	move_uploaded_file($tmp_name,$path.$cat_image);



	$query     = "INSERT INTO category (cat_name,cat_image) VALUES ('$category','$cat_image')";

	//perform query
	if(mysqli_query($conn,$query))
	{
		header("location:manage_category.php");
	}


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
						<div class="card-header">Create Category</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">New Category</h3>
							</div>
							<hr>
							<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Category Name</label>
									<input id="cc-pament" name="cat_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Category Image</label>
									<input id="cc-pament" name="cat_image" type="file" class="form-control" aria-required="true" aria-invalid="false" >
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
									<th>Category ID</th>
									<th>Category Name</th>
									<th>Category Image</th>
									<th>Category Products</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$query  = "SELECT * FROM category";
								$result = mysqli_query($conn,$query);
								while ( $row =mysqli_fetch_assoc($result)) {
									echo "<tr>";
									echo "<td>{$row['cat_id']}</td>";
									echo "<td>{$row['cat_name']}</td>";
									echo "<td><img src ='upload/{$row['cat_image']}'></td>";
									echo "<td><a href  = 'viewproducts_category.php?cat_id={$row['cat_id']} ' class = 'btn btn-info'>View</a></td>";
									echo "<td><a href  = 'edit_category.php?cat_id={$row['cat_id']} ' class = 'btn btn-warning'>Edit</a></td>";
									echo "<td><a href  = 'delete_category.php?cat_id={$row['cat_id']} ' class = 'btn btn-danger'>Delete</a></td>";
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