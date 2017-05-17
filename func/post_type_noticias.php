<?php
add_action( 'init', 'post_type_noticias' );
function post_type_noticias() {

  $labels = array(
      'name' => _x('Noticias', 'post type general name'),
      'singular_name' => _x('Noticias', 'post type singular name'),
      'add_new' => _x('Adicionar noticia', 'noticias'),
      'add_new_item' => __('Adicionar noticia'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo noticia'),
      'all_items' => __('Todos os noticias'),
      'view_item' => __('Ver noticias'),
      'search_items' => __('Buscar noticias'),
      'not_found' =>  __('Nenhum noticia encontrado'),
      'not_found_in_trash' => __('Nenhum noticia encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Noticias'
  );
  
  register_post_type( 'noticias', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' => 'noticias',
      'menu_icon' => 'dashicons-flag',
      'rewrite' => array(
       'slug' => 'noticias',
       'with_front' => false,
      ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'register_meta_box_cb' => 'noticias_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions' )
      )
  );
}

?>