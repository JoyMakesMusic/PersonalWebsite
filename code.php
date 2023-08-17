<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="icon" href="Icons/letter-j-icon-png-21789-Windows.ico">
        <title>Code - Joy Kyser</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="site.css">
        <link rel="stylesheet" href="code.css">

        <!-- JQuery and JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="site.js"></script>

        <!-- Imported font for the site -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lusitana&family=Roboto+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Palanquin:wght@200&display=swap" rel="stylesheet">
        
    </head>
    <body>
    <?php include('../JoyKyser/header.php'); ?>
    <div id="main-content" class="container-fluid p-0">
        <div class=" row no-gutters">
            <div id="left-side" class="align-middle col">
                <img id="code-img" src="Images/CodingScreen.jpg" alt="ComputerCodeOnAScreen">           
            </div>
            <div id="right-side" class="col container">
                <div id="project-row" class="row">
                    <div id="slide-left" class="col">
                        <a href="#slide1" ><img class="slide-nav" src="Icons/back-arrow.png" alt="Slide Back Navigation Arrow"></a>
                    </div>
                    <div id="right-content" class="col">
                        <h1 id="page-title" class="text-center">Coding & Development</h1>
                        <hr>
                        <div id="slider">
                            <div class="slide" id="slide1">
                                <div class="project-img-div text-center">
                                    <img id="passenger" src="Images/PassengerLogo.png" alt="Volkswagen Bus Logo">
                                </div>    
                                <div class="project-content-box">
                                    <a href="#" target="_blank">
                                        <div class="project-title-box text-center">
                                            <h2 class="project-title hover-underline">Passenger - Ride-Sharing App<br>(Coming Soon)</h2>
                                        </div>
                                    </a>
                                    <p class="project-text text-center">
                                        Passenger is my capstone project. As a ride-sharing app designed for Pensacola Christian College, it allows 
                                        students to find and host rides within the Pensacola area. I served as the UI/UX developer, where I designed
                                        an easy-to-use interface that was both appealing and intuitive in ASP.NET using Bootstrap and CSS.
                                    </p>
                                </div>        
                            </div>
                            <div class="slide" id="slide2">
                                <div class="project-img-div text-center">
                                    <img id="obbc" src="Images/ChurchLogo.png" alt="Open Bible Baptist Church Logo">
                                </div>    
                                <div class="project-content-box">
                                    <a href="https://openbiblebaptistva.com/" target="_blank">
                                        <div class="project-title-box text-center">
                                            <h2 class="project-title hover-underline">Open Bible Baptist Church - Website</h2>
                                        </div>
                                    </a>
                                    <p class="project-text text-center">
                                        I worked with a website builder to design a modern, visually appealing website for my local church.
                                        Additionally, I've used my own photography to provide media content for the website.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slide-right" class="col">
                        <a href="#slide2"><img class="slide-nav" src="Icons/forward-arrow.png" alt="Slide Forward Navigation Arrow"></a>       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../JoyKyser/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        // Show guiding arrows on mouse focus and hide on unfocus
        function showArrows(){
            const arrows = document.querySelectorAll('.slide-nav');

            arrows.forEach(arrow => arrow.style.opacity = "70%");
        }
        function hideArrows(){
            const arrows = document.querySelectorAll('.slide-nav');

            arrows.forEach(arrow => arrow.style.opacity = "0%");
        }
    </script>
    </body>
</html>