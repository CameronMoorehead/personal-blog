<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post">

        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_post_thumbnail('banner-image'); ?>


        <?php the_content(); ?>

    </article>


    <?php endwhile; ?>

    <?php else :
        echo '<p>No content found</p>';

    endif;

    ?>

    <?php comments_template(); ?>

    <?php

get_footer();

?>
