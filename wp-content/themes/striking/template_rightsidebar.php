<?php
/*
Template Name: Right Sidebar
*/ 
if(is_blog()){
	return require(THEME_DIR . "/template_blog.php");
}elseif(is_front_page()){
	return require(THEME_DIR . "/front-page.php");
}
?>
<?php get_header(); ?>
<?php theme_generator('introduce',$post->ID);?>
<div id="page">
	<div class="inner right_sidebar">
		<div id="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'striking_front' ), 'after' => '</div>' ) ); ?>
				<?php edit_post_link(__('Edit', 'striking_front'),'<footer><p class="entry_edit">','</p></footer>'); ?>
				<div class="clearboth"></div>
			</div>
<?php endwhile; ?>
			<div class="clearboth"></div>
		</div>
		<?php get_sidebar(); ?>
		<div class="clearboth"></div>
	</div>
	<div id="page_bottom"></div>
</div>
<?php get_footer(); ?>