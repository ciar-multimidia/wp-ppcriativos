<?php $options = get_option( 'add_opcoes_layout' ); ?> 

<footer id="contato">
	<div class="container flexbox">
		<div class="logo">
			<img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="">
		</div>
		<div class="info-contatos">
			<h3>Contato</h3>
			<?php if ($options['tel_contato']) { ?>
				<p class="telefone"><?php echo $options['tel_contato'] ?></p>
			<?php } ?>

			<?php if ($options['email_contato']) { ?>
				<p class="email"><?php echo $options['email_contato'] ?></p>
			<?php } ?>
		</div>
		<div class="realizacao">
			<h3>Realização</h3>
			<div class="flexbox">
				<a href="http://fav.ufg.br/" target="blank"> <img src="<?php bloginfo('template_url'); ?>/img/logo-fav.svg" alt=""></a>
				<a href="http://www.ciar.ufg.br/" target="blank"> <img src="<?php bloginfo('template_url'); ?>/img/logo-ciar-ufg.svg" alt=""></a>
			</div>
			
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>