<div class="navbar">
<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo site_url('dashboard'); ?>"> <span>Roberts Awnings</span></a>
				
				<!-- user dropdown starts -->
				<?php if($this -> session -> userdata('username') != '' ){$username = $this -> session -> userdata('username'); ?>
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $username; ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo site_url('admin/change_password'); ?>">Change Password</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo site_url('admin/logout'); ?>">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				<?php } ?>
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="<?php echo site_url();?>">Visit Site</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
			</div>
	</div>