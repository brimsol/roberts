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
<legend>Our Works</legend>
							<?php if(isset($ourworks) && count($ourworks)){
							//$c=$this->uri->segment(3, 0)+1; ?>

						
				
						<div class="row-fluid">
            <ul class="thumbnails">
            	
           	<?php	foreach ($ourworks as $ourwork){?>  
               <li class="span3">
                <div class="thumbnail">
                  <img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>&h=200&w=300&q=90" alt="300x200">
                  <div class="caption">
                    <h3><?php echo $ourwork -> name; ?></h3>
                    <p><span class="badge badge-info">Category :</span> <?php echo $ourwork -> category; ?></p>
                    <p><a rel="tooltip" data-original-title="View Details" data-toggle="modal" class="btn btn-mini" href="<?php echo site_url('admin/ourworks/view'); ?>/<?php echo $ourwork -> id; ?>" ><i class="icon-eye-open"></i></a>
							<a rel="tooltip" data-original-title="Edit Store" class="btn btn-mini" href="<?php echo site_url('admin/ourworks/edit'); ?>/<?php echo $ourwork -> id; ?>" ><i class="icon-edit"></i></a>
							<?php echo anchor('admin/ourworks/delete/'.$ourwork->id,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$ourwork-> name.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
				    </p>
                  </div>
                </div>
              </li>
        <?php } ?>      
            </ul>
          </div>
				
                
						
							<?php }else{echo "No records found";} ?>


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
			
		<!---work around--->
		<style>.first-in-row { margin-left: 0 !important; }</style>
		
		
		<script>
			/**
			 * Adds 0 left margin to the first thumbnail on each row that don't get it via CSS rules.
			 * Recall the function when the floating of the elements changed.
			 */
			function fixThumbnailMargins() {
				$('.row-fluid .thumbnails').each(function() {
					var $thumbnails = $(this).children(), previousOffsetLeft = $thumbnails.first().offset().left;
					$thumbnails.removeClass('first-in-row');
					$thumbnails.first().addClass('first-in-row');
					$thumbnails.each(function() {
						var $thumbnail = $(this), offsetLeft = $thumbnail.offset().left;
						if (offsetLeft < previousOffsetLeft) {
							$thumbnail.addClass('first-in-row');
						}
						previousOffsetLeft = offsetLeft;
					});
				});
			}

			// Fix the margins when potentally the floating changed
			$(window).resize(fixThumbnailMargins);

			fixThumbnailMargins();

		</script>
		
	</body>
</html>
