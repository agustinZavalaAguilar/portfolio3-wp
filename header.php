<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agustín Zavala</title>
    <link rel="shortcut icon" href="./resources/signature.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gudea&display=swap" rel="stylesheet">
    <?php 
    wp_enqueue_script(
        'monjs',
        get_template_directory_uri().'/script.js'
    )
    ?>
    <?php wp_head()?>
</head>
<body class="index">
    <header>
        <div class="intro">
            <h1 id="greeting">Hello,</h1>
            <h1 id="highlight">I am Agustín.</h1>
        </div>
    </header>