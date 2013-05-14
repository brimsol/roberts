
<?php if(isset($gifts)){?>
<?php foreach ($gifts as $gifts) {?>	
<div class="modal-header">
<a class="close" data-dismiss="modal">&times;</a>
<h3>Staff Details</h3>
</div>
<div class="modal-body">
<p><img src="<?php echo base_url(); ?>/uploads/<?php echo $gifts -> image; ?>" /></p>
<table class="table table-bordered">
<tr>
<td>Name</td>	
<td><strong><?php echo $gifts -> name; ?></strong></td>
</tr>
<td>Description</td>	
<td><strong><?php echo $gifts -> description; ?></strong></td>
</tr>
</table>
<?php } ?>
</div>
<div class="modal-footer">
<a class="btn" data-dismiss="modal">Close</a>
</div>

<?php }else{echo "Oops! Some error occured";} ?>