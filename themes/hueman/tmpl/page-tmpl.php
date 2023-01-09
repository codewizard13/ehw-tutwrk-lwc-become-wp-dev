<h1 style="color:brown; background: pink">ERIC!</h1>

<?php
$homepageEvents = new WP_Query(array(
  'posts_per_page' => 10,
  'post_type' => 'event'
));

while ($homepageEvents->have_posts()) {

  $homepageEvents->the_post(); ?>

  <div class="event-summary">
    <a href="#" class="event-summary__date t-center">
      <span class="event-summary__month">Mar</span>
      <span class="event-summary__day">25</span>
    </a>
    <div class="event-summary__content">
      <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
      <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
    </div>
  </div>

<?php }

?>

<div class="event-summary">
  <a href="#" class="event-summary__date t-center">
    <span class="event-summary__month">Mar</span>
    <span class="event-summary__day">25</span>
  </a>
  <div class="event-summary__content">
    <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry blah</a></h5>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, rem odio ullam omnis libero dolorum commodi in qui molestiae architecto ipsum eligendi ipsa tempora, exercitationem voluptatem doloremque vel possimus repellat. <a href="#" class="nu gray">Learn more</a></p>
  </div>
</div>


<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class('group'); ?>>

    <?php if (hu_is_checked('singular-page-featured-image')) {
      hu_get_template_part('parts/page-image');
    } ?>

    <div class="entry themeform">
      <?php the_content(); ?>
      <nav class="pagination group">
        <?php
        //Checks for and uses wp_pagenavi to display page navigation for multi-page posts.
        if (function_exists('wp_pagenavi'))
          wp_pagenavi(array('type' => 'multipart'));
        else
          wp_link_pages(array('before' => '<div class="post-pages">' . __('Pages:', 'hueman'), 'after' => '</div>'));
        ?>
      </nav>
      <!--/.pagination-->
      <div class="clear"></div>
    </div>
    <!--/.entry-->

  </article>

  <?php if (hu_is_checked('page-comments')) {
    comments_template('/comments.php', true);
  } ?>

<?php endwhile; ?>