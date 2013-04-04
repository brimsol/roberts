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
			
			
					<div class="span8">
						<?php echo $this -> ci_alerts -> display('success'); ?>
						<legend>Videos</legend>
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
							<a rel="tooltip" data-original-title="Edit Store" class="btn btn-mini" href="<?php echo site_url('admin/video/edit'); ?>/<?php echo $video -> id; ?>" ><i class="icon-edit"></i></a>
							<?php echo anchor('admin/video/delete/'.$video->id,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$video-> name.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						
							</td>
						</tr>
				
                
							<?php $c++; ?>
							<?php } }else{echo "No records found";} ?>
					</tbody>
			</table>
						<div class="pagination pull-right margin-0 unprint">
						<?php //echo $links; ?>
						
						</div>

					</div>

			
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
