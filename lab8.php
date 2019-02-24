<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Temperature Converter</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>
<?php 
	include 'inc/functions.inc.php';
?>
<div class="container">
	<h1 class="text-center my-4">Temperature Converter</h1>

	<div class="jumbotron p-4 alert-info text-dark mb-4">
		<h1 class="display-5">Hello there!</h1>
		<p class="lead">This temperature converter can convert your chosen temperature to Celsius, Fahrenheit or Kelvin.</p>
		<hr class="my-4">
		<p>Below the convertor you can find more information about the temperature measurements used for this convertor.</p>
	</div>

	<div class="row mb-4">
		<div class="col  d-none d-md-block"></div>
		<div class="col-md-auto">
			
			<div class="card">
				<div class="card-header alert-info text-dark">
					<h4 class="m-0">Convertor</h4>	
				</div>
				
				<form class="p-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">					
					<div class="form-group m-0">
						<label class="d-block" for="temp">Temperature:</label>					
						<input class="form-control w-auto d-inline-block" type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">
						<select class="form-control w-auto d-inline-block mb-3" name="originalunit">
							<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?> hidden>--Select--</option>
							<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
							<option value="Fahrenheit"<?php if($originalUnit == "Fahrenheit") echo ' selected="selected"';?>>Fahrenheit</option>
							<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
						</select>
					</div>

					<div class="form-group m-0">
						<label class="d-block" for="convertedtemp">Converted Temperature:</label>			
						<input class="form-control w-auto d-inline-block bg-white" type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
						name="convertedtemp" size="7" maxlength="7" id="convertedtemp" readonly>
						<select class="form-control w-auto d-inline-block mb-3" name="conversionunit">
							<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?> hidden>--Select--</option>
							<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
							<option value="Fahrenheit"<?php if($conversionUnit == "Fahrenheit") echo ' selected="selected"';?>>Fahrenheit</option>
							<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
						</select>
					</div>

					<input class="btn btn-primary w-100" type="submit" value="Convert"/>   
				</form>
			</div>
		</div>
		<div class="col d-none d-md-block"></div>
	</div> <!-- end row -->

<div class="row">

	<div class="col-lg-6 mb-4">
		<div class="card">
			<div class="card-header alert-info text-dark">
			<h4 class="m-0">Formulas</h4>	
			</div>
			<div class="card-body">
				<h5 class="card-title mb-3">From Celsius to:</h5>	

				<p class="card-text my-1">Fahrenheit: </p>
				<div class="card-header highlight text-muted border mb-3">
				(C * 9/5) + 32
				</div>

				<p class="card-text my-1">Kelvin: </p>
				<div class="card-header highlight text-muted border">
				C + 273.15
				</div>
			</div><hr class="m-0">

			<div class="card-body">
				<h5 class="card-title">From Fahrenheit to:</h5>				
				
				<p class="card-text my-1">Celsius: </p>
				<div class="card-header highlight text-muted border mb-3">
				(F - 32) * 5/9
				</div>

				<p class="card-text my-1">Kelvin: </p>
				<div class="card-header highlight text-muted border">
				(F - 32) * 5/9 + 273.15
				</div>
			</div><hr class="m-0">

			<div class="card-body">
				<h5 class="card-title">From Kelvin to:</h5>
				
				<p class="card-text my-1">Fahrenheit: </p>
				<div class="card-header highlight text-muted border mb-3">
				(K - 273.15) * 9/5 + 32
				</div>

				<p class="card-text my-1">Celsius: </p>
				<div class="card-header highlight text-muted border">
				K - 273.15
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="card">
			<div class="card-header alert-info text-dark">
			<h4 class="m-0">Temperature Measurements</h4>
			</div>
			<div class="card-body">
				<h5 class="card-title">Celsius</h5>
				<p class="card-text">The Celsius scale, also known as the centigrade scale, is a temperature scale used by the International System of Units. As an SI derived unit, it is used by all countries except the United States, the Bahamas, Belize, the Cayman Islands and Liberia.</p>
			</div><hr class="m-0">
			<div class="card-body">
				<h5 class="card-title">Fahrenheit</h5>
				<p class="card-text">The Fahrenheit scale is a temperature scale based on one proposed in 1724 by Dutch–German–Polish physicist Daniel Gabriel Fahrenheit.</p>
			</div><hr class="m-0">
			<div class="card-body">
				<h5 class="card-title">Kelvin</h5>
				<p class="card-text">The Kelvin scale is an absolute thermodynamic temperature scale using as its null point absolute zero, the temperature at which all thermal motion ceases in the classical description of thermodynamics.</p>
			</div>
		</div>
	</div>

</div>

<footer class="text-center my-4 text-muted">&copy; 2019 TempConv | Iosif Livadaru </footer>
</div>
</body>
</html>

		
			
