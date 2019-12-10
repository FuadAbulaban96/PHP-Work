<?php
// open connection
include('../includes/connection.php');

include('../includes/admin_header.php');

?>
<!-- MAIN CONTENT-->
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
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
								</tr>
							</thead>
							<tbody>
								<?php

								$query  = "SELECT * FROM product 
										   INNER JOIN category 
										   ON product.cat_id = category.cat_id";

								$result = mysqli_query($conn,$query);

								while ( $row =mysqli_fetch_assoc($result)) {
									
									if ($_GET['cat_id']==$row['cat_id']) {
										
										echo "<tr>";
										echo "<td>{$row['product_id']}</td>";
										echo "<td>{$row['product_name']}</td>";
										echo "<td>{$row['product_price']}</td>";
										echo "<td>{$row['product_desc']}</td>";
										echo "<td>{$row['cat_name']}</td>";
										echo "<td><img src ='upload/{$row['product_image']}'></td>";
										echo"</tr>";
									}
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

<?php include('../includes/admin_footer.php'); ?>s