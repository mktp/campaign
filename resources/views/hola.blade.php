<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>

<!-- JQUERY. SI NO SE AGREGA ANTES DE LAS DEMAS, NO MUESTRA LOS DIALOGOS. -->
		<script src="api/jquery/jquery.min.js"></script>
		<script src="api/bootstrap/bootstrap.min.js"></script>

<!-- BOOTSTRAP -->	
		<link rel="stylesheet" href="api/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="api/bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="api/bootstrap/css/docs.css">
		<link rel="stylesheet" href="api/bootstrap/css/prettify.css">
		
<script type="text/javascript">

	function changeMy() {
	
		//alert("el check quedo en " + $('#do_sem').prop("checked"));
		if ( $('#do_sem').prop("checked") ) {
		
			$('#l_total').html( parseInt($('#domain').val()) + parseInt($('#server').val()) + parseInt($('#mail').val()) + parseInt($('#sem').val()) );
		} else {
		
			$('#l_total').html( parseInt($('#domain').val()) + parseInt($('#server').val()) + parseInt($('#mail').val()) );		
		}
	}

	function proyectar() {
	
		//alert("proyectando a " + $('#meses').val() + " meses");
		var i;
		$("#modal_entidad").empty();
		for ( i = 0; i < parseInt($('#meses').val()); i++ ) {
		
			$("#modal_entidad").append("<br/><p>Mes " + (i + 1) + ": " + parseInt($('#l_total').html()) * (i + 1) + "</p>")
		}
		
	}

</script>


		<div class="container">
			<div class="content">
				<div class="title">Laravel 5 4 William</div>
				<div class="quote">{{ Inspiring::quote() }}</div>

								<div>
									<input type="hidden" id="domain" value="64000">
									<input type="hidden" id="server" value="25000">
									<input type="hidden" id="mail" value="6000">
									<input type="hidden" id="sem" value="1000000">
									<label id="l_domain">Dominio: $64000</label><br/>
									<label id="l_server">Servidor: $25000</label><br/>
									<label id="l_mail">Correo: $6000</label><br/>
									<input type="checkbox" id="do_sem" onclick="changeMy();"/>
									SEM: $1000000<br/>
									<label id="l_total">95000</label>
						{!! Form::label('Proyectando a ') !!}
						<input type="text" id="meses" placeholder="meses">

				<br/><a class="pull-left" href="#modal_entidad" data-target="#modal_entidad" data-toggle="modal" onclick="proyectar();">
					<span>Proyectar</span>
				</a>

									<p onclick="window.location.href = 'design/' + $('#l_total').html();">Diseños</p>


								</div>

			</div>
		</div>

<!-- MODAL -->
			<div id="modal_entidad" class="modal" role="dialog" tabindex="-1" data-width="420px" aria-labelledby="myModalLabel" style="display: none; top:120px; ">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" >×</button>
				<h3 id="myModalLabel" >Proyeccion</h3>
			  </div>
			  
				<a class="pull-left" href="http://www.projectrevista.com">Bombon</a>

			</div>

	</body>
</html>