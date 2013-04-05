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
				
			
					
					
						<div class="span10">
							<?php echo $this -> ci_alerts -> display('success'); ?>
<legend>Testimonials</legend>
								<?php if(isset($testimonials) && count($testimonials)){
          		
			foreach($testimonials as $testimonial){?>

				

<div class="well clearfix"><?php if($testimonial-> image !=''){?><img class="pull-left thumbnail" src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $testimonial -> image; ?>&h=60&w=60&q=100"/>
	<?php }else{ ?><img class="pull-left thumbnail" src="http://placehold.it/60x60"/><?php } ?>
<p class="testimonial"><?php echo $testimonial -> description; ?></p><p class="testimonial"><small>-- <?php echo $testimonial -> name; ?></small></p>
<p class="pull-right" >
	<a rel="tooltip" data-original-title="Show in Home" class="btn btn-mini" href="<?php echo site_url('admin/testimonial/featured'); ?>/<?php echo $testimonial -> id; ?>" ><i class="icon-flag"></i></a>
	<a rel="tooltip" data-original-title="Edit" class="btn btn-mini" href="<?php echo site_url('admin/testimonial/edit'); ?>/<?php echo $testimonial -> id; ?>" ><i class="icon-edit"></i></a>
	<?php echo anchor('admin/testimonial/delete/'.$testimonial->id.'/'.$testimonial->image,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete this,\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?></p>
</div>
								
<?php }}else{echo "Nothing found";} ?>
					
<div class="pagination pull-right margin-0 unprint">
						<?php
						if (isset($links)) {echo $links;
						}
 ?>
						
					</div>

				
			</div><!--/row-fuid-->
      </div>
   
  </div> 
			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
