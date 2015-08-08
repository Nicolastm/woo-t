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
	}
		.contenedornotas h1 {
			font-family: 'Arvo', serif;
			font-size: 33px;
			margin: 0;
			text-transform: uppercase;
		}

	.sidebarfanaticadas {
		width: 300px;
		float: right;
	}
</style>

<!-- Contenedor Notas -->
<div class="contenedorblog">
	<!-- Contenido Fanaticadas -->
	<div class="contenedornotas">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <center><h1><?php the_title(); ?></h1></center>
          <div style="border-bottom:3px dotted #AEAEAE; margin-bottom:12px; padding:10px 0px 0px 0px; clear:both;"></div>
          <span class="textonotas"><?php the_content(__('Read more', 'studiopress'));?></span>
		  <?php endwhile; else: ?>
		  <?php _e('Sorry, no posts matched your criteria.', 'studiopress'); ?>
		  <?php endif; ?>
	</div>


		<!-- Sidebar Fanaticadas -->
	<div class="sidebarfanaticadas">
		<p>Hola Sidebar</p>
	</div>
</div>
<!-- Fin contenedornotas -->
<?php include(TEMPLATEPATH."/footer.php");?>
