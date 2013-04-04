<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Roberts Awning and Sign | <?php echo $title;?></title>

<!--=============================================================================
               head Starts here
============================================================================= -->
<head>
	
<?php echo $this -> load -> view('slice/head'); ?>

</head>

<!--=============================================================================
               head ends here
============================================================================= -->



<!--=============================================================================
               body start
============================================================================= -->
<body>
<!--header start-->
<?php echo $this -> load -> view('slice/header'); ?>
<!--header close-->


<!--=========mob nav start=========-->
<?php echo $this -> load -> view('slice/mob_nav'); ?>
<!--=========mob nav close=========-->




<!-- wrapper start -->
<div id="wrapper">
<div id="wrapper_inner">
<!-- Banner start -->
<?php echo $this -> load -> view('slice/banner'); ?>
<!-- Banner End -->  

<!-- content start -->
<div id="content">
<!-- aside_left start -->
<div id="aside_left">
<!---about us here -->
<h1>Products</h1>
<div id="product">
<?php if(isset($products) && count($products)){?>
<?php	foreach ($products as $product){?>
<div class="main_product_image"><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $product -> image; ?>&h=192&w=257&q=90" alt="product"></div>
<div class="main_product_image_content">

<h4><?php echo $product -> name; ?></h4>
<p><?php echo $product -> description; ?></p>
</div>
<?php }
}else{ echo "No product found";}?>
<div class="clear"></div>
</div>
<h1>Our Works</h1>
<div class="gallery_image">
<ul>
<?php if(isset($ourworks) && count($ourworks)){?>
<?php	foreach ($ourworks as $ourwork){?>
<li><a class="fancybox" href="<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>" rel="lightbox[album4]" title=""><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>&h=192&w=257&q=90"  alt=""></a></li>

<?php }
}else{ echo "No Works found";}?>

<div class="clear"></div>
</ul>

<div class="clear"></div>
<!--about us end here-->
</div>
<!--about us end here-->
</div>
<!-- aside_left close -->

<!-- aside_right start -->
<div id="aside_right">
<?php echo $this -> load -> view('slice/aside_right'); ?>
</div>
<div class="clear"></div>
</div>
<!-- content close -->





<div class="clear"></div>
</div>
</div>
<!-- wrapper close -->

<!--footer start-->
<?php echo $this -> load -> view('slice/footer'); ?>
<!--footer close-->









</body>
</html>
