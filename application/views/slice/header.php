<div id="header">
	<div id="header_inner">
		<div id="logo">
			<a href=""><img src="<?php echo base_url('assets'); ?>/images/logo.png" alt="logo"></a>
		</div>
		<div id="header_right">
			<div id="contact_search">

				<form method="post" id="search" action="<?php echo site_url('home/search'); ?>">
					<div id="searchhead">
						<input type="text" class="textboxhead" value="Search" onblur="if (this.value=='') this.value='Search'; " onfocus="if (this.value=='Search') this.value='';" name="term">
						<a href="#" onclick="document.getElementById('search').submit();"><img src="<?php echo base_url('assets'); ?>/images/search.png" class="search_icon" alt="search"></a>
				</form>
			</div>

			<div id="contact_number">
				1-804-733-6012
			</div>

			<div class="clear"></div>

		</div>

		<!--nav start-->
		<div id="nav">

			<ul>
				<li >
					<a href="<?php echo site_url(); ?>">HOME</a>
				</li>
				<li >
					<a href="<?php echo site_url('products'); ?>">PRODUCTS</a>
				</li>
				<li>
					<a href="<?php echo site_url('ourworks'); ?>">OUR WORK</a>
				</li>
				<li>
					<a href="#">BLOG</a>
				</li>
				<li>
					<a href="<?php echo site_url('about'); ?>">ABOUT US</a>
				</li>
				<li>
					<a href="<?php echo site_url('contact'); ?>">CONTACT US</a>
				</li>

			</ul>

			<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js" type="text/javascript"></script>
			<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/scripts.js"></script>

		</div>
		<!--nav close-->

	</div>

	<!--=========mob search start=========-->
	<div id="mob_contact_search">

		<div id="mob_contact_number">
			1-804-733-6012
		</div>

		<div id="mob_searchhead">
			<form method="post" id="search_mob" action="<?php echo site_url('home/search'); ?>">
				<input type="text" class="mob_textboxhead" value="Search" onblur="if (this.value=='') this.value='Search'; " onfocus="if (this.value=='Search') this.value='';" name="term">
				<a href="#" onclick="document.getElementById('search_mob').submit();"><img src="<?php echo base_url('assets'); ?>/images/search.png" class="mob_search_icon" alt="search"></a>
			</form>
		</div>

		<div class="clear"></div>

	</div>
	<!--=========mob search close=========-->
</div>
<div class="clear"></div>
</div>