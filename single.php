<?php get_header(); ?>

<section id="content">

<?php the_post(); ?>
		
<article class="sp">

<hgroup class="p_lt p_a">

	<header class="p_t">
		<span class="p_s_c"><?php the_category(' ') ?></span>
		<h2><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a></h2>
	</header> 
	
	<div class="p_i">
		<span class="p_i_t">
			<?php the_tags('','',''); ?>
		</span>
		<span class="p_i_e">
			<span class="p_i_a"><?php the_author_link(); ?></span>
			<span class="p_i_r"><a href="<?php comments_link(); ?>" ><?php comments_number( __('无回复','dpt') , __('落单的回复','dpt') , __('% 回复','dpt') ); ?></a></span>
			<span class="p_i_d"><?php echo edit_post_link( __('编辑','dpt') ); ?></span>
		</div>
	</span>

</hgroup>

<div class="sp_c">
	<?php the_content(); ?>
</div>

</article>

<?php comments_template( '', true ); ?>

</section>

<?php get_footer(); ?>