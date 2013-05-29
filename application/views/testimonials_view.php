<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<title><?php if(isset($title)){echo "Roberts Awning and Sign |"."".$title;}else{ echo "Roberts Awning and Sign";}?></title>

<?php echo $this -> load -> view('slice/head'); ?>

<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/accordion.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.custom.52731.js"></script> 
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
<div id="wrapper">
<div id="wrapper_inner">
<!-- Banner start -->
<?php echo $this -> load -> view('slice/banner'); ?>
<!-- Banner End -->  

<!-- content start -->
<div id="content">

<!-- aside_left start -->
<div id="aside_left">

<div id="work_heading">
    <h1>TESTIMONIAL</h1>
</div>
						
<div id="testimonial_container">


	<!--=========Testimonial 1==========-->
<?php if(isset($testimonials) && count($testimonials)){
          		
			foreach($testimonials as $testimonial){?>

				
	
	<div class="testimonial_box">
    	
        <div class="testimonial_photo">
      <?php if($testimonial-> image !=''){?><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $testimonial -> image; ?>&h=125&w=214&q=80"/>
	<?php }else{ ?><img src="http://placehold.it/214x125"/><?php } ?>
        </div>
        
        <div class="testimonial_about">
        "<?php echo $testimonial -> description; ?>"
        </div>
        
        <div class="testimonial_person">
        <?php echo $testimonial -> name; ?>
        </div>
    	
    	<div class="clear"></div>
        
    </div><!--testimonial_box-->
 <?php }}else{echo "Nothing found";} ?>   
    
    	
    	

</div><!--testimonial_container-->







<div class="clear"></div>


<div id="work_pagination">
<?php if (isset($links)) {echo $links;}?>
</div>

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
<?php echo $this -> load -> view('slice/footer'); ?>

</body>
</html>
