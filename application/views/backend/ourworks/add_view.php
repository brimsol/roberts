<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $this -> load -> view('backend/slice/header'); ?>
	</head>

	<body>
		<!--nav bar--->
		<?php echo $this -> load -> view('backend/slice/top_nav'); ?>
		<!--end nav bar--->
		<div class="container">
			<div class="row-fluid">
			
				<?php echo $this -> load -> view('backend/slice/side_nav'); ?>
				
			
					
					<div class="span9 well">

						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php site_url('admin/ourworks/add'); ?>" >
							<fieldset>
								<div id="legend" class="">
									<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?>
									<?php echo $this -> ci_alerts -> display('error'); ?>
									<?php echo $this -> ci_alerts -> display('success'); ?>
									<?php
										if (isset($upload_error)) {echo '<div class="alert alert-error fade in">' . $upload_error . '</div>';
										}
									?>
									<legend class="">
										Add Our Works
									</legend>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Title</label>
									<div class="controls">
										<input placeholder="Title" class="input-large" id="name" type="text" name="name">
										
									</div>
								</div>
								
								<div class="control-group">

									<!-- Select Basic -->
									<label class="control-label">Category (Product)</label>
									<div class="controls">
										<select class="input-large" name="category" id="category">
											<option value="">Select</option>
											<?php if(isset($categories)&&count($categories)){?>
												<?php foreach($categories as $category){?>
												<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
												<?php } ?>
											<?php }?>
										</select>
									</div>

								</div>
								<div class="control-group">

									<!-- Select Basic -->
									<label class="control-label">Sub Category (A)</label>
									<div class="controls">
										<select class="input-large" name="sub_category_a" id="sub_category_a" disabled="disabled">
											<option value="">Select</option>
											<?php if(isset($categories)&&count($categories)){?>
												<?php foreach($categories as $category){?>
												<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
												<?php } ?>
											<?php }?>
										</select>
									</div>

								</div>
								<div class="control-group">

									<!-- Select Basic -->
									<label class="control-label">Sub Category (B)</label>
									<div class="controls">
										<select class="input-large" name="sub_category_b" id="sub_category_b" disabled="disabled">
											<option value="">Select</option>
											<?php if(isset($categories)&&count($categories)){?>
												<?php foreach($categories as $category){?>
												<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
												<?php } ?>
											<?php }?>
										</select>
									</div>

								</div>
								<div class="control-group">

									<!-- Select Basic -->
									<label class="control-label">Sub Category (C)</label>
									<div class="controls">
										<select class="input-large" name="sub_category_c" id="sub_category_c" disabled="disabled">
											<option value="">Select</option>
											<?php if(isset($categories)&&count($categories)){?>
												<?php foreach($categories as $category){?>
												<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
												<?php } ?>
											<?php }?>
										</select>
									</div>

								</div>

								<div class="control-group">
									<label class="control-label">Image</label>

									<!-- File Upload -->
									<div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" />
											</div>
											<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
											<div>
												<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
													<input type="file" name="userfile" />
												</span>
												<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
											</div>
										</div>
									</div>
								</div>
								
								
								<div class="control-group">
									<label class="control-label"></label>

									<!-- Button -->
									<div class="controls">
										<button class="btn btn-success">
											Save
										</button>
									</div>
								</div>

							</fieldset>
						</form>

					</div>

				
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
