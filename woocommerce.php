<?php
/*
Template Name: WOOCOMERSE
*/
?>
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
			font-size: 31px;
			margin: 0;
		}
		.contenedornotas p {
			font-size: 16px;
			font-family: Arial;
			color: #333;
		}
		.contenedornotas h5 {
			font-size: 11px;
			text-transform: uppercase;
			font-family: Arial;
			color: #B2B2B2;
		}
		.contenedornotas a {
			text-decoration: none;
			color: #2C3B88;
		}
			.contenedornotas a:hover {
				color: #333;
				text-decoration: underline;
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
	.encabezadoblogs {
		background-color: #fbf9f7;
		padding-top: 10px;
		padding-bottom: 10px;
		border-bottom: solid 1px #D1D1D1;
		width: 100%;
		font-family: 'Amatic SC', cursive;
		font-size: 26px;
	}
		.contencabezad {
			width: 990px;
			margin: 0 auto;
		}

</style>

<!-- Contenedor Notas -->
<div class="contenedorblog">
	<!-- Contenido Fanaticadas -->
	<div class="contenedornotas">
<?php woocommerce_content(); ?>
<?php endif; ?>
		  <div class="comentariosblog">
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
