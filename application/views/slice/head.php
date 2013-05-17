<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<title><?php if(isset($page_title)){echo $page_title;}else{echo "Roberts Awning and Signs";}?></title>
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
<!--media Query css-->
<link href="<?php echo base_url();?>assets/css/media.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,600italic' rel='stylesheet' type='text/css'>
<!--flexslider css-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.bxslider.css" type="text/css" media="screen" />

<!--[if IE 7 ]> <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="ie8">    <![endif]-->
<!--[if lt IE 9]> <html lang="en" class="ie9">    <![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!-- commen juery -->
<script src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>
<!-- mobile juery -->
<script src="<?php echo base_url();?>assets/js/mobile.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url();?>assets/js/commen.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.bxslider.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.bxslider.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.dotdotdot.js" ></script>
<script src="<?php echo base_url();?>assets/js/ajax.js"></script>
<!-- Add jQuery library -->

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url('assets');?>fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url('assets');?>fancybox/source/jquery.fancybox.pack.js"></script>
<?php
function ellipsis($text, $max=100, $append='&hellip;')
{
    if (strlen($text) <= $max) return $text;
    $out = substr($text,0,$max);
    if (strpos($text,' ') === FALSE) return $out.$append;
    return preg_replace('/\w+$/','',$out).$append;
}
?>