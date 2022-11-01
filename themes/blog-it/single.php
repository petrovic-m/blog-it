<?php get_header() ?>
<?php get_template_part('template-parts/header/navigation') ?>
<div class="col-xl-8 col-md-12 mx-auto">
	<?php get_template_part('template-parts/header/desc-text') ?>
	<?php get_template_part('template-parts/banner/header', 'blog') ?>
	<div class="row">
        <?php get_template_part('template-parts/blog/single', 'blog') ?>
		<?php get_template_part('template-parts/blog/blog', 'container-left') ?>
	</div>
	<?php get_footer(); ?>
