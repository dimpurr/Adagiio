<article class="p_a">

<aside class="p_s">
	<div class="p_s_c"><?php the_category(' ') ?></div>
	<div class="p_s_a"><a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></div>
	<div class="p_s_r"><a href="<?php comments_link(); ?>" ><?php comments_number( __('无回复','dpt') , __('落单的回复','dpt') , __('% 回复','dpt') ); ?></a></div>
	<div class="p_s_e"><?php echo edit_post_link( __('编辑','dpt') ); ?></div>
</aside>

<section class="p_c">

<hgroup class="p_h">
	<header class="p_t">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_tags('',',',''); ?>
	</header>
</hgroup>

<?php the_content('继续阅读','dpt'); ?>

</section>

</article>