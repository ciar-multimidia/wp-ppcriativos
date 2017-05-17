<?php 

// ========================================//
// POST TYPES
// ========================================// 

require_once(get_template_directory().'/func/post_type_noticias.php' );
require_once(get_template_directory().'/func/post_type_equipe.php' );



// ========================================//
// OUTRAS FUNCOES
// ========================================// 
require_once(get_template_directory().'/func/scripts.php' );
require_once(get_template_directory().'/func/paginacao.php' );
require_once(get_template_directory().'/func/opcoes_layout.php' );


// ========================================//
// FUNCAO DATA
// ========================================// 
function data_noticia() {
  return ('Há').' '.human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) );
}

// ========================================//
// REMOVER E ADICIONAR ITENS MENU LATERAL
// ========================================// 
function remove_menus(){
  // remove_menu_page( 'index.php' );                  //Dashboard
  // remove_menu_page( 'jetpack' );                    //Jetpack* 
  // remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  // remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
  // remove_menu_page( 'edit.php?post_type=acf' );  // Advance custom fields 
  // remove_menu_page( 'wpcf7' );   // Contact Form 7 


  // add_submenu_page( 'edit.php?post_type=oferecemos', 'Produções', 'Produções',
  //   'manage_options', 'edit.php?post_type=producoes');
  // add_submenu_page( 'edit.php?post_type=oferecemos', 'Pesquisas', 'Pesquisas',
  //   'manage_options', 'edit.php?post_type=pesquisas');
  // add_submenu_page( 'edit.php?post_type=oferecemos', 'Publicações', 'Publicações',
  //   'manage_options', 'edit.php?post_type=publicacoes');
  // add_submenu_page( 'edit.php?post_type=oferecemos', 'Informativos', 'Informativos',
  //   'manage_options', 'edit.php?post_type=informativos');
  // add_submenu_page( 'edit.php?post_type=oferecemos', 'Filmes', 'Filmes',
  //   'manage_options', 'edit.php?post_type=filmes');
}
add_action( 'admin_menu', 'remove_menus', 999 );



// ========================================//
// EDITAR NOMES MENU LATERAL
// ========================================//
// function edit_admin_menus() {
//     global $menu;
//     global $submenu;
    
//     // Posts para Notícias
//     // $menu[5][0] = 'Notícias'; 
//     // $submenu['edit.php'][5][0] = 'Todas as notícias';
//     // $submenu['edit.php'][10][0] = 'Adicionar notícia';
//     // remove_submenu_page('edit.php','edit-tags.php?taxonomy=category'); 
//     remove_submenu_page('edit.php?post_type=oferecemos','post-new.php?post_type=oferecemos'); 

//     // Páginas para Páginas layout
//     // $menu[20][0] = 'Páginas do layout'; 
// }
// add_action( 'admin_menu', 'edit_admin_menus', 999 );



// ========================================//
// REMOVER ICONES DE BARRA ADMIN
// ========================================//
function my_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');       
    $wp_admin_bar->remove_menu('about');         
    $wp_admin_bar->remove_menu('wporg');         
    $wp_admin_bar->remove_menu('documentation'); 
    $wp_admin_bar->remove_menu('support-forums');
    $wp_admin_bar->remove_menu('feedback');      
    // $wp_admin_bar->remove_menu('site-name');  
    $wp_admin_bar->remove_menu('view-site');     
    // $wp_admin_bar->remove_menu('updates');       
    $wp_admin_bar->remove_menu('comments');   
    $wp_admin_bar->remove_menu('new-content');   
    $wp_admin_bar->remove_menu('w3tc');          
    $wp_admin_bar->remove_menu('jetpack');       
    // $wp_admin_bar->remove_menu('my-account'); 
}
add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render', 999 );


// ========================================//
// MUDAR ICONE DE MENU 
// ========================================//
function replace_admin_menu_icons_css() {
    ?>
    <style>
       #adminmenu .dashicons-admin-comments:before {content: "\f125";}
       #adminmenu .dashicons-admin-post:before {content: "\f227";}
       #adminmenu #toplevel_page_jetpack {display: none !important;}


       #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {width: 190px;}
       #wpcontent, #wpfooter {margin-left: 190px;}
       #adminmenu .wp-not-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu {min-width: 190px;}
       #adminmenu .wp-submenu {left: 190px;}
    </style>
    <?php
}

add_action( 'admin_head', 'replace_admin_menu_icons_css' );



// ========================================//
// THUMB
// ========================================//
add_theme_support( 'post-thumbnails' ); 


// ========================================//
// MENU DINAMICO
// ========================================//
// register_nav_menus( array(
//   'menu-topo' => __( 'Menu no topo', '' ),
// ));


// ========================================//
// DESABILITAR BARRA ADMIN
// ========================================//
show_admin_bar(false);


// ========================================//
// SEGURANCA
// ========================================//
function remove_wp_versao () {
    return '';
}
add_filter ( 'the_generator', 'remove_wp_versao' );


function scripts_remove_versao( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'scripts_remove_versao', 9999 );
add_filter( 'script_loader_src', 'scripts_remove_versao', 9999 );


// ========================================//
// LARGURA COLUNA PRINCIPAL
// ========================================//
if ( ! isset( $content_width ) ) {
    $content_width = 940;
}

?>