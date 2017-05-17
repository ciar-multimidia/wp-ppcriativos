<div id="equipe">
	<div class="container">
		<h2>Conheça a equipe</h2>
		<div class="cont-equipes">

			<?php 
			$args = array( 
				'post_type' => 'equipe', 
				'offset'=> 0, 
				'numberposts' => 100, 
				'order' => DESC
				); 
			$postslist = get_posts( $args ); 
			foreach ( $postslist as $post ) : 
			setup_postdata( $post ); ?>

		          	<div data-modal-alvo="#membro-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div>
							<h3><?php the_title(); ?></h3>
							<p><?php the_field('ultima_titulacao'); ?></p>
						</div>
					</div>
					
			<?php endforeach; wp_reset_postdata(); ?>
			
		</div>
	</div>
</div>