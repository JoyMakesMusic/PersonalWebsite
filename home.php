<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="icon" href="Icons/letter-j-icon-png-21789-Windows.ico">
        <title>Welcome! - Joy Kyser</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="site.css">
        <link rel="stylesheet" href="home.css">

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
        <!-- <div id="header" class="container-fluid">
            <div class="back-to-main">
                <a href="about-contact.php" id="ac" class="nav-link">About | Contact</a>
            </div>
        </div> -->
        <?php include('../JoyKyser/header.php'); ?>
        <div class="main-content container-fluid p-0">
            <div class="row no-gutters">
                <div id="left-side" class="col-md-7">
                    <div id="left-content">
                        <div id="greeting" class="row">
                            <div id="portrait-box">
                                <img id="portrait" src="Images/ProfilePictureBW.png" alt="Girl Posing By A River">
                            </div>
                            <div id="greeting-text">
                                <h1>Welcome!</h1>                            
                                <p>I'm <span>Joy Kyser</span>, a creator and<br>developer from <span>Southside Virginia</span>.</p>
                                <hr>                                                    
                            </div>
                        </div>
                        <div id="sitemap" class="row">
                            <div id="sitemap-col" class="col">
                                <h1>My Work</h1>
                                <div id="navbar">
                                    <a class="hover-underline" href="code.php"        onmouseover="changeImage(1)">Code</a>
                                    <a class="hover-underline" href="photography.php" onmouseover="changeImage(2)">Photography</a>
                                    <a class="hover-underline" href="music.php"       onmouseover="changeImage(3)">Music</a> 
                                </div>  
                            </div>                  
                        </div>
                    </div>
                </div>
                <div id="right-side" class="col-md-5">
                    <img class="image-preview hidden" src="Images/WomanCoding.jpg" alt="Person Coding On A Computer">
                    <img class="image-preview visible" src="Images/Holly-Wide.jpg" alt="Red-Headed Woman Posing Against A Wall">
                    <img class="image-preview hidden" src="Images/WomanInTheStudio.jpg" alt="Woman Singing In A Recording Studio">
                </div>
            </div>
        </div>
        <?php include('../JoyKyser/footer.php'); ?>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            // Changes image source (opacity handled in CSS)
            function changeImage(id) {
                // All crossfading images
                var images = document.getElementsByClassName("image-preview");
                // Image element that corresponds to the anchor tag calling the function
                var currentImage = images.item(id - 1);

                fadeOut(images);
                fadeIn(currentImage, id);
            }

            // Find and hide visible image
            function fadeOut(images) {
                for (var i = 0; i < images.length; i++) {
                    if ((images.item(i)).classList.contains("visible")) {
                        (images.item(i)).classList.remove("visible");
                        (images.item(i)).classList.add("hidden");
                        break;
                    }
                }
            }

            // Fade in the focused image
            function fadeIn(currentImage, id) {
                switch (id) {
                    case 1:
                        currentImage.src = "Images/Woman Coding.jpg";
                        break;
                    case 2:
                        currentImage.src = "Images/Holly - Wide.jpg";
                        break;
                    default:
                        currentImage.src = "Images/Woman In The Studio.jpg";
                }
                currentImage.classList.remove("hidden");
                currentImage.classList.add("visible");
            }
        </script>
    </body>
</html>