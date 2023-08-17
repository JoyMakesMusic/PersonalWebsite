<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="icon" href="Icons/letter-j-icon-png-21789-Windows.ico">
        <title>Photography - Joy Kyser</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="site.css">
        <link rel="stylesheet" href="photography.css">

        <!-- JQuery and JS-->
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
        <div id="main-content" class="container-fluid">
            <div class="row">
                <div id="left-side" class="col">
                    <div id="affix">
                        <div id="affix-info">
                            <h1 id="affix-title">Photography</h1>
                            <p id="affix-text">Finding art in the moment.</p>
                        </div>
                        <hr>
                        <div id="photo-nav-box">
                            <a class="photo-nav hover-underline" href="#section1">Portrait</a>
                            <a class="photo-nav hover-underline" href="#section2">Themed</a>
                            <a class="photo-nav hover-underline" href="#section3">Atmospheric</a>
                        </div>
                    </div>
                </div>
                <div id="right-side" class="col">
                    <div class="container-fluid">
                        <span id="section1" class="anchor"></span> <!-- Invisible element that sets anchor reference point -->
                        <div id="row-1" class="row img-row">
                            <div class="col-4">
                                <img src="Images/Michael-Piano.png" id="img-1" alt="Man Leaning With Crossed Hands On A Piano">                                                        
                            </div>
                            <div class="col-4">
                                <img src="Images/Holly-Piano.png" id="img-2" alt="Woman Leaning Against A Piano">
                            </div>
                            <div class="col-4">
                                <img src="Images/Michael-Smiling.jpg" id="img-3" alt="Man At A Coffee Shop Smiling Into the Camera">
                            </div>
                        </div>
                        <div id="row-2" class="row img-row">
                            <div class="col-5">
                                <img src="Images/Holly-Wide.jpg" id="img-4" alt="Red-Headed Woman Posing Against A Wall">
                            </div>
                            <div class="col-7">
                                <img src="Images/Michael-Stage.png" id="img-5" alt="Man In A Suit On A Stage">
                            </div>
                        </div>
                        <span id="section2" class="anchor"></span> <!-- Invisible element that sets anchor reference point -->
                        <div id="row-3" class="row img-row">
                            <div class="col-7">
                                <img src="Images/EE-1.png" id="img-6" alt="Two Friends Looking Knowingly At Each Other">
                            </div>
                            <div class="col-5">
                                <img src="Images/EE-2.png" id="img-7" alt="Two Friends Standing Back-To-Back And Smiling">
                            </div>
                        </div>
                        <div id="row-4" class="row img-row">
                            <div class="col-5">
                                <img src="Images/EE-3.png" id="img-8" alt="Two Friends Smiling Into The Camera">
                            </div>
                            <div class="col-7">
                                <img src="Images/EE-4.png" id="img-9" alt="Two Friends Fist-Bumping and Smiling">
                            </div>
                        </div>
                        <span id="section3" class="anchor"></span> <!-- Invisible element that sets anchor reference point -->
                        <div id="row-5" class="row img-row">
                            <div class="col-4">
                                <img src="Images/CalebOnTheBridge.jpg" id="img-10" alt="Man Posing On A Bridge At Twilight">
                            </div>
                            <div class="col-4">
                                <img src="Images/StarBouquet.jpg" id="img-11" alt="Fireworks In The Night Sky">
                            </div>
                            <div class="col-4">
                                <img src="Images/Volvo.jpg" id="img-12" alt="Volvo Station Wagon On A Country Road">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../JoyKyser/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>