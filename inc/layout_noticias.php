<div id="noticias">
	<div class="container">
	<h2>Últimas notícias</h2>
		<p class="sem-noticias">Ainda não há nenhuma notícia aqui!</p>
		<div class="ultimasnoticias">
			<?php 
			$args = array( 'post_type' => 'noticias', 'offset'=> 0, 'numberposts' => 99999, 'order' => DESC); 
			$postslist = get_posts( $args );
			foreach ( $postslist as $post ) : setup_postdata( $post ); 
			?> 

			<div data-modal-alvo='#noticia-<?php the_ID(); ?>' class="noticia">
				<h4><?php echo data_noticia(); ?></h4>
				<h3><?php the_title(''); ?></h3>
				<p><?php  echo substr(get_the_excerpt(), 0,200);?>...</p>
				
				<a class="saibamais">Leia o restante</a>	
			</div>
			<?php endforeach; wp_reset_postdata(); ?>

         


			
		</div>
		<!-- Botão para ver o restante das notícias -->
		<div class="cont-maisnoticias">
			<a class="maisnoticias">Mais notícias</a> 
		</div>
		</div>
</div>