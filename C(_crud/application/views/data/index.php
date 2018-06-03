<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-lg-12">
		<div class="col-lg-6">
			<a href="<?php echo base_url('brand/addnew');?>" class="btn btn-success">+Add a new item</a>
		</div>

		<div class="col-lg-6 truncateDiv">
			<form action="<?php echo base_url('brand/truncatetable')?>" method="POST" id="truncateform">
			</form>
			<form action="<?php echo base_url('brand/deletealldata')?>" method="POST" id="deletealldataform">
			</form>
			<form action="<?php echo base_url('brand/recoverall')?>" method="POST" id="recoverallform">
			</form>
				<button type="submit" class="btn btn-danger" form="truncateform">Empty table</button>
				<button type="submit" class="btn btn-danger" form="deletealldataform">Delete All</button>
				<button type="submit" class="btn btn-success" form="recoverallform">Recover All</button>
		</div>
	</div>

	<div class="col-lg-12 tableDiv">

		<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th>ID</th>
					<th>Brand Name</th>
					<th>Brand Description</th>
					<th>Created At</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php
					if($brands)
					{
						foreach ($brands as $brand)
						{
							?>
							<tr>
								<td><?php echo $brand->id;?></td>
								<td><?php echo $brand->brandname;?></td>
								<td><?php echo $brand->branddescription;?></td>
								<td><?php echo $brand->reg_date;?></td>

								<td>
									<a href="<?php echo base_url('brand/edit/'.$brand->id)?>" class="btn btn-info">Edit</a>
									<a href="<?php echo base_url('brand/delete/'.$brand->id)?>" class="btn btn-danger">Delete</a>
								</td>
							</tr>

							<?php
						}
					}
					else
					{
						?>
						<h1>No records are available</h1>
						<?php
					}
					?>

			</tbody>
		</table>
	</div>

</body>
</html>
