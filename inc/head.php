<!-- metatags -->
<meta http-equiv="Content-Type" content="text/html; image/svg+xml; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="geo.region" content="BR" />
<meta name="robots" content="index, follow" />

<!-- metatags facebook & twitter -->
<meta property="og:locale" content="pt_BR">

<?php if(is_single() || is_page()) { ?>
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php single_post_title(''); ?>" />
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
        <meta property="og:url" content="<?php the_permalink(); ?>"/>
        <meta property="og:description" content='<?php while(have_posts()):the_post(); $out_excerpt = str_replace(array("\r\n", "\r", "\n"), "", get_the_excerpt()); echo apply_filters("the_excerpt_rss", $out_excerpt); endwhile;?>' />
        <meta name="description" content="<?php while(have_posts()):the_post(); $out_excerpt = str_replace(array("\r\n", "\r", "\n"), "", get_the_excerpt()); echo apply_filters("the_excerpt_rss", $out_excerpt); endwhile;?>" />

        <meta property="article:section" content="<?php $category = get_the_category(); if($category[0]){ echo ''.$category[0]->cat_name.''; } ?>">
        <meta property="article:tag" content="<?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) {echo $tag->name . ', ';} }?>">
        <meta property="article:published_time" content="<?php the_time('c') ?>">

        <meta itemprop="name" content="<?php single_post_title(''); ?>">
        <meta itemprop="url" content="<?php the_permalink(); ?>"/>

      <?php /* se artigo tem thumbnail */ if ( has_post_thumbnail( $post->ID ) ) { ?>
        <meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>" />
        <meta itemprop="image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>">
        <?php } else { ?>
        <meta property="og:image" content="<?php bloginfo('template_url'); ?>/screenshot.png" />
        <meta itemprop="image" content="<?php bloginfo('template_url'); ?>/screenshot.png" />
      <?php } /* FINAL - se tem thumbnail */ ?>

<?php  } else { ?>

        <meta name="description" content="<?php bloginfo('description'); ?>" />

        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php bloginfo('name'); ?>" />
        <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
        <meta property="og:description" content="<?php bloginfo('description'); ?>" />
        <meta property="og:image" content="<?php bloginfo('template_url'); ?>/screenshot.png" />
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
        <meta property="og:locale" content="pt_BR">

        <meta itemprop="url" content="<?php bloginfo('url'); ?>"/>
<?php  }  ?>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />

<!--chamadas wordpress-->
<?php wp_head(); ?>


<!-- style and feed -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!-- facebook app and comments -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<!-- analytics -->

