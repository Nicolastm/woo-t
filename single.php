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

		  <?php include(TEMPLATEPATH."/post-relacionados.php");?>
		  <div style="border-bottom:3px dotted #AEAEAE; margin-bottom:12px; padding:10px 0px 0px 0px; clear:both;"></div>


			<center><div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="30" data-width="630"></center>

	</div>


		<!-- Sidebar Fanaticadas -->
	<div class="sidebarfanaticadas">
	 <script type="text/javascript">eplAD4M("300x250_1");</script>
	 <br>
	 <?php include(TEMPLATEPATH."/modulo-widget-ranking.php");?>
	 <br>
	 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3&appId=85801543373";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/fanaticadas" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/fanaticadas"><a href="https://www.facebook.com/fanaticadas">Fanaticadas.com</a></blockquote></div></div>
	<br>
	</div>
<?php include(TEMPLATEPATH."/footer.php");?>
