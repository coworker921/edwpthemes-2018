<section class="WP-Query">
  <?php
    $wp_query = new WP_Query( array(
      'posts_per_page' => 5,
      'orderby' => 'rand'
    ) );

    if ( $wp_query->have_posts() ):
      while ( $wp_query->have_posts() ):
        $wp_query->the_post();
  ?>
        <figure>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            <?php the_title('<figcaption>', '</figcaption>'); ?>
          </a>
        </figure>
  <?php
      endwhile;
    else:
      get_template_part( 'template-parts/content-none' );
    endif;
    wp_reset_postdata();
    wp_reset_query();
  ?>
</section>
