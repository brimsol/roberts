<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php if(isset($title)){echo "Roberts Awning and Sign |"."".$title;}else{ echo "Roberts Awning and Sign";}?></title>

<!--=============================================================================
               head Starts here
============================================================================= -->
<head>
	
<?php echo $this -> load -> view('slice/head'); ?>
<style>
.video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
}

.video-container iframe,
.video-container object,
.video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}	
</style>
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
            <p><?php echo ellipsis($slide->description,160); ?></p>
            </label>
            
            
            <!--<label class="banner_link_bottom"><p>Odessusandae Itaquear necessitatibus saepem eveniet restudeeledus empquibdameto.</p>
            </label>-->
            
            
  	    	    <img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $slide -> image; ?>&h=581&w=1349&q=90" />
                
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
<div class="video-container">
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
</div>
EOF;
?>
<?php }}?>
</div>
<div class="welcome_shadow"></div>
<div class="welcome_note">
<h1>Welcome to Roberts Awning and sign</h1>
<p>Roberts Awning and Wallpaper was founded in 1912 to provide residents of Petersburg and the surrounding communities with quality awnings and wallpaper. The company remained in the Roberts’ family until the 1990s when John Radcliffe, a local business owner, bought the company and expanded the offerings to include more commercial customers. Roberts’ Awning and Sign has been owned by two different families for four generations and still serves Petersburg 100 years later. two different families for four generations and still serves Petersburg 100 years later.</p>
<a href="<?php echo site_url('about');?>">Read more</a>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<!-- welcome close -->

<!--==========================MIDDLE SECTION STARTS=============================-->


<div id="middle_section">


	<!--==========TESTIMONIAL STARTS==========-->

    <div id="testimonial">
    
        <h1>Testimonial</h1>
        <?php if(isset($testimonials) && count($testimonials)){?>
        <div class="box">
         <?php foreach($testimonials as $testimonial){?>
            <img alt="collections" src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $testimonial -> image; ?>&h=135&w=295&q=90" class="boximg">
            <p>
            <img src="<?php echo base_url();?>assets/images/qtn_a.png">
            <?php echo ellipsis($testimonial->description,100); ?>
            <img src="<?php echo base_url();?>assets/images/qtn_b.png" class="qtn_b">
            </p>
        <?php } ?>
        </div><!--box-->
<?php } ?>        
    	<div class="more">
        <a href="<?php echo site_url('testimonials');?>"></a>
        </div>
    
    </div><!--testimonial-->

	<!--==========TESTIMONIAL ENDS==========-->
    
    
    <!--==========SIGNS STARTS==========-->

    <div id="signs">
    
        <h1>SIGNS</h1>
        
        <?php if(isset($signs) && count($signs)){?>
        <div class="box">
         <?php foreach($signs as $signs){?>
            <img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $signs -> image; ?>&h=135&w=295&q=90" class="boximg">
            <p>
            <img src="<?php echo base_url();?>assets/images/qtn_a.png">
            <?php echo ellipsis($signs->description,100); ?>
            <img src="<?php echo base_url();?>assets/images/qtn_b.png" class="qtn_b">
            </p>
        <?php } ?>
        </div><!--box-->
<?php } ?>        
    	<div class="more">
        <a href="<?php echo site_url('signs');?>"></a>
        </div>
    
    
    </div><!--signs-->

	<!--==========SIGNS ENDS==========-->
    
    
    <!--==========CLIENT STARTS==========-->

    <div id="client">
    
        <h1>CLIENT OF THE MONTH</h1>

        <?php if(isset($client) && count($client)){?>
        <div class="box">
         <?php foreach($client as $client){?>
            <img alt="collections" src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $client -> image; ?>&h=135&w=295&q=90" class="boximg">
            
            <h4><?php echo $client -> name; ?></h4>
            <p>
            <img src="<?php echo base_url();?>assets/images/qtn_a.png">
            <?php echo ellipsis($client->description,74); ?>
            <img src="<?php echo base_url();?>assets/images/qtn_b.png" class="qtn_b">
            </p>
        <?php } ?>
        </div><!--box-->
<?php } ?>        
    	
        
        <div class="more">
        <a href="<?php echo site_url('client');?>"></a>
        </div>
    
    
    </div><!--client-->

	<!--==========CLIENT ENDS==========-->

<div class="clear"></div>
</div><!--middle_section-->


<!--==========================MIDDLE SECTION ENDS=============================-->

<!--topshadow start -->

<div id="middle_section_shadow"><img src="<?php echo base_url();?>assets/images/bottomshadowb.png" alt="topshadow"></div>

<!--topshadow close -->

<div class="clear"></div>
</div>
</div>
<!-- content close -->

<!--footer start-->
<?php echo $this -> load -> view('slice/footer'); ?>
<!--footer close-->









</body>
</html>
