<?php
add_action( 'init', 'post_type_equipe' );
function post_type_equipe() {

  $labels = array(
      'name' => _x('Equipe', 'post type general name'),
      'singular_name' => _x('Equipe', 'post type singular name'),
      'add_new' => _x('Adicionar membro', 'equipe'),
      'add_new_item' => __('Adicionar membro'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo membro'),
      'all_items' => __('Outros membros'),
      'view_item' => __('Ver membro'),
      'search_items' => __('Buscar membro'),
      'not_found' =>  __('Nenhum membro encontrado'),
      'not_found_in_trash' => __('Nenhum membro encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Equipe'
  );
  
  register_post_type( 'equipe', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' => 'equipe',
      // 'menu_icon' => get_bloginfo('template_directory') . '/img/post-type_star.png',  // Icon Path
      'menu_icon' => 'dashicons-groups',
      'rewrite' => array(
       'slug' => 'equipe',
       'with_front' => false,
      ),
      'capability_type' => 'page',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'register_meta_box_cb' => 'equipe_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail')
      )
  );
}

?>