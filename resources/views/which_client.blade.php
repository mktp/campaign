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

<!-- javascript -->	
		<script type="text/javascript">

		</script>
		

		<div class="container">
			<div class="content">

				<div class="title">Cotizador interactivo</div>
				<div class="quote">{{ Inspiring::quote() }}</div>

				{!! Form::open(array('route' => 'which_client_go', 'class' => 'form')) !!}

					{!! Form::text('client', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba el nombre del cliente')) !!}
					<div class="form-group">
						{!! Form::submit('Go', 
						  array('class'=>'btn btn-primary')) !!}
					</div>
				{!! Form::close() !!}

			</div>
		</div>
	</body>
</html>
