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
<h1>Gallery</h1>




<div class="gallery_image">
<ul>
<li><a href="images/banner_image1.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp1.png"  alt=""></a></li>
<li><a href="images/banner_image2.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp2.png"  alt=""></a></li>
<li><a href="images/banner_image1.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp1.png"  alt=""></a></li>
<li><a href="images/banner_image2.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp2.png"  alt=""></a></li>
<li><a href="images/banner_image1.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp1.png"  alt=""></a></li>
<li><a href="images/banner_image1.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp1.png"  alt=""></a></li>
<li><a href="images/banner_image1.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp2.png"  alt=""></a></li>
<li><a href="images/banner_image1.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp1.png"  alt=""></a></li>
<li><a href="images/banner_image2.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp2.png"  alt=""></a></li>
<li><a href="images/banner_image1.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp1.png"  alt=""></a></li>
<li><a href="images/banner_image1.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp2.png"  alt=""></a></li>
<li><a href="images/banner_image1.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp1.png"  alt=""></a></li>
<li><a href="images/banner_image1.png" rel="lightbox[album4]" title=""><img src="images/productimgtemp2.png"  alt=""></a></li>


<div class="clear"></div>
</ul>

<div class="clear"></div>
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
