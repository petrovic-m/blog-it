<?php get_header() ?>
<?php get_template_part('template-parts/header/navigation') ?>
<div class="col-xl-8 col-md-12 mx-auto">
	<?php get_template_part('template-parts/header/desc-text') ?>
	<?php get_template_part('template-parts/banner/header', 'blog') ?>
    <?php if(have_posts()):
			while (have_posts()):
				the_post(); ?>
    <?php get_template_part('template-parts/blog/blog', 'container') ?>
	<?php
		endwhile;
		endif;
	?>

<?php get_footer(); ?>
