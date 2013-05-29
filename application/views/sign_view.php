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
    <h1>Signs</h1>
</div>

<div id="product">
	
    <div class="product_list">
    
        <ul class="main_product">
  <?php if(isset($signs) && count($signs)){?>
<?php	foreach ($signs as $sign){?>      
        <li>
       
        	<img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $sign -> image; ?>&h=155&w=265&q=90" title="<?php echo $sign -> name; ?>"  alt="<?php echo $sign -> name; ?>">
     
        </li>
        
 <?php } ?>

       
        </ul>
        
<?php }?>       
    </div><!--product_list-->
    <div class="clear"></div>
    
</div><!--product-->

<!--<div id="more_button">
<a href="#">more</a><img src="images/more_button.png">
</div><div class="clear"></div>-->

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
