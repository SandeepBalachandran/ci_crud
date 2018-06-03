
	<h1>Add a new Brand</h1>
	<a href="<?php echo base_url('brand/index');?>" class="btn btn-primary">Go Back </a>

	<form action="<?php echo base_url('brand/submit')?>" method="POST" class="form-horizontal">

		<div class="form-group">
			<lable for="title" class="col-lg-2 text-right">Brand Name</lable>
			<div class="col-lg-10">
				<input type="text" name="txt_title" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<lable for="description" class="col-lg-2 text-right">Brand Description</lable>
			<div class="col-lg-10">
				<textarea name="txt_description" class="form-control" required></textarea>
			</div>
		</div>

		<div class="form-group">
			<lable for="description" class="col-lg-2 text-right"></lable>
			<div class="col-lg-10">
				<input type="submit" name="btnSave" class="btn btn-primary" value="save">
			</div>
		</div>


		