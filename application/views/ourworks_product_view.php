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
    <h1>Our Work <img src="<?php echo base_url()?>assets/images/al.gif" id="preloader"/>
	</h1>
    
<select id="ourworks_filter">
	
	<option value="All">All</option>
	
	
<?php if(isset($products) && count($products)){?>
<?php	foreach ($products as $product){?>
<option value="<?php echo $product -> id; ?>"><?php echo $product -> name; ?></option>	
<?php }
}?>	
	
	</select>
	
</div>
<div class="clear"></div>
<div id="ajax_ourworks">
<div id="accordion-container">
<?php if(isset($sidebar)){?>	
    <!--================Accordion Tab 1 Starts==============-->
 <?php	foreach ($sidebar as $sidebar){?>   
 	
 <?php if(count($sidebar)>0){?>	
	<h2 class="accordion-header sub_cat_a" id="<?php echo $sidebar->aid;?>"><?php echo $sidebar->name;?></h2>
    <div class="accordion-content">
    <style>
    a{
    	cursor:pointer;
    }
    </style>
    	<!--================Sub Accordion Tab 1 Starts==============-->
   <?php if(isset($sidebar->sub_cat_b) && count($sidebar->sub_cat_b)){?>	 	
    <?php	foreach ($sidebar->sub_cat_b as $sidebar_b){?>   
       <h2 class="accordion-header2 sub_cat_b" id="<?php echo $sidebar_b->bid;?>"><?php echo $sidebar_b->name;?></h2>
         <?php if(isset($sidebar_b->sub_cat_c) && count($sidebar_b->sub_cat_c)){?>	
       <div class="accordion-content2">
       		<ul>
       			 <?php	foreach ($sidebar_b->sub_cat_c as $sidebar_c){?>   
                <li class="sub_cat_c" id="<?php echo $sidebar_c->cid;?>"><a><?php echo $sidebar_c->name;?></a></li>
                 <?php } ?>   
            </ul>
       </div>
        <?php } ?>  
     <?php } ?>  
     <?php } ?> 
       <!--================Sub Accordion Tab 1 End==============-->
       
       <!--================Sub Accordion Tab 2 Starts==============-->
       
       
       
       <!--================Sub Accordion Tab 2 ends==============-->
    </div>
  <?php }else{echo 'Further Categorization not available.';}  ?>   
    <!--================Accordion Tab 1 Ends==============-->
    <?php }?> 
 <?php }?>
</div>

<!--============ACCORDION ENDS============-->
<div id="ajax_ourworks_filter">
<div id="gallery_image" class="gallery_image">
<ul>

<?php if(isset($ourworks) && count($ourworks)){?>
<?php	foreach ($ourworks as $ourwork){?>
<li><a class="fancybox" href="<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>" rel="lightbox[album4]" title=""><img src="<?php echo base_url(); ?>uploads/<?php echo $ourwork -> image; ?>"  alt=""></a></li>

<?php }
}else{ echo "No Works found";}?>

<div class="clear"></div>
</ul>

</div>

<div class="clear"></div>
</div>

<div id="work_pagination">
	<?php if (isset($links)) {echo $links;}?>
</div>
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
