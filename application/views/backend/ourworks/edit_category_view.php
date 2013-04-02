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
				
			
					
					<div class="span10 well">

						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php site_url('admin/ourworks/category/edit'); ?>" >
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
								<?php if(isset($categories) && count($categories)){
          		
			foreach($categories as $category){?>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Category Name</label>
									<div class="controls">
										<input placeholder="Category Name" class="input-large" id="name" type="text" name="name" value="<?php echo $category-> name; ?>">
										
									</div>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Description</label>
									<div class="controls">
										<textarea name="description" id="description"><?php echo $category-> description; ?></textarea>
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
