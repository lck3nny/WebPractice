<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liam Kenny Portfolio Website</title>
        
        <!-- Normalize will work with all browsers -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        
        <!-- FontAwesome will be used for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" 
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
        <link rel="stylesheet" href="css/style.css">

        <!-- Import Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Header Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "header.html";?>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Introduction -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="intro" id="home">
            <h1 class="section_title section_title-intro">
                Hi, I am <strong>Liam Kenny</strong>
            </h1>
            <p class="section_subtitle section_subtitle-intro">
                Developer
            </p>
            <img img src="src/snowy_liam_square.png" class="intro_img" alt="picture of Liam smiling">
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- My Services -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="my-services" id="services">
            <h2 class="section_title section_title-services">What I Do</h2>
            <div class="services">

                <div class="service">
                    <h3>Web / App Development</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.</p>
                </div> <!-- / service -->

                <div class="service">
                    <h3>Data and Analytics</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.</p>
                </div> <!-- / service -->

                <div class="service">
                    <h3>Machine Learning</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.</p>
                </div> <!-- / service -->

            </div> <!-- / services -->
            <a href="#work" class="btn">My Work</a>

        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- About Me -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="about-me" id="about">
            <h2 class="section_title section_title-about">Who I am</h2>
            <p class="section_subtitle section_subtitle-about">I am a Developer based out of Whistler, BC</p>

            <div class="about-me_body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <img src="src/snowy_liam.png" alt="picture of Liam smiling" class="about-me_img">


        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- My Work -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="my-work" id="work">
            <h2 class="section_title section_title-work">My Work</h2>
            <p class="section_subtitle section_subtitle-work">jafasfsdfsdafasf</p>

            <div class="portfolio">
                <!-- portfolio item 1 -->
                <a href="#" class="portfolio_item">
                    <img src="src/snowy_liam_square.png" alt="" class="portfolio_img">
                </a>

                <!-- portfolio item 2 -->
                <a href="#" class="portfolio_item">
                    <img src="src/snowy_liam_square.png" alt="" class="portfolio_img">
                </a>

                <!-- portfolio item 3 -->
                <a href="#" class="portfolio_item">
                    <img src="src/snowy_liam_square.png" alt="" class="portfolio_img">
                </a>

                <!-- portfolio item 4 -->
                <a href="#" class="portfolio_item">
                    <img src="src/snowy_liam_square.png" alt="" class="portfolio_img">
                </a>

                <!-- portfolio item 5 -->
                <a href="#" class="portfolio_item">
                    <img src="src/snowy_liam_square.png" alt="" class="portfolio_img">
                </a>

                <!-- portfolio item 6 -->
                <a href="#" class="portfolio_item">
                    <img src="src/snowy_liam_square.png" alt="" class="portfolio_img">
                </a>
                
            </div>    
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>

        <script src="js/index.js"></script>
    </body>
</html>