<?php get_header(); ?>

<section id="content">
<ul id="article_ctn">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
		
<li><article class="p_a<?php if ( !has_post_thumbnail() ) { echo ' p_lt'; };?>">

<hgroup class="p_l">
<div class="p_l_c" >

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
			<span class="p_i_a"><?php the_author_link(); ?></span>
			<span class="p_i_r"><a href="<?php comments_link(); ?>" ><?php comments_number( __('无回复','dpt') , __('落单的回复','dpt') , __('% 回复','dpt') ); ?></a></span>
			<span class="p_i_d"><?php echo edit_post_link( __('编辑','dpt') ); ?></span>
		</div>
	</div>

</div>

<div class="p_l_img">
	<?php the_post_thumbnail(); ?>
</div>

</hgroup>

<div class="p_r">
	<?php the_excerpt(); ?>
</div>

</article></li>

<?php endwhile; ?>
</ul>
	<nav id="page_nav"><?php dpt_pagenavi(); ?></nav>

<?php else : ?>

<section id="content">
<article class="sp">
<hgroup class="p_lt p_a">
	<header class="p_t">
		<span class="p_s_c">404</span>
		<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			NOT FOUND
		</a></h2>
	</header> 
</hgroup>
<div class="sp_c">
	<ul>
		<li>如果看到此页面</li>
		<li>说明服务器抽风了</li>
		<li>或者您敲链接时手抖了</li>
		<li>或者复制链接时失禁了</li>
		<li>或者度娘大姨妈了</li>
		<li>或者谷攻 Be Evil 了</li>
		<li>请回到首页</li>
		<li>然后继续</li>
	</ul>
</div>
</article>
<br />
</section>

<?php endif; ?>

</section>

<?php get_footer(); ?>