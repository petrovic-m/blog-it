<?php $image = get_field('post_image') ?>
<?php $excerpt = get_field('excerpt') ?>
<div class="col-xl-7 col-md-12">
    <div class="row p-3 bg-light my-3">
        <div class="col-xl-3 col-xs-12">
            <img style="width: 100px; height: 100px" class="img-thumbnail" src="<?php echo $image['url'];?>" alt="">
        </div>
        <div class="col-xl-8 col-xs-12">
            <h3 class="display-6"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="fs-5"><?php echo $excerpt ?></p>
        </div>
    </div>
</div>