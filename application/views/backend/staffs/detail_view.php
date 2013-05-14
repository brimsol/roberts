
<?php if(isset($officials)){?>
<?php foreach ($officials as $officials) {?>	
<div class="modal-header">
<a class="close" data-dismiss="modal">&times;</a>
<h3>Staff Details</h3>
</div>
<div class="modal-body">
<p><img src="<?php echo base_url(); ?>/uploads/<?php echo $officials -> image; ?>" /></p>
<table class="table table-bordered">
<tr>
<td>Name</td>	
<td><strong><?php echo $officials -> name; ?></strong></td>
</tr>
<tr>
<td>Designation</td>	
<td><strong><?php echo $officials -> designation; ?></strong></td>
</tr>
<td>Bio</td>	
<td><strong><?php echo $officials -> description; ?></strong></td>
</tr>
</table>
<?php } ?>
</div>
<div class="modal-footer">
<a class="btn" data-dismiss="modal">Close</a>
</div>

<?php }else{echo "Oops! Some error occured";} ?>