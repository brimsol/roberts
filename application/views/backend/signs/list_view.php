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
				
			
					
					
						<div class="span9">
<legend>signs</legend>
							<?php if(isset($signs) && count($signs)){
							$c=$this->uri->segment(3, 0)+1; ?>
          		
			<table class="table table-hover table-striped table-bordered" id="members_result_table">
						<thead>
						<tr>
							<th>#</th>
							<!--<th>Image</th>-->
							<th>Name</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						
					<?php	foreach ($signs as $sign){?>
						<tr>
							<td><?php echo $c; ?></td>
							<!--<td><a href="#"><img src="http://placehold.it/64x64" alt="<?php echo $collection -> name; ?>"></a></td>-->
							<td><?php echo $sign -> name; ?></td>
							<td><?php echo $sign -> description; ?></td>
							<td>
							<a rel="tooltip" data-original-title="Show in Home" class="btn btn-mini" href="<?php echo site_url('admin/sign/featured'); ?>/<?php echo $sign -> id; ?>" ><i class="icon-flag"></i></a>	
						    <a rel="tooltip" data-original-title="View Details" data-toggle="modal" class="btn btn-mini" href="<?php echo site_url('admin/sign/view'); ?>/<?php echo $sign -> id; ?>" ><i class="icon-eye-open"></i></a>
							<a rel="tooltip" data-original-title="Edit Store" class="btn btn-mini" href="<?php echo site_url('admin/sign/edit'); ?>/<?php echo $sign -> id; ?>" ><i class="icon-edit"></i></a>
							<?php echo anchor('admin/sign/delete/'.$sign->id.'/'.$sign->image,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$sign-> name.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						
							</td>
						</tr>
				
                
							<?php $c++; ?>
							<?php } ?>
					</tbody>
</table>
<?php }else{echo "No records found";} ?>
<div class="pagination pull-right margin-0 unprint">
						<?php
						if (isset($links)) {echo $links;
						}
 ?>
						
					</div>

				
			</div><!--/row-fuid-->
      </div>
      <!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
   
  </div> 
			
	</body>
</html>
