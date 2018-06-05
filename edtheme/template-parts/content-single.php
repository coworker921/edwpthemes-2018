<header class="PostInfo">
  <h3><?php _e('Información de la Pubicación', 'mawt'); ?></h3>
  <nav class="PostInfo-categories">
    <?php _e('Categorías:', 'mawt'); ?>
    <?php the_category(', '); ?>
  </nav>
  <nav class="PostInfo-tags">
    <?php the_tags(); ?>
  </nav>
  <small>
    <?php the_time( get_option( 'date_format' ) ); ?>
    &bull;
    <?php the_author_posts_link(); ?>
  </small>
</header>
