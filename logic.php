<?php
/* James Green
 * Project 2 - Password Generator
 * logic.php, generates password for index.php
*/

## Load text file into array
$passwordWords = file('passwordWords.txt', FILE_IGNORE_NEW_LINES);
$totalWords = count($passwordWords);

## Symbols Array
$passwordSymbols = array(' ', '!', '#', '$', '%', '&', '?', '@');	

function generatePassword($passwordWords, $totalWords, $passwordSymbols) {
	$generatedPassword = "";

	if(!empty($_POST)) {

		/* Checks to see if number of words is numeric and greater than 2
		 * if not, then default to 2 words
		*/
		if (is_numeric($_POST['passwordSize']) && $_POST['passwordSize'] > 1) {
			$passwordSize = $_POST['passwordSize'];
		} else {
			$passwordSize = 2;
		}

		/* Appends a word to the end of the generated password variable followed by
		 * a space. Runs the amount of time the user entered for word count
		*/
		for ($x = 1; $x <= $passwordSize; $x++) {
		 	$generatedPassword .= $passwordWords[array_rand($passwordWords)]." ";
		}

		/* 
		* Determines the type of separator and processes the variable accordingly
		*/
		switch($_POST['passwordSeperator']) {
			case 'camel':
				$generatedPassword = ucwords(trim($generatedPassword));
				$generatedPassword = str_replace(' ', '', $generatedPassword);
				$generatedPassword = lcfirst($generatedPassword);
				break;
			case 'dash':
				$generatedPassword = str_replace(' ', '-', trim($generatedPassword));
				break;
			case 'space':
				break;
		}

		/* 
		* If the user requested a number, append it to the end of the password
		*/
		if (isset($_POST['passwordNumber'])) {
			$generatedPassword .= rand(1, 9);
		} else {
			$passwordNumber = 'off';
		}

		/* 
		* If the user requested a symbol, append it to the end of the password
		*/
		if (isset($_POST['passwordSpecial'])) {
			$generatedPassword .= $passwordSymbols[array_rand($passwordSymbols)];
		} else {
			$passwordSpecial = 'off';
		}		

	}

	/* 
	* Return the processed password variable
	*/
	return $generatedPassword;
}

## Returns generated password from generatePassword function
$generatedPassword = generatePassword($passwordWords, $totalWords, $passwordSymbols);

?>