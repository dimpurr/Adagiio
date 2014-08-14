<?php get_header(); ?>

<section id="content">

<?php the_post(); ?>
		
<article class="sp">

<hgroup class="p_lt p_a">

	<header class="p_t">
		<h2><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a></h2>
	</header> 

</hgroup>

<div class="sp_c">
	<?php the_content(); ?>
</div>

</article>

<?php comments_template( '', true ); ?>

</section>

<?php get_footer(); ?>