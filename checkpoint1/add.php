<?php


require_once 'connec.php.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $bribe = array_map('trim', $_POST);

    // Validate data
    if (empty($bribe['name'])) {
        $errors[] = 'The name is required';
    }
    if (empty($bribe['Argent du :'])) {
        $errors[] = 'The "Argent du :" is required';
    }
    // Save the recipe
    if (empty($bribe)) {
        saveRecipe($bribe);
        header('Location: /');
    }
}

// Generate the web page
require __DIR__ . '/public/book.php';