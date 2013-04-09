<?php if(isset($products) && count($products)){?>
<?php	foreach ($products as $product){?>
<div class="main_product_image"><a class="fancybox" href="<?php echo base_url(); ?>uploads/<?php echo $product -> image; ?>"><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $product -> image; ?>&h=192&w=257&q=90" alt="product"></a></div>
<div class="main_product_image_content">

<h4><?php echo $product -> name; ?></h4>
<p><?php echo $product -> description; ?></p>
</div>
<?php }
}else{ echo "No product found";}?>
<div class="clear"></div>
<div class="clear"></div>
<div class="clear">&nbsp;</div>
<div class="clear">&nbsp;</div>
<h1></h1>
<div class="gallery_image">
<ul>
<?php if(isset($ourworks) && count($ourworks)){?>
<?php	foreach ($ourworks as $ourwork){?>
<li><a class="fancybox" href="<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>" rel="lightbox[album4]" title=""><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>&h=192&w=257&q=90"  alt=""></a></li>

<?php }
}else{ echo "No Works found";}?>
