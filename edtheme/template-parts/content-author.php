<aside class="AuthorInfo">
  <h3><?php _e('Información del Autor:', 'mawt'); ?></h3>
  <ul>
    <li>
      <?php _e('Usuario: ', 'mawt'); the_author(); ?>
    </li>
    <li>
      <?php _e('Nombre: ', 'mawt'); echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?>
    </li>
    <li>
      <?php _e('Correo: ', 'mawt'); echo get_the_author_meta('user_email'); ?>
    </li>
    <li>
      <?php _e('Url: ', 'mawt'); ?>
      <a href="<?php echo get_the_author_meta('user_url'); ?>" target="_blank">
        <?php echo get_the_author_meta('user_url'); ?>
      </a>
    </li>
    <li>
      <?php _e('Fecha de registro: ', 'mawt'); echo get_the_author_meta('user_registered'); ?>
    </li>
    <li>
      <?php _e('Rol del usuario: ', 'mawt'); echo get_the_author_meta('roles')[0]; ?>
    </li>
    <li>
      <?php _e('Descripción: ', 'mawt'); echo get_the_author_meta('description'); ?>
    </li>
    <li>
      <?php _e('Facebook: ', 'mawt'); echo get_the_author_meta('facebook'); ?>
    </li>
    <li>
      <?php _e('Twitter: ', 'mawt'); echo get_the_author_meta('twitter'); ?>
    </li>
    <li>
      <?php _e('Número de publicaciones: ', 'mawt'); echo get_the_author_posts(); ?>
    </li>
    <li>
      <?php _e('Avatar: ', 'mawt'); echo get_avatar( get_the_author_meta('ID'), 500 ); ?>
    </li>
  </ul>
</aside>
