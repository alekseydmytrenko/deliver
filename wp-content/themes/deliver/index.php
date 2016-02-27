<?php
get_header();

if(have_posts()) :
    while (have_posts()) : the_post(); ?>

        <div class="post-container">
            <article class="post">
                <?php the_post_thumbnail();?>
                <h2 class="post-header"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <?php the_content(); ?>

                <a class="continue" href="<?php the_permalink();?>">Continue Reading</a>
            </article>
        </div>

    <?php endwhile;

else:
    echo '<p>No contetnt found</p>';

endif;

get_footer();
?>