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
  <?php }else{echo '<h2 class="accordion-header">Further Categorization not available.</h2>';}  ?>   
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
