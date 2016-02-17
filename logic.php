<?php
## Load text file into array
$passwordWords = file('passwordWords.txt', FILE_IGNORE_NEW_LINES);
$totalWords = count($passwordWords);

## Variables
$passwordSymbols = array(' ', '!', '#', '$', '%', '&', '?', '@');	

function generatePassword($passwordWords, $totalWords, $passwordSymbols) {
	$generatedPassword = "";

	if(!empty($_POST)) {

		## Create Variables from form submittion
		if (is_numeric($_POST['passwordSize']) && $_POST['passwordSize'] > 1) {
			$passwordSize = $_POST['passwordSize'];
		} else {
			$passwordSize = 2;
		}

		for ($x = 1; $x <= $passwordSize; $x++) {
		 	$generatedPassword .= $passwordWords[array_rand($passwordWords)]." ";
		}

		$generatedPassword = str_replace(' ', '-', trim($generatedPassword));

		if (isset($_POST['passwordNumber'])) {
			$generatedPassword .= rand(1, 9);
		} else {
			$passwordNumber = 'off';
		}

		if (isset($_POST['passwordSpecial'])) {
			$generatedPassword .= $passwordSymbols[array_rand($passwordSymbols)];
		} else {
			$passwordSpecial = 'off';
		}		

	}

	return $generatedPassword;
}

$generatedPassword = generatePassword($passwordWords, $totalWords, $passwordSymbols);

?>