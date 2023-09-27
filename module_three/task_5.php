<?php

function generatePassword($length) {
    // Define character sets for different types of characters
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine all character sets
    $allCharacters = $lowercase . $uppercase . $numbers . $specialChars;

    // Get the total number of characters available
    $totalCharacters = strlen($allCharacters);

    // Initialize the password variable
    $password = '';

    // Generate the password by randomly selecting characters
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $totalCharacters - 1);
        $password .= $allCharacters[$randomIndex];
    }

    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: $password";

?>
