<?php include(TEMPLATEPATH."/header.php");?>

<style>
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
<br>

<!-- Contenido Fanaticadas -->
	<div class="contenedornotas">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<br><center><span class="fechaescrito"><strong>Publicado por:</strong>
            <?php the_author_posts_link(); ?>
          - El
          <?php the_time('j/F/Y'); ?>
          - <strong>En el sitio:</strong>
          <?php the_category(', ') ?></span></center>
		  <br>
          <center><h1><?php the_title(); ?></h1></center>
          <div style="border-bottom:3px dotted #AEAEAE; margin-bottom:12px; padding:10px 0px 0px 0px; clear:both;"></div>
          <center><?php the_post_thumbnail(array(640,550)); ?></center>
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
<?php include(TEMPLATEPATH."/footer.php");?>
