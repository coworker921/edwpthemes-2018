<?php
if ( !function_exists('mawt_excerpt_more') ):
  function mawt_excerpt_more () {
    return '<a href="' . get_permalink() . '">'. __(' leer más...', 'mawt') .'</a>';
  }
endif;

add_filter( 'excerpt_more', 'mawt_excerpt_more' );

if ( !function_exists('mawt_excerpt_length') ):
  function mawt_excerpt_length () {
    return 40;
  }
endif;

add_filter( 'excerpt_length', 'mawt_excerpt_length' );
?>
