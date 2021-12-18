
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
		
		<!-- imagenes -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="caja">
	  				<div class="subcaja">
	    				<img src="http://sintomec.cl/Sitio-en-Construcci%C3%B3n.png">
	  				</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="caja">
	  				<div class="subcaja">
	    				<img src="https://img10.naventcdn.com/avisos/18/00/60/00/21/19/720x532/277965750.jpg">
	  				</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="caja">
	  				<div class="subcaja">
	    				<img src="https://img.freepik.com/vector-gratis/construccion-pagina-aterrizaje-diseno-plano_52683-16325.jpg?size=626&ext=jpg">
	  				</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="caja">
	  				<div class="subcaja">
	    				<img src="https://images.adsttc.com/media/images/5d34/e507/284d/d109/5600/0240/newsletter/_FI.jpg?1563747560">
	  				</div>
				</div>
			</div>
		</div>

		<!-- boton atras -->
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
		</button>

		<!-- boton siguiente -->
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>

	</div>
	<style>
		.caja{
		  display: flex;
		  flex-flow: column wrap;
		  justify-content: center;
		  align-items: center;
		  background: #333944;
		}
		.subcaja{
		  width: 800px;
		  height: 500px;
		  background: #CCC;
		  overflow: hidden;
		}

		.caja img{
		  width: 100%;
		  height: auto;
		}
		@supports(object-fit: cover){
		    .caja img{
		      height: 100%;
		      object-fit: cover;
		      object-position: center center;
		    }
		}
	</style>
	<!-- integramos boostrap 5.0.2 cdn-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


