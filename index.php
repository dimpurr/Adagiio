<?php get_header(); ?>

<section id="content">

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; ?>

	<?php dpt_pagenavi(); ?>

<?php else : ?>

	<h1>404</h1>
	
<?php endif; ?>

</section>

<?php get_footer(); ?>