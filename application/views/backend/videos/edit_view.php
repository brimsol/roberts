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

						<form class="form-horizontal" id="onlinestore_form"  enctype="multipart/form-data" method="post" action="<?php site_url('admin/video/edit'); ?>" >
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
										Update Video
									</legend>
								</div>
								<?php if(isset($videos) && count($videos)){
								
								foreach ($videos as $video){?>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Title</label>
									<div class="controls">
										<input placeholder="Video Title" class="input-large" type="text" id="name" name="name" value="<?php echo $video -> name; ?>">
										
									</div>
								</div>
								
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">URL</label>
									<div class="controls">
										<input placeholder="Video URL" id="url" class="input-large" type="text" name="url" value="<?php echo $video -> url; ?>">
										<p class="help-block">
											Youtube URL <em>(eg:url_youtube_here)</em>
										</p>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"></label>

									<!-- Button -->
									<div class="controls">
										<button class="btn btn-success" type="submit">
											Update
										</button> <a href="<?php echo site_url('admin/onlinestores');?>" class="btn btn-primary">
											Cancel
										</a>
									</div>
								</div>

							</fieldset>
							
							<?php } }else{echo "Oops! Some error occured";} ?>
						</form>

					</div>

				
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
