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
<!---about us here -- >
<?php if(isset($page)&&count($page)){ ?>
			
<h1>About Us <?php //if($this -> session -> userdata('username')!=''){?><a href="<?php //echo site_url('admin/page/edit')?>/<?php// echo $page  -> id; ?>"><img src="<?php// echo base_url(); ?>/assets/images/edit.png" alt="Edit"></a> <?php //}?></h1>
<!--<h3>Locate a store near you!</h3>
<p class="paraghraph">Senectus et netus et malesuada fames ac turpis egestas. 
Cras tincidunt diam molestie augue sagittis eget.</p>-->


<?php echo $page -> body; ?>

	<?php } ?>
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
