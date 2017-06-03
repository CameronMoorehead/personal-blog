<?php
  get_header();
?>
<div class="container">
<?php

// query_posts(array('category_name' => 'blog-post'));
if (have_posts()) :
    while (have_posts()) : the_post();

    // Post content box size relative to post size tag (bad hack)
    $post_size = "";
    if (has_tag("short")) {
      $post_size = "short";
    } else if (has_tag("medium")) {
      $post_size = "medium";
    } else if (has_tag("long")) {
      $post_size = "long";
    };

    ?>


    <article class="post <?php echo $post_size ?>">

        <p class="post-info"><?php the_time('F j Y'); ?></p>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_post_thumbnail('small-thumbnail'); ?>


        <?php if ($post->post_excerpt) { ?>

            <p class="post-content">
            <?php echo get_the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read more&raquo;</a>
            </p>

        <?php } else {

            the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>"><h6>Read More! &raquo;<h6></a>

        <?php } ?>

    </article>

    <?php endwhile; ?>

    <div class="prev-next-container">
      <h3>
        <span class="next"><?php next_posts_link('&laquo; Older Entries') ?></span>
        <span class="prev"><?php previous_posts_link('Newer Entries &raquo;') ?></span>
      </h3>
    </div>

    <?php else :
        echo '<p>No content found</p>';

    endif;

get_footer();

?>
