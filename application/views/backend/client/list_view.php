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
<legend>Client of the Month</legend>
								<?php if(isset($clients) && count($clients)){
          		
			foreach($clients as $client){?>

				

<div class="well clearfix"><?php if($client-> image !=''){?><img class="pull-left thumbnail" src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $client -> image; ?>&h=60&w=60&q=90"/>
	<?php }else{ ?><img class="pull-left thumbnail" src="http://placehold.it/60x60"/><?php } ?>
<p class="testimonial"><?php echo $client -> description; ?></p><p class="testimonial"><small>-- <?php echo $client -> name; ?></small></p>
<p class="pull-right" >
	<a rel="tooltip" data-original-title="Edit" class="btn btn-mini" href="<?php echo site_url('admin/client/edit'); ?>/<?php echo $client -> id; ?>" ><i class="icon-edit"></i></a>
	<?php echo anchor('admin/client/delete/'.$client->id.'/'.$client->image,'<i class="icon-trash icon-white"></i>',
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
