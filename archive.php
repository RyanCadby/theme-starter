<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2><?php single_cat_title();?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <h3><?php the_title();?></h3>
                <?php the_excerpt();?>
            <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>

            <?php endwhile; endif;?>
        </div>
    </div>
</div>


<?php get_footer();?>