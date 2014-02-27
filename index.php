<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 

	<!-- Set the title of the page -->
	<title><?php bloginfo('name'); ?><?php wp_title("|", true, "right"); ?> </title>

	<!-- link to style.css -->
	<link rel="stylesheet" 
	href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />

	<!-- must include this for WP - This ag loads any other info WP might require into the head tag -->
	<?php wp_head(); ?>

</head>

<body>

	<!-- ****************** Header ************************* -->
	<header>
		<h1>
			<a href="<?php bloginfo('url'); ?>/">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<p><?php bloginfo('description'); ?></p>
	</header>
	<!-- ****************** Header ************************* -->
    
    
    
    
    
    <!-- ****************** Pages Nav ************************* -->
	<nav>
		<ul>
			<?php wp_list_pages(); ?>
		</ul>
	</nav>
	<!-- ****************** Pages Nav ************************* -->
	
	
    
    
    
    <!-- *********** The Loop - main content *************** -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- Everything inside of this block is repeat once for each post -->
			
			<!-- Diplay the title of a post. Use the_permalink() to get the URL to that post. Use the_title() to get the title of the post -->
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		
			<!-- Display the contents of the post -->
			<?php the_content(); ?>
			
			<!-- Display the date and category for a post. Note the parameters shown here format the date and time. -->
			<p><?php the_time('F jS Y'); ?> at <?php the_time('g:i a'); ?></p>
			<p><?php the_category(', '); ?></p>
			<p><?php comments_number('No comment', '1 comment', '% comments'); ?></p>
    
    
	<?php endwhile; else: ?>
		<!-- This block is only displayed if there are no posts to display -->
		
		<h3>Woops...</h3>
		<p>Sorry, no posts were found.</p>
		
	<?php endif; ?>    
	<!-- *********** The Loop - main content *************** -->






	<!-- ****** Display the Next and Prev posts links ****** -->
	<p><?php posts_nav_link(); ?></p>
	<!-- ****** Display the Next and Prev posts links ****** -->
	



	<!-- ***************** Sidebar ************************* -->	
	<!-- sidebar - The sidebar includes links for pages, categories etc. -->
	<ul id='nav'>
		<!-- pages -->
		<?php wp_list_pages(); ?>  
		<!-- categories -->
		<?php wp_list_categories(); ?>
		<!-- login -->
		<li>Meta
			<ul>
				<?php wp_register(); ?>
				<!-- Admin login/logout links -->
				<li><?php wp_loginout(); ?></li>
			</ul>
		</li>
	</ul>
	<!-- ***************** Sidebar ************************* -->
	
	
	
	
	
    <!-- ********************* footer ********************** -->
	<!-- Include whatever footer info you like here -->  
	<p>Template design by <a href="http://www.webdevils.com">webdevils.com</a>  
	<!-- Get the date and name of the site -->  
	&copy; <?php date('Y'); ?> <?php bloginfo('name'); ?> 
	<!-- Add alink to the RSS feed for this site -->
	<a href="<?php bloginfo('rss2_url'); ?>">RSS2</a></p>
	<!-- ********************* footer ********************** -->
	
	
	
	
	
	<!-- WP-Footer - This tag must appear last in the body, 
		it allows WP to include extra code at the bottom of the page if needed. -->
	<?php wp_footer(); ?>
</body>
</html>
