<div id="modais">

<div class="posrel flexbox">
	<div class="darken-overlay"></div>
	<div class="fechar-modal">
		<div class="posrel ">
			<div></div>
			<div></div>
		</div>
	</div>

	<div class="modais m-noticias">
		<?php 
		$args = array( 'post_type' => 'noticias', 'offset'=> 0, 'numberposts' => 99999, 'order' => DESC); 
		$postslist = get_posts( $args );
		foreach ( $postslist as $post ) : setup_postdata( $post ); 
		?> 
			<div id="noticia-<?php the_ID(); ?>">
				<h4><?php echo data_noticia(); ?></h4>
				<h3><?php the_title(''); ?></h3>
				<p><?php the_content();?></p>
			</div>
		<?php endforeach; wp_reset_postdata(); ?>

	</div>

	<div class="modais m-equipe">
		<?php 
			$args_equipe = array('post_type' => 'equipe', 'offset'=> 0, 'numberposts' => 99999, 'order' => DESC);
			$postslist = get_posts($args_equipe);
			foreach ($postslist as $post) : setup_postdata($post); 
		?>
			<div id="membro-<?php the_ID(); ?>">
				<div class="nome-e-lattes">
					<h3><?php the_title(); ?></h3>
					<?php if ( get_field('link_lattes') ) { ?>
					<div><a href="<?php the_field('link_lattes'); ?>" target="blank"><?php get_template_part('img/logo-lattes'); ?>Curriculum Lattes</a></div>
					<?php } ?>

				</div>

				<?php if ( get_field('video_apresentacao') ) { ?>
					<div class="video_youtube">
						<iframe src=""></iframe>
					</div>
					<span class="link_video_youtube"><?php the_field('video_apresentacao')?></span>
				<?php } ?>
				<p><?php the_content(); ?></p>
			</div>

		<?php endforeach; wp_reset_postdata(); ?>

		 
	</div>
</div>
	
</div>