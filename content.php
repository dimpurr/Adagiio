<article class="p_a">

<hgroup class="p_l">

<div class="p_l_c">

<a class="p_l_c_a" href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"></a>

<header class="p_t">
	<span class="p_s_c"><?php the_category(' ') ?></span>
	<h2><a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
	</a></h2>
</header> 

<div class="p_i">
	<div class="p_i_t">
		<?php the_tags('','',''); ?>
	</div>
	<div class="p_i_e">
		<span class="p_i_a"><a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></span>
		<span class="p_i_r"><a href="<?php comments_link(); ?>" ><?php comments_number( __('无回复','dpt') , __('落单的回复','dpt') , __('% 回复','dpt') ); ?></a></span>
		<span class="p_i_e"><?php echo edit_post_link( __('编辑','dpt') ); ?></span>
	</div>
</div>

</div>

<div class="p_l_img">
	<img src="http://192.168.1.200/wp/wp-content/themes/sankarea/img/banner.jpg" />
</div>

</hgroup>

<div class="p_r">
	<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 540," ... "); ?>
	<?php // the_content("继续阅读","dpt"); ?>
</div>

</article>