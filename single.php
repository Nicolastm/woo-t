<?php include(TEMPLATEPATH."/header.php");?>

<style>
	.contenedorblog {
		width: 990px;
		margin: 0 auto;
		overflow: hidden;
	}
	.contenedornotas {
		width: 660px;
		float: left;
		color: black;
		border-right: 1px solid #CACACA;
		padding-right: 10px;
		padding-left: 0px;
		padding-top: 20px;
	}
		.contenedornotas h1 {
			font-family: 'lato', serif;
			font-size: 27px;
			margin: 0;
		}
		.contenedornotas p {
			font-size: 16px;
			font-family: Arial;
			color: #333;
		}

	.sidebarfanaticadas {
		width: 300px;
		float: right;
	}
	.comentariosblog {
		width: 100%;
		margin-top: 30px;
		margin-bottom: 30px;
		border-top: 2px solid #A1A1A1;
	}
		.comentariosblog p {
			font-family: lato;
			font-size: 19px;
			color: #A1A1A1;
		}
</style>

<!-- Contenedor Notas -->
<div class="contenedorblog">
	<!-- Contenido Fanaticadas -->
	<div class="contenedornotas">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <div style="border-bottom:1px solid #AEAEAE; margin-bottom:12px; padding:10px 0px 0px 0px; clear:both;"></div>
          <p>Comentarios | Publicado hace: 30 minutos | Por: Cristian Echeverri</p>
          <p><?php the_content(__('Read more', 'studiopress'));?></p>
		  <?php endwhile; else: ?>
		  <?php _e('Sorry, no posts matched your criteria.', 'studiopress'); ?>
		  <?php endif; ?>
		  <div class="comentariosblog">
		  	<p>Deje su comentario a continuación:</p>
			<br>
			<?php include(TEMPLATEPATH."/comments.php");?>
		  </div>
	</div>


		<!-- Sidebar Fanaticadas -->
	<div class="sidebarfanaticadas">
		<p>Hola Sidebar</p>
	</div>
</div>
<!-- Fin contenedornotas -->
<?php include(TEMPLATEPATH."/footer.php");?>
