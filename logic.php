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
		if (is_numeric($_POST['passwordSize'])) {
			$passwordSize = $_POST['passwordSize'];
		} else {
			$passwordSize = 2;
		}
		
		if (isset($_POST['passwordNumber'])) {
			$passwordNumber = $_POST['passwordNumber'];
		} else {
			$passwordNumber = 'off';
		}

		if (isset($_POST['passwordSpecial'])) {
			$passwordSpecial = $_POST['passwordSpecial'];
		} else {
			$passwordSpecial = 'off';
		}

		for ($x = 1; $x <= $passwordSize; $x++) {
		 	$generatedPassword .= $passwordWords[array_rand($passwordWords)];
		}

	}

	return $generatedPassword;
}

$generatedPassword = generatePassword($passwordWords, $totalWords, $passwordSymbols);

echo $generatedPassword;

?>