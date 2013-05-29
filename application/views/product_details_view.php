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
<div id="product_heading">
    <h1>PRODUCTS <img src="<?php echo base_url()?>assets/images/al.gif" id="preloader"/></h1>
    <select id="products_filter">
    <option value="All">All</option>

<?php if(isset($products_list) && count($products_list)){?>
<?php	foreach ($products_list as $product){?>
<option value="<?php echo $product -> id; ?>" <?php if($product -> id == $pid){echo "selected='TRUE'";}?>><?php echo $product -> name; ?></option>	


<?php }
}?>	
    </select>
</div>


<div id="product_view">

<?php if(isset($products) && count($products)){?>
<?php	foreach ($products as $product){?>
<div id="product">
<div class="main_product_image"><a class="fancybox" href="<?php echo base_url(); ?>uploads/<?php echo $product -> image; ?>"><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $product -> image; ?>&h=186&w=258&q=90" alt="product"></a></div>
<div class="main_product_image_content">
<h4><?php echo $product -> name; ?></h4>
<p><?php echo $product -> description; ?></p>
<?php $pid = $product -> id;?>

</div>
<div class="clear"></div>
</div>

<?php }
}else{ echo "No product found";}?>
<div class="product_temp">
<ul>
<?php if(isset($ourworks) && count($ourworks)){?>
<?php	foreach ($ourworks as $ourwork){?>
<li><a class="fancybox" href="<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>" rel="lightbox[album4]" title=""><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>&h=81&w=113&q=90"  alt=""></a></li>

<?php }
}else{ echo "No Works found";}?>
<div class="clear"></div>
</ul>

<div class="clear"></div>
</div>


</div>


<div id="more_button">
<a href="<?php echo site_url('ourwork/view');?>/<?php echo $pid;?>">more</a><img src="<?php echo base_url();?>/assets/images/more_button.png">
</div><div class="clear"></div>

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
