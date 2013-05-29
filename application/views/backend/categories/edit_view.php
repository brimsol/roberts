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

<form class="form-horizontal" method="post" action="" >
							<fieldset>
								<div id="legend" class="">
									<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?>
									<?php echo $this -> ci_alerts -> display('error'); ?>
									<?php echo $this -> ci_alerts -> display('success'); ?>
									
									<legend class="">
										Update Categories
									</legend>
								</div>
								<?php if(isset($categories_editor) && count($categories_editor)){
          		
			foreach($categories_editor as $categories_editor){?>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Name</label>
									<div class="controls">
										<input placeholder="Name" class="input-large" id="name" type="text" name="name" value="<?php echo $categories_editor-> name; ?>">
										
									</div>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Category</label>
									<div class="controls">
									<select  name="category" id="category">
											<?php if(isset($categories)&&count($categories)){?>
												<?php foreach($categories as $categories){?>
												<option value="<?php echo $categories -> id; ?>" <?php if($categories -> id == $categories_editor -> category){echo "selected='TRUE'";}?> ><?php echo $categories -> name; ?></option>
												<?php } ?>
											<?php } ?>
											
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
