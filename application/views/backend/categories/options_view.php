<option value="">Select</option>
<?php if(isset($categories)&&count($categories)){?>
<?php foreach($categories as $category){?>
<option value="<?php echo $category -> id; ?>"><?php echo $category -> name; ?></option>
<?php } ?>
<?php } ?>