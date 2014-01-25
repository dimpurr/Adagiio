</div>

<section id="footer_ctn">

<aside id="sidebar" class="blackbg">
	<?php dynamic_sidebar( 'dpt' ); ?>
</aside>

<footer id="footer" role="contentinfo">

	Theme by <a href="http://dimpurr.com" title="Dimpurr (钉子)">Dimpurr</a>'s <a href="http://blog.dimpurr.com/adagiio" title="Adagiio">Adagiio β</a> | Poundly Powered by <a href="http://wordpress.org/" title="WordPress">WordPress</a>

	<?php $dpt_tjt = get_option('dpt_tongji'); if ( !empty($dpt_tjt) ) { echo $dpt_tjt;}; ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>

	<?php wp_footer();  ?>

</footer>

</section>

</body>
</html>