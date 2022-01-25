<?php /*Template Name:Dashboard */
	
	get_header();?>

		     <link href="<?php bloginfo('template_url');?>/stylec.css" rel="stylesheet" />
		 <?php $current_user = wp_get_current_user();?>
			<!-- Navigation-->
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
				<a class="navbar-brand js-scroll-trigger" href="#page-top">
				       
      					<span class="d-block d-lg-none"><?php echo $current_user->user_nicename; ?></span>
					<span class="d-none d-lg-block"><img class="img-fluid img-profile1 rounded-circle mx-auto mb-2" src="https://dogevolution.tv/wp-content/uploads/2021/10/icon-5359553_1280.webp" alt="..." /></span>
				</a><a href="<?php echo esc_url( wp_logout_url() ); ?>" class="d-block d-lg-none">Logout</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav">
						<li class="nav-item users">Hi, <?php echo $current_user->user_nicename; ?></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Profile</a></li>
						<!--li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li-->
						<li class="nav-item"><a href="<?php echo esc_url( wp_logout_url() ); ?>" class="logut">Logout</a></li>
					</ul>
				</div>
			</nav>
			<!-- Page Content-->
			<div class="container-fluid p-0">
			
				<!-- About-->
				<?php 
			  $categories = get_categories();
	
		



	$user = wp_get_current_user();

	// Get user levels from WishlistMembers
	$levels = WLMAPI::GetUserLevels($user->ID);
//	print_r($levels);


		?>
	   

			   
				<section class="resume-section" id="about">
					<div class="resume-section-content">
					   <div class="row">
						   
						   <?php $categories = get_categories( );
			 
			  
			  foreach($categories as $category)
	 { 
	 
	 //echo $category->name;
	 
		$image = get_field('category_image', $category->taxonomy . '_' . $category->term_id );
		?>
		<?php
		if(in_array('Membership Level 1 - $14 / mo.', $levels)){
				$category_link = get_category_link( $category->term_id );
			?>
			
	<div class="col-md-4">
					   <div class="lvle">
					   <a href="https://dogevolution.tv/membership/">	<img src="<?php echo $image;?>" class="img-responsive">
					   </a>
					   </div>
					   
					   </div>
	<?php
	}
		}?>
		<?php 
			if(in_array("Membership Level 1 - $14 / mo.", $levels)){?>
		 <div class="col-md-4">
					   <div class="lvle">
					   <a href=""><img src="https://members.thelifelinecenter.com/wp-content/uploads/2020/05/LIFELINE-EXPERIENCE-UNLOCKED-350x263.jpg" class="img-responsive">
					   </a>
					   <div class="iconlc"><i class="fa fa-lock" aria-hidden="true"></i></div>

					   </div>
					   
					   </div>
					   <div class="col-md-4">
					   <div class="lvle">
					   <a href=""><img src="https://dogevolution.tv/wp-content/uploads/2021/10/66987080.jpg" class="img-responsive">
					   </a>
					   <div class="iconlc"><i class="fa fa-lock" aria-hidden="true"></i></div>

					   </div>
					   
					   </div>
		
			<?php }?>
					    <?php $categories = get_categories();
			 
			  
			  foreach($categories as $category)
	 { 
	 $image = get_field('category_image', $category->taxonomy . '_' . $category->term_id );
			if(in_array('Membership Level 2 - $297 One Time Payment', $levels)){
			   $category_link = get_category_link( $category->term_id );

				?>
				<div class="col-md-4">
					   <div class="lvle">
					   <a href="https://dogevolution.tv/membership">	<img src="<?php echo $image;?>" class="img-responsive">
					   </a>
					   </div>
					   
					   </div>
			
		  <?php
	}
	 }
?>
<?php 
			if(in_array("Membership Level 2 - $297 One Time Payment", $levels)){?>
		 
					   <div class="col-md-4">
					   <div class="lvle">
					   <a href=""><img src="https://dogevolution.tv/wp-content/uploads/2021/10/66987080.jpg" class="img-responsive">
					   </a>
					   <div class="iconlc"><i class="fa fa-lock" aria-hidden="true"></i></div>

					   </div>
					   
					   </div>
		
			<?php }?>
					    <?php
			 
			  
			  foreach($categories as $category)
	 { 
	 $image = get_field('category_image', $category->taxonomy . '_' . $category->term_id );
			if(in_array('Membership Level 3 - Custom Packages Starting at $997', $levels)){
			   $category_link = get_category_link( $category->term_id );

				?>
				<div class="col-md-4">
					   <div class="lvle">
					   <a href="https://dogevolution.tv/membership/">	<img src="<?php echo $image;?>" class="img-responsive">
					   </a>
					   </div>
					   
					   </div>
			
		  <?php
	}
	 }
?>


					   <!--div class="col-md-4">
					   <div class="lvle">
					   <a href=""><img src="https://members.thelifelinecenter.com/wp-content/uploads/2020/05/LIFELINE-EXPERIENCE-UNLOCKED-350x263.jpg" class="img-responsive">
					   </a>
					   </div>
					   
					   </div>
					   <div class="col-md-4">
					   <div class="lvle">
					   <a href=""><img src="https://members.thelifelinecenter.com/wp-content/uploads/2020/05/LIFELINE-EXPERIENCE-UNLOCKED-350x263.jpg" class="img-responsive">
					   </a>
					   </div>
					   
					   </div>
					   
					   <div class="col-md-4">
					   <div class="lvle">
					   <a href=""><img src="https://members.thelifelinecenter.com/wp-content/uploads/2020/05/LIFELINE-EXPERIENCE-UNLOCKED-350x263.jpg" class="img-responsive">
					   </a>
					   </div>
					   
					   </div-->
					   
					   </div>
					</div>
				</section>
				<hr class="m-0" />
				<!-- Experience-->
				
				<!-- Awards-->
			  
			</div>
			<!-- Bootstrap core JS-->
		   