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

						<form class="form-horizontal" id="onlinestore_form"  enctype="multipart/form-data" method="post" action="<?php echo site_url('admin/video/add');?>" >
							<fieldset>
								<div id="legend" class="">
									<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?>
									<?php echo $this -> ci_alerts -> display('error'); ?>
									<?php echo $this -> ci_alerts -> display('success'); ?>
									<?php if(isset($upload_error)){echo '<div class="alert alert-error fade in">'.$upload_error.'</div>';}  ?>
									<legend class="">
										Add Video
									</legend>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Title</label>
									<div class="controls">
										<input placeholder="Vedio Title" class="input-large" id="name" type="text" name="name">
										
									</div>
								</div>
								

								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">URL</label>
									<div class="controls">
										<input placeholder="URL" id="url" class="input-large" type="text" name="url">
										<p class="help-block">
											Youtube URL <em>(eg:url_youtube_here)</em>
										</p>
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
