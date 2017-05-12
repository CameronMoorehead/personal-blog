<?php

/*
Template Name: Portfolio
*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>
    <?php endwhile; ?>
    <?php else : ?>
        echo '<p>No content found</p>';
    <?php endif; ?>

<?php

query_posts(array('post_type' => 'portfolio'));
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="portfolio">

        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_post_thumbnail('small-thumbnail', array('class' => 'alignleft')); ?>

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
        echo '<p> No content found</p>';

    endif;

get_footer();

?>
