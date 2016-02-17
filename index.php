<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>James Green - P2</title>

        <!-- CSS Stylesheets -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- Bootstrap framework -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <?php require('logic.php'); ?>
    </head>

    <body>

		<div class="container">
			<div class="col-sm-12 col-md-6" id="formContainer">

	    		<form action="index.php" method="POST">
	    			<fieldset>
	    				<legend>Password Generator</legend>
	    				<p>
	    					<label for="passwordSize">Number of Words:</label>
	    					<input type="text" name="passwordSize" id="passwordSize"  class="paddedLeft">
	    				</p>

	    				<p>
	    					<label for="passwordNumber">Include a Number:</label>
	    					<input type="checkbox" name="passwordNumber" id="passwordNumber" class="paddedLeft">
	    				</p>

	    				<p>
	    					<label for="passwordSpecial">Number of Words:</label>
	    					<input type="checkbox" name="passwordSpecial" id="passwordSpecial" class="paddedLeft">
	    				</p>    				

	    				<button type="submit" class="btn btn-primary">Generate</button>
	    			</fieldset>
	    		</form>

				<p class="passwordOutput"><?php echo $generatedPassword; ?> </p>

			</div>
		</div>

    </body>
</html>