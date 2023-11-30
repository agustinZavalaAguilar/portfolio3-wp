<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agustín Zavala</title>
    <link rel="shortcut icon" href="../resources/signature.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gudea&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
</head>
<!------------------------------This is the contact page----------------------------------------->
<body>
    <header>
        <div class="banner">         
            <h1 class="common title" >Let's talk</h1> 
            <a href="index.php">
                <img id="home-autograph" src="<?php echo bloginfo('template_directory' )."/resources/signature white.png"?>" alt="autograph home icon">
            </a>         
        </div>
    </header>
    <main>
        <div class="cards-container contact">   
            
            <?php if ( have_posts() ) :
             while ( have_posts() ) : the_post(); ?>
    
    
    
        <div class="maincontent">
            <?php the_content(); ?>
        </div>
        <?php wp_link_pages(); ?>

    
        <?php endwhile; ?>
    

        <?php endif; ?>
           
            <p>
               Feel free to send an email to <u>movil82@gmail.com</u> or to contact me through 
                Linkedin or Github.
            </p>

            <div class="icon-box">
                <a class="contact-icon" href="mailto:movil82@gmail.com?subject=Mail from Portfolio Site">
                    <img  src="<?php echo bloginfo('template_directory' )."/resources/mail icon.png"?>" alt="email icon">
                </a>
                <a class="contact-icon" href="https://www.linkedin.com/in/agustin-zavala-aguilar/">
                    <img  src="<?php echo bloginfo('template_directory' )."/resources/linkedin.png"?>" alt="Linkedin link">
                </a>
                <a class="contact-icon" href="https://github.com/agustinZavalaAguilar">
                    <img   src="<?php echo bloginfo('template_directory' )."/resources/github.png"?>" alt="">
                </a>
            </div>
        
    </main>

    <footer>
        <div class="footer-nav">
            <a href="./work.html">
                <img class="nav-arrow" src="<?php echo bloginfo('template_directory' )."/resources/backward.png"?>" alt="backward">
            </a>
            <a href="../index.html">
                <img class="nav-arrow" src="<?php echo bloginfo('template_directory' )."/resources/forward.png"?>" alt="forward">
            </a>           
        </div>
    </footer>
    
</body>