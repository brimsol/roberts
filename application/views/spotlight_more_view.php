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
<h1>Spotlights</h1>
<div class="clear"></div>
<p>&nbsp;</p>
<?php if(isset($spotlights)&&count($spotlights)){ ?>
 <?php foreach($spotlights as $spotlight){?>
  </li><li style="float: left; list-style: none outside none; width: 315px; margin-right: 10px;" class="spotlight_slide1_li bx-clone"><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $spotlight -> image; ?>&h=135&w=295&q=90" alt="Spotlight">
  <p><?php echo $spotlight->description; ?></p>
<p>&nbsp;</p>
	<?php } }?>
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
