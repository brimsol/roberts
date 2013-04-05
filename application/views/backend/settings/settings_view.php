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
		<legend>Settings </legend>
    <ul class="nav nav-tabs">
    <li class="active"><a href="#clients" data-toggle="tab">Client of the Month</a></li>
    <li><a href="#spotlights" data-toggle="tab">Spotlights</a></li>
    <li><a href="#testimonials" data-toggle="tab">Testimonials</a></li>
     <li><a href="#videos" data-toggle="tab">Videos</a></li>
    </ul>
							
	<div class="tab-content">						
							
		<div class="tab-pane active" id="clients">					
								<?php if(isset($clients) && count($clients)){?>
          		
			<?php foreach($clients as $client){?>

				

<div class="well clearfix"><?php if($client-> image !=''){?><img class="pull-left thumbnail" src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $client -> image; ?>&h=60&w=60&q=90"/>
	<?php }else{ ?><img class="pull-left thumbnail" src="http://placehold.it/60x60"/><?php } ?>
<p class="testimonial"><?php echo $client -> description; ?></p><p class="testimonial"><small>-- <?php echo $client -> name; ?></small></p>
<p class="pull-right" >
		<a rel="tooltip" data-original-title="Remove from Home" class="btn btn-mini" href="<?php echo site_url('admin/client/unfeatured'); ?>/<?php echo $client -> id; ?>" ><i class="icon-ban-circle"></i></a>
	<a rel="tooltip" data-original-title="Edit" class="btn btn-mini" href="<?php echo site_url('admin/client/edit'); ?>/<?php echo $client -> id; ?>" ><i class="icon-edit"></i></a>
	<?php echo anchor('admin/client/delete/'.$client->id.'/'.$client->image,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete this,\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?></p>
</div>
								
<?php }}else{echo "Nothing found";} ?>
							
							
	</div>		
	<div class="tab-pane" id="spotlights">
								<?php if(isset($spotlights) && count($spotlights)){?>
          		
			<?php foreach($spotlights as $spotlight){?>

				

<div class="well clearfix"><?php if($spotlight-> image !=''){?><img class="pull-left thumbnail" src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $spotlight -> image; ?>&h=60&w=60&q=100"/>
	<?php }else{ ?><img class="pull-left thumbnail" src="http://placehold.it/60x60"/><?php } ?>
<p class="testimonial"><?php echo $spotlight -> description; ?></p>
<p class="pull-right" >
	<a rel="tooltip" data-original-title="Remove from Home" class="btn btn-mini" href="<?php echo site_url('admin/spotlight/unfeatured'); ?>/<?php echo $spotlight -> id; ?>" ><i class="icon-ban-circle"></i></a>

	<a rel="tooltip" data-original-title="Edit" class="btn btn-mini" href="<?php echo site_url('admin/spotlight/edit'); ?>/<?php echo $spotlight -> id; ?>" ><i class="icon-edit"></i></a>
	<?php echo anchor('admin/spotlight/delete/'.$spotlight->id.'/'.$spotlight->image,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete this,\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?></p>
</div>
								
<?php }}else{echo "Nothing found";} ?>				
							
	</div>
	<div class="tab-pane" id="testimonials">
								<?php if(isset($testimonials) && count($testimonials)){?>
          	
			<?php foreach($testimonials as $testimonial){?>

				

<div class="well clearfix"><?php if($testimonial-> image !=''){?><img class="pull-left thumbnail" src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $testimonial -> image; ?>&h=60&w=60&q=100"/>
	<?php }else{ ?><img class="pull-left thumbnail" src="http://placehold.it/60x60"/><?php } ?>
<p class="testimonial"><?php echo $testimonial -> description; ?></p><p class="testimonial"><small>-- <?php echo $testimonial -> name; ?></small></p>
<p class="pull-right" >
	<a rel="tooltip" data-original-title="Remove from Home" class="btn btn-mini" href="<?php echo site_url('admin/testimonial/unfeatured'); ?>/<?php echo $testimonial -> id; ?>" ><i class="icon-ban-circle"></i></a>

		<a rel="tooltip" data-original-title="Edit" class="btn btn-mini" href="<?php echo site_url('admin/testimonial/edit'); ?>/<?php echo $testimonial -> id; ?>" ><i class="icon-edit"></i></a>
	<?php echo anchor('admin/testimonial/delete/'.$testimonial->id.'/'.$testimonial->image,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete this,\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?></p>
</div>
								
<?php }}else{echo "Nothing found";} ?>		


</div>

	<div class="tab-pane" id="videos">

						<?php if(isset($videos) && count($videos)){?>
						
						<table class="table table-hover table-striped table-bordered" id="members_result_table">
						<thead>
						<tr>
							<th>#</th>
							<!--<th>Image</th>-->
							<th>Title</th>
							<th>Link</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						
							<?php $c=$this->uri->segment(3, 0)+1; 
						foreach ($videos as $video){?>
						<tr>
							<td><?php echo $c; ?></td>
							<!--<td><a href="#"><img src="http://placehold.it/64x64" alt="<?php echo $collection -> name; ?>"></a></td>-->
							<td><?php echo $video -> name; ?></td>
							<td width="60%"><a href="<?php echo $video -> url; ?>" target="_blank" ><?php echo $video -> url; ?></a></td>
							<td>
									<a rel="tooltip" data-original-title="Remove from Home" class="btn btn-mini" href="<?php echo site_url('admin/video/unfeatured'); ?>/<?php echo $video -> id; ?>" ><i class="icon-ban-circle"></i></a>
							<a rel="tooltip" data-original-title="Edit Store" class="btn btn-mini" href="<?php echo site_url('admin/video/edit'); ?>/<?php echo $video -> id; ?>" ><i class="icon-edit"></i></a>
							<?php echo anchor('admin/video/delete/'.$video->id,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$video-> name.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						
							</td>
						</tr>
				
                
							<?php $c++; ?>
							<?php } }else{echo "No records found";} ?>
					</tbody>
			</table>				
						
					</div>
                 </div>
				
			</div><!--/row-fuid-->
      </div>
   

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
