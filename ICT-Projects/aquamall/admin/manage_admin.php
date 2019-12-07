<?php
// open connection
include('../includes/connection.php');

// the action will start if user press on button
if (isset($_POST['submit'])){
	//fetch Data from web form
	$email    = $_POST['admin_email'];
	$password = $_POST['admin_password'];
	$fullname = $_POST['fullname'];

	


	$query = "INSERT INTO admin(admin_email,admin_password,fullname) VALUES ('$email','$password','$fullname')";

	//perform query
	if(mysqli_query($conn,$query))
	{
		header("location:manage_admin.php");
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
						<div class="card-header">Create Admin</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">New Admin</h3>
							</div>
							<hr>
							<form action="" method="post" novalidate="novalidate">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Email</label>
									<input id="cc-pament" name="admin_email" type="text" class="form-control" aria-required="true" aria-invalid="false" >
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Password</label>
									<input id="cc-pament" name="admin_password" type="password" class="form-control" aria-required="true" aria-invalid="false" >
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
									<input id="cc-pament" name="fullname" type="text" class="form-control" aria-required="true" aria-invalid="false" >
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
									<th>ID</th>
									<th>Email</th>
									<th>Name</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$query  = "SELECT * FROM admin";
								$result = mysqli_query($conn,$query);
								while ( $row =mysqli_fetch_assoc($result)) {
									echo "<tr>";
									echo "<td>{$row['admin_id']}</td>";
									echo "<td>{$row['admin_email']}</td>";
									echo "<td>{$row['fullname']}</td>";
									echo "<td><a href = 'edit_admin.php?admin_id={$row['admin_id']} ' class = 'btn btn-warning'>Edit</a></td>";
									echo "<td><a href = 'delete_admin.php?admin_id={$row['admin_id']} ' class = 'btn btn-danger'>Delete</a></td>";
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