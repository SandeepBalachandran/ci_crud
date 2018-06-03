<h1>Add a new Brand</h1>
	<a href="<?php echo base_url('brand/index');?>" class="btn btn-primary">Go Back </a>

	<form action="<?php echo base_url('brand/update')?>" method="POST" class="form-horizontal">
		<input type="hidden" name="hiddenId" value=<?php echo $brandData->id?> >

		<div class="form-group">
			<lable for="title" class="col-lg-2 text-right">Brand Name</lable>
			<div class="col-lg-10">
				<input type="text" value=<?php echo $brandData->brandname;?> name="txt_title" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<lable for="description" class="col-lg-2 text-right">Brand Description</lable>
			<div class="col-lg-10">
				<textarea name="txt_description" class="form-control" required><?php echo $brandData->branddescription;?></textarea>
			</div>
		</div>

		<div class="form-group">
			<lable for="description" class="col-lg-2 text-right"></lable>
			<div class="col-lg-10">
				<input type="submit" name="btnUpdate" class="btn btn-primary" value="update">
			</div>
		</div>