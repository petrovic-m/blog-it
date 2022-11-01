<?php get_header() ?>
<?php $blogPost = new WP_Query([
	'post_type' => 'post',
	'posts_per_page' => 10
]) ?>
<?php get_template_part('template-parts/header/navigation') ?>
<div class="col-xl-8 col-md-12 mx-auto">
	<?php get_template_part('template-parts/header/desc-text') ?>
	<?php get_template_part('template-parts/banner/header', 'blog') ?>
    <?php get_template_part('template-parts/blog/blog', 'mini-container') ?>
    <div class="row">
    <?php
    while ($blogPost->have_posts()): $blogPost->the_post(); ?>
	<?php get_template_part('template-parts/blog/blog', 'container') ?>
	<?php endwhile; ?>
    </div>
    <p><a href="<?php echo site_url('/blog') ?>" class="btn btn-primary btn-lg">See another posts</a></p>
    <?php get_footer(); ?>
