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

			var quotesL = <?php echo count($quotes); ?>; //tamaño set quotes
			var quotes = new Array();
			var myQuote = null;
			var i = 0;
			var total = 0;
			var model = 0;
			
			<?php
			
				$i = 0;
				do  {
			?>	
					//alert("<?php echo $quotedesigns[$i][0]->name; ?>");
					myQuote = <?php echo json_encode($quotedesigns[$i]); ?>;
					quotes[i] = myQuote;
					<?php if ($i == 0) { ?>
					
						model = <?php echo $quotes[$i]->model; ?> // modelo guia para mostrar los rubros correctos no requeridos
					<?php } ?>
					i++;
			<?php
			
					$i++;
				} while ( $i < count($quotes) );
			?>

		function changeTotal(text, product) {
	
			var selectBox = document.getElementById("quotemodel");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			alert("calculo en " + text + " " + quotes[selectedValue - 1][product].price);

			if ( $('#add_' + text).prop("checked") ) {
			
				total += quotes[selectedValue - 1][product].price;
				$('#add_' + text).prop("value", 1);
			} else {
			
				total -= quotes[selectedValue - 1][product].price;
				$('#add_' + text).prop("value", 0);
			}
			$('#l_total').html("TOTAL: $" + total);
		}
	
		function proyectar() {
		
			var i;
			$("#modal_entidad").empty();
			for ( i = 0; i < parseInt($('#meses').val()); i++ ) {
			
				$("#modal_entidad").append("<br/><p>Mes " + (i + 1) + ": " + (total * (i + 1)) + "</p>")
			}
		}

		function changeQuote() {

			var selectBox = document.getElementById("quotemodel");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;		
			$("#q_hidden").val(selectedValue);
			$("#q_model").val(selectedValue);
			var i;
			var product = "";
			var price = 0;
			total = 0;
			
			$("#product").empty();

			for ( i = 0; i < quotes[selectedValue - 1].length; i++ ) {
			
				if (quotes[selectedValue - 1][i].required == 0) {
				
					if (quotes[selectedValue - 1][i].price > 0) {
					
						product = "<input type='checkbox' id='add_" + (i + 1).toString() + "' name='add_" + (i + 1).toString() + "' value='1' onclick='changeTotal(\""  +  quotes[selectedValue - 1][i].name + "\"," + i + ");' checked />";
						total += quotes[selectedValue - 1][i].price;
						price = quotes[selectedValue - 1][i].price;
					} else {

						alert(quotes[model][i].name + ": " + quotes[model][i].price);
						product = "<input type='checkbox' id='add_" + (i + 1).toString() + "' name='add_" + (i + 1).toString() + "' value='0' onclick='changeTotal(\""  +  quotes[selectedValue - 1][i].name + "\"," + i + ");' />";
						price = quotes[model][i].price;
						quotes[selectedValue - 1][i].price = quotes[model][i].price;
					}
				} else {
				
					product = "";
					price = quotes[selectedValue - 1][i].price
					total += price;
				}
				product = product + "<input type='hidden' id='product_" + (i + 1).toString() + 
					"' name='product_" + (i + 1).toString() + "'value='" + 
					price + 
					"'><input type='hidden' id='name_" + (i + 1).toString() + 
					"' name='name_" + (i + 1).toString() + "'value='" + 
					quotes[selectedValue - 1][i].name + 
					"'><label id='l_" + quotes[selectedValue - 1][i].name + "'>" + 
					quotes[selectedValue - 1][i].name + ": $" + price + "</label><br/>";			
				$("#product").append(product);
			}
			$("#product").append("<label id='l_total'>TOTAL: $" + total + "</label>");
		}

			$( document ).ready(function() { changeQuote(1); });
		
		</script>		

		<div class="container">
			<div class="content">

				<div class="title">Cotizador interactivo</div>
				<div class="quote">{{ Inspiring::quote() }}</div>

				{!! Form::open(array('route' => 'save_quote_design', 'class' => 'form')) !!}

					<input type='hidden' id='quote' name='quote' value="<?php echo $quotemodel->id; ?>"/>
					<input type='hidden' id='client' name='client' value="<?php echo $client->id; ?>"/>
					<input type='hidden' id='many' name='many' value="<?php echo $many; ?>"/>
					<input type='hidden' id='total' name='total' value="<?php echo $total->id; ?>"/>

					{!! Form::label('Cotizacion para ' . $client->name) !!}
					{!! Form::label('el total va en $' . $total->total) !!}

					<select id='quotemodel' onchange="changeQuote();">
						<option value=1>Pymes</option>
						<option value=2>Grandes</option>
					</select>

					<div id="product">
					</div>

					<div id="more">

						{!! Form::label('Proyectando a ') !!}
						<input type="text" id="meses" placeholder="meses">	
						
							<br/><a class="pull-left" href="#modal_entidad" data-target="#modal_entidad" data-toggle="modal" onclick="proyectar();">
							<span>Proyectar</span>
						</a>
						<p onclick="window.location.href = 'design/' + $('#l_total').html();">Diseños</p>
					
					
					</div>

					<div class="form-group">

						<select id='quotecategory' name='quotecategory'>
							<option value=1>Total</option>
							<option value=2>BTL</option>
						</select>

						{!! Form::submit('Guardar', 
						  array('class'=>'btn btn-primary')) !!}
					</div>

				{!! Form::close() !!}

			</div>
		</div>
	</body>
</html>
