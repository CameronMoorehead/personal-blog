<?php
get_header();
?>
<div class="single-container">
<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

        <?php if (is_page("portfolio")) { ?>
            Testing
        <?php }?>

    </article>

    <?php endwhile; ?>

    <?php else : ?>
        echo '<p>No content found</p>';

    <?php endif;

get_footer();

?>
