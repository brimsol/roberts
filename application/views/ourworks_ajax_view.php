
<?php if(isset($ourworks) && count($ourworks)){?>
<?php	foreach ($ourworks as $ourwork){?>
<li><a class="fancybox" href="<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>" rel="lightbox[album4]" title=""><img src="<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>"  alt=""></a></li>

<?php }
}else{ echo "No Works Found";}?>
