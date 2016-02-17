<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>James Green - P2</title>

        <!-- CSS Stylesheets -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- Bootstrap framework -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>

        <?php require('logic.php'); ?>
    </head>

    <body>

		<div class="container">
			<div class="col-sm-12 col-md-6" id="formContainer">

				<form action="index.php" method="POST">
	    			<fieldset>
	    				<legend>xkcd Password Generator</legend>
	    				<p class="col-sm-12">
	    					<label for="passwordSize"># of Words (2 - 9):
	    						<input type="text" name="passwordSize" id="passwordSize" class="paddedLeft" maxlength="1">
	    					</label>
	    				</p>

	    				<p class="col-sm-12">
	    					<label for="passwordNumber">Include a Number:
	    						<input type="checkbox" name="passwordNumber" id="passwordNumber" class="paddedLeft">
	    					</label>
	    				</p>

	    				<p class="col-sm-12">
	    					<label for="passwordSpecial">Include a Special Character:
	    						<input type="checkbox" name="passwordSpecial" id="passwordSpecial" class="paddedLeft">
	    					</label>
	    				</p>

						<p class="col-sm-12">
							<label><b>Word Seperator :</b><br> dash-dash
								<input type="radio" value="dash" name="passwordSeperator" id="passwordRadio1" class="paddedLeft" checked="checked">
							</label>

							<label>camelCase
								<input class="paddedLeft" id="passwordRadio2" name="passwordSeperator" value="camel" type="radio">
							</label>

							<label>Spaces Spaces
								<input type="radio" value="space" name="passwordSeperator" id="passwordRadio3" class="paddedLeft">
							</label>
						</p>

	    				<p>
  							<button type="submit" class="btn btn-primary">Generate</button>
						</p>
	    			</fieldset>
	    		</form>

				<p class="passwordOutput"><?php echo $generatedPassword; ?> </p>

				<img src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd style passwords" style="width: 100%;">
			</div>
		</div>

    </body>
</html>