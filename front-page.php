<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Welcome to my website</h1>
            <h2><?php the_title();?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php if (have_posts()) : while(have_posts()) : the_post();?>

                <?php the_content();?>

            <?php endwhile; endif;?>
        </div>
    </div>
</div>


<?php get_footer();?>
