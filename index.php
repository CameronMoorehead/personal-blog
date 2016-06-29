<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post">

        <p class="post-info"><?php the_time('F j Y'); ?></p>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_post_thumbnail('small-thumbnail'); ?> 

        
        <?php if ($post->post_excerpt) { ?>

            <p>
            <?php echo get_the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read more&raquo;</a>
            </p>

        <?php } else {

        the_content();

        } ?>

    </article>
    
    <?php endwhile; ?>

    <?php else :
        echo '<p>No content found</p>';

    endif;

get_footer();

?>
