<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agustín Zavala </title>
    <link rel="shortcut icon" href="../resources/signature.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@700&family=Exo:wght@700&family=Hind+Madurai:wght@300&family=Kanit:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gudea&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    
</head>
<!----------------------------------This is the work page-------------------------------------->
<body>
    <header>
        <div class="banner">         
            <h1 class="common title" >Portfolio</h1> 
            <a href="index.php">
                <img id="home-autograph" src="<?php echo bloginfo('template_directory' )."/resources/signature white.png"?>" alt="autograph home icon">
            </a>         
        </div>
    </header>
    <main>
        <h2>Study projects</h2>
        <div class="cards-container">           

                <!------------------------study project 1------------>

            <div class="card">
                <h3>2Outfit</h3>
                <p>A fun and challenging project to put to use what I learned about responsiveness.
                   I enjoyed the design aspect of it: making a logo, creating the business
                   concept and making a simple yet sleek site layout.
                </p>
                <a href="https://github.com/agustinZavalaAguilar/2outfit"><p id="click-here">See code here</p></a>
                <a href="https://agustinzavalaaguilar.github.io/2outfit/">
                    <img src="../resources/projects/2outfit.png" alt="project 1 view">
                </a>
            </div>
                 <!------------------------study project 2------------>

            <div class="card">
                 <h3>Fotomatic</h3>
                 <p>This one still needs a bit of tweaking. The goal of this project
                     was to test and solidify my understanding of the display:flex property.<br>
                     It made me sweat!
                 </p>
                 <a href="https://github.com/agustinZavalaAguilar/fotomatic"><p id="click-here">See code here</p></a>
                 <a href="https://agustinzavalaaguilar.github.io/fotomatic/">
                     <img src="../resources/projects/fotomatic.png" alt="project 1 view">
                 </a>
            </div>

        </div>
    </main>

    <footer>
        <div class="footer-nav">
            <a href="./about.html">
                <img class="nav-arrow" src="../resources/backward.png" alt="backward">
            </a>
            <a href="./contact.html">
                <img class="nav-arrow" src="../resources/forward.png" alt="forward">
            </a>
        </div>
    </footer>

</body>