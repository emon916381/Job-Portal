<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="google-site-verification" content="o_oOWB6YCdde_7CP1DB3kTrI5KpFAqZWI4gNv_2U-iY" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php
	 if (function_exists('is_tag') && is_tag()) {
			echo 'Tag Archive for &quot;'.$tag.'&quot; | '; 
	} 
	elseif (is_archive()) {
			 wp_title(''); echo ' category | '; 
	}
	 elseif (is_search()) {
		  echo 'Search for &quot;'.$_GET['s'].' &quot; - ';
	}
	 elseif (!(is_404()) && (is_single()) || (is_page())) { 
		 wp_title(''); echo ' | '; 
	}
	elseif (is_404()) { echo 'Not Found | '; }
			 
	if (is_home()) {
				  bloginfo('name'); echo ' | '; bloginfo('description'); 
	} 
	else { 
		bloginfo('name');
	 }
				  
		 ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- ==================== start site banner ================  -->
<section class = "banner_section">
	<div class="contaner ">
		<div class="row header_image_size">
		<img class="img-fluid" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">	
		</div>
	</div>
</section>
    
	<!--================ Start Header Area =================-->
	<header class="header_area ">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light ">
				<div class="container">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset float-right" id="navbarSupportedContent">
								<?php
										if(is_user_logged_in()):
											wp_nav_menu( array(
												'theme_location' => 'primary',
												'container'       => ' ',
												'menu_class'	=>	'nav navbar-nav menu_nav justify-content-end',
												'fallback_cb' => 'custom_primary_menu_fallback',
											) );
										else:
											wp_nav_menu( 
												array(
									
												'theme_location' => 'primary',
												'container'       => 'nav',
												'menu_class'	=>	'nav navbar-nav menu_nav justify-content-end',
												'fallback_cb' => 'logout_menu'
									
											) );
										endif;
										function  logout_menu(){
											return;
										};
										function custom_primary_menu_fallback(){
											//menu edite page redirecting 
										?>
											<a href= "<?php home_url() ?> wp-admin/nav-menus.php">Set primary menu</a>
									<?php } ?>

				<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="form-inline">
				<div class="form-group mx-sm-3 mb-2">
					<input type="text"  placeholder="Search..." class="form-control" name='s' id="inputPassword2" >
				</div>
				<button type="submit" name='submit' class="btn btn-primary mb-2">Search</button>
				</form>
					</div>
				</div>
			</nav>
		</div>
	</header>
<!--================ End Header & Menu  Area =================-->

<section class="fix_nav_mar latest_job_section">
	<div class="container-fluid">
		<div class="fix-nav_menus">

		</div>
	</div>
</section>