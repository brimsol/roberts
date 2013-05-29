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
    <h1>CLIENT OF THE MONTH</h1>
</div>

<div id="client_test">
	

    
    <div class="client_testimonial">
    <?php if(isset($clients) && count($clients)){?>
          		
			

          <?php foreach($clients as $client){?>

    	<div class="client_left">
    	
            <div class="client_photo">
            <img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $client -> image; ?>&h=100&w=300&q=90">
            </div>
            
            <p class="client_name"><?php echo $client->name;?></p>
           
        

        </div><!--client_left-->
        
        <div class="client_right">
         
         <p>
            <img src="<?php echo base_url();?>assets/images/qtn_a.png" style="margin-right:5px;">
            <?php echo $client->description; ?>
            <img src="<?php echo base_url();?>assets/images/qtn_b.png" style="margin-left:5px;">
            </p>   
        
        </div><!--client_right-->
        <div class="clear"></div>
    <?php } } ?> 
    </div><!--client_testimonial-->
    
    
        

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
