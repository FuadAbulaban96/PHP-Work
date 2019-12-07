<?php
// open connection
include('../includes/connection.php');

// the action will start if user press on button
if (isset($_POST['submit'])){
	//fetch Data from web form
	$email    = $_POST['admin_email'];
	$password = $_POST['admin_password'];
	$fullname = $_POST['fullname'];

	


	$query    = " UPDATE admin SET admin_email    = '$email',
								   admin_password = '$password',
								   fullname       = '$fullname'
							   WHERE 
							 	   admin_id       = {$_GET['admin_id']}";

	//perform query
	mysqli_query($conn,$query);

	header("location:manage_admin.php");
}

//Fetch Old Data

$query  = "SELECT * FROM admin WHERE   admin_id   = {$_GET['admin_id']}";
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
						<div class="card-header">Update Admin</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Edit Admin</h3>
							</div>
							<hr>
							<form action="" method="post" novalidate="novalidate">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Email</label>
									<input id="cc-pament" name="admin_email" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['admin_email'] ?>" >
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Password</label>
									<input id="cc-pament" name="admin_password" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['admin_password'] ?>" >
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
									<input id="cc-pament" name="fullname" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['fullname'] ?>" >
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