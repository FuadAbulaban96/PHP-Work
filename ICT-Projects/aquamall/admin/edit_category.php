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


	if ($_FILES['cat_image']['error']==0) {
		$query2 = " SELECT * FROM category WHERE cat_id = {$_GET['cat_id']} ";
		$result =mysqli_query($conn,$query2);
		$row    =mysqli_fetch_assoc($result);

		unlink("upload/{$row['cat_image']}");

		move_uploaded_file($tmp_name,$path.$cat_image);
		$query = " UPDATE category SET cat_name      = '$category',
									   cat_image     = '$cat_image' 
									   				   
							      WHERE 
							 	      cat_id         = {$_GET['cat_id']}";

	}
	else{
	
	$query    = " UPDATE category SET cat_name       = '$category'
							      
							      WHERE 
							 	      cat_id         = {$_GET['cat_id']}";
	

    }
    	// Applied query
	if(mysqli_query($conn,$query)){

		header("Location: manage_category.php");

	} /* Back to manage admin page */


}

//Fetch Old Data

$query  = "SELECT * FROM category WHERE   cat_id     = {$_GET['cat_id']}";
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
						<div class="card-header">Update Category</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Edit Category</h3>
							</div>
							<hr>
							<form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Category Name</label>
									<input id="cc-pament" name="cat_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['cat_name'] ?>" >
								</div>
								<div class="form-group">
									<label for="cc-full_name" class="control-label mb-1">Category Image</label>
									<input id="full_name" name="cat_image" type="file" class="form-control cc-full_name identified visa" value="">
								</div>
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