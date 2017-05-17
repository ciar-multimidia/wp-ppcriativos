<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('&#9666; ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<?php get_template_part('inc/head'); ?>
</head>
<body>

<?php $options = get_option( 'add_opcoes_layout' ); ?> 
<nav id="menu-site">
	<ul>
		<li><a href="#noticias">Notícias</a></li>
		<li><a href="#sobre">Sobre o curso</a></li>
		<li><a href="#equipe">Equipe</a></li>
		<li><a href="#contato">Contato</a></li>
		<?php if ($options['url_moodle']) { ?>
			<li class="especial"><div><a href="<?php echo $options['url_moodle'] ?>" target="blank">Acesse o Moodle</a></div></li>
		<?php } ?>
	</ul>
</nav>



