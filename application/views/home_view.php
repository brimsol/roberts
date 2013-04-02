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





<!--=========banner start=========-->
<div id="banner">
<!--=========slider start=========-->
<section class="slider">
        <div class="flexslider">
        	<?php if(isset($slider) && count($slider)){?>
          		
			
          <ul class="slides">
          <?php foreach($slider as $slide){?>
            <li>
            <label class="banner_link">
            <h1><?php echo $slide->name;?></h1>
            <p><?php echo $slide->description;?></p>
            </label>
            
            
            <!--<label class="banner_link_bottom"><p>Odessusandae Itaquear necessitatibus saepem eveniet restudeeledus empquibdameto.</p>
            </label>-->
            
            
  	    	    <img src="<?php echo base_url();?>uploads/<?php echo $slide->image;?>" />
                
             	</li>
                
                <?php }	

          	}?>
          </ul>
        </div>
      </section>
<!--=========slider close=========-->
<!-- FlexSlider -->
  <script defer src="<?php echo base_url();?>assets/js/jquery.slider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      //SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>



</div>

<!--=========banner close=========-->


<!-- content start -->
<div id="content">
<div id="content_inner">
<!-- welcome start -->
<div class="welcome">
<div class="welcome_video">
<?php if(isset($videos) && count($videos)){?>
          		
			

          <?php foreach($videos as $video){?>	
	<?php
$url = $video->url;

parse_str(parse_url($url, PHP_URL_QUERY), $qstring);

echo <<<EOF
<object width="282" height="184">
	<param name="movie" value="http://www.youtube.com/v/{$qstring['v']}&hl=en&fs=1"></param>
	<param name="allowFullScreen" value="true"></param>
	<param name="allowscriptaccess" value="always"></param>
	<embed src="http://www.youtube.com/v/{$qstring['v']}&hl=en&fs=1"
	       type="application/x-shockwave-flash"
	       allowscriptaccess="always"
	       allowfullscreen="true"
	       width="282"
	       height="184"></embed>
</object>
EOF;
?>
<?php }}?>
</div>
<div class="welcome_shadow"></div>
<div class="welcome_note">
<h1>Welcome to Roberts Awning and sign</h1>
<p>Roberts Awning and Wallpaper was founded in 1912 to provide residents of Petersburg and the surrounding communities with quality awnings and wallpaper. The company remained in the Roberts’ family until the 1990s when John Radcliffe, a local business owner, bought the company and expanded the offerings to include more commercial customers. Roberts’ Awning and Sign has been owned by two different families for four generations and still serves Petersburg 100 years later. two different families for four generations and still serves Petersburg 100 years later.</p>
<a href="">Read more</a>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<!-- welcome close -->


<!-- spotlight start -->
<div id="spotlight">
<div id="spotlight_slide">
<h1>Spotlight</h1>
<?php if(isset($spotlights) && count($spotlights)){?>
          		
			
<ul class="bxslider">
          <?php foreach($spotlights as $spotlight){?>

	
  <li class="spotlight_slide_li"><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $spotlight -> image; ?>&h=135&w=295&q=90"  alt="Spotlight">
  <p> <span class="qtn"></span><?php echo $spotlight->description;?>
<span class="qtn_b"></span>
</p>

<span class="more"><a href=""></a></span>
<span class="spotlight_slide_li_shadow"><img src="<?php echo base_url();?>assets/images/shadowslide.png" alt="shadow"></span>
  </li>
  
 <?php }	

          	}?>

</ul>

<div class="clear"></div>


</div>

<script type="text/javascript">

	if($(window).width () < 480)
	{
		$('.bxslider').bxSlider({
		  minSlides: 1,
		  maxSlides: 1,
		  slideWidth: 311,
		  slideMargin: 10
		});
	}


	else if($(window).width () > 480 && $(window).width () < 800)
	{
		$('.bxslider').bxSlider({
		  minSlides: 1,
		  maxSlides: 1,
		  slideWidth: 311,
		  slideMargin: 10
		});
	}


	else
	{
			$('.bxslider').bxSlider({
		  minSlides: 2,
		  maxSlides: 2,
		  slideWidth: 311,
		  slideMargin: 10
		});
	}
 

</script>



<!-- client_month start-->
<div id="client_month">
<h1>Client of the month</h1>


<?php if(isset($clients) && count($clients)){?>
          		
			

          <?php foreach($clients as $client){?>

 <div class="client_month_li"><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $client -> image; ?>&h=135&w=295&q=90"  alt="collections">
 <h3><?php echo $client->name;?></h3>
  <p> <span class="qtn"></span><?php echo $client->description;?>
<span class="qtn_b"></span>
</p>

<span class="more"><a href=""></a></span>
<span class="client_month_li_shadow"><img src="<?php echo base_url();?>assets/images/shadowslide.png" alt="shadow"></span>
  </div>

<?php } } ?>

</div>
<!-- client_month close-->


<div class="clear"></div>

</div>
<!-- spotlight close -->

<!-- testimonials_topshadow start -->
<div class="testimonials_topshadow_top"><img src="<?php echo base_url();?>assets/images/bottomshadow.png" alt="topshadow"></div>


<div id="testimonials">




<div id="testimonials_slide">
<h1>Testimonials</h1>
  <?php if(isset($testimonials) && count($testimonials)){?>
<ul class="bxslider" style="height:150px;" >

          <?php foreach($testimonials as $testimonial){?>
 <li class="testimonials_slide_li">
<label class="testimonials_slide_li_head"><span class="spanleft"><?php echo $testimonial -> name; ?></span><span class="spanright"><?php echo date("M d,Y", strtotime($testimonial->created_at));?></span>

<div class="clear"></div>
</label>
<span class="testimonials_slide_li_head_image"></span>
<span class="testimonial_image_main"><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $testimonial -> image; ?>&h=55&w=55&q=90"  alt="testimage" class="testimonial_image"><p>“<?php echo $testimonial -> description; ?>”<p></span>


  </li>

<?php } }?>
 
</ul>


<div class="clear"></div>

</div>

<script type="text/javascript">

	if($(window).width () < 480)
	{
		$('.bxslider').bxSlider({
		  minSlides: 1,
		  maxSlides: 1,
		  slideWidth: 311,
		  slideMargin: 10
		});
	}


	else if($(window).width () > 480 && $(window).width () < 800)
	{
		$('.bxslider').bxSlider({
		  minSlides: 1,
		  maxSlides: 1,
		  slideWidth: 311,
		  slideMargin: 10
		});
	}


	else
	{
			$('.bxslider').bxSlider({
		  minSlides: 2,
		  maxSlides: 2,
		  slideWidth: 311,
		  slideMargin: 10
		});
	}
 

</script>





</div>


<div class="testimonials_topshadow"><img src="<?php echo base_url();?>assets/images/bottomshadowb.png" alt="topshadow"></div>
<!-- testimonials_topshadow close -->

<div class="clear"></div>
</div>
</div>
<!-- content close -->

<!--footer start-->
<?php echo $this -> load -> view('slice/footer'); ?>
<!--footer close-->









</body>
</html>
