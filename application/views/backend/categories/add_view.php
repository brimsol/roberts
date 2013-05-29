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

						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('backend/categories/'); ?>/<?php echo $action_link; ?>" >
							<fieldset>
								<div id="legend" class="">
									<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?>
									<?php echo $this -> ci_alerts -> display('error'); ?>
									<?php echo $this -> ci_alerts -> display('success'); ?>
									<legend class="">
										Add Category
									</legend>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Name</label>
									<div class="controls">
										<input placeholder="Category Name" class="input-large" id="name" type="text" name="name">
										
									</div>
								</div>
								<div class="control-group">

									<!-- Select Basic -->
									<label class="control-label">Category</label>
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
