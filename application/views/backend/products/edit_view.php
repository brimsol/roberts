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

						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php site_url('admin/testimonial/edit'); ?>" >
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
										Update Product
									</legend>
								</div>
								<?php if(isset($products) && count($products)){
          		
			foreach($products as $product){?>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Product Name</label>
									<div class="controls">
										<input placeholder="Name" class="input-large" id="name" type="text" name="name" value="<?php echo $product-> name; ?>">
										
									</div>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Secription</label>
									<div class="controls">
										<textarea name="description" id="description"><?php echo $product-> description; ?></textarea>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Image</label>

									<!-- File Upload -->
									<div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo base_url();?>uploads/<?php echo $product-> image; ?>" />
											</div>
											<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
											<div>
												<span class="btn btn-file"><span class="fileupload-new">Change image</span><span class="fileupload-exists">Change</span>
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
<?php }}else{echo "Nothing found";} ?>
							</fieldset>
						</form>

					</div>

				
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
