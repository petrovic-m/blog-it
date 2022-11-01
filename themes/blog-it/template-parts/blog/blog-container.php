<?php $image = get_field('post_image') ?>
<?php $excerpt = get_field('excerpt') ?>
<div class="col-xl-8 col-md-12 mx-auto">
    <div class="row p-3 my-3">
        <div class="col-xl-3 col-xs-12">
            <img style="width: 100px; height: 100px" class="img-thumbnail" src="<?php echo $image['url'];?>" alt="">
        </div>
        <div class="col-xl-8 col-xs-12">
            <h3 class="fs-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p>BY <?php echo strtoupper(get_the_author_posts_link()); ?> ON <?php the_time('j.m'); ?></p>
            <p class="fs-6"><?php if(is_single()) the_content(); else echo $excerpt;  ?></p>

        </div>
    </div>
</div>

