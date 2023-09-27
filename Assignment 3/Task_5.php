<?php

$password = generatePassword(12);
function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $special_chars = '!@#$%^&*()_+';

    $all_characters = $lowercase . $uppercase . $numbers . $special_chars;

    
    $total_characters = strlen($all_characters);

    $password = '';


    for ($i = 0; $i < $length; $i++) {
        $random_index = mt_rand(0, $total_characters - 1);
        $password .= $all_characters[$random_index];
    }

    return $password;
}

echo "Generated Password: $password\n";
?>
