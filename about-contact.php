<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="icon" href="Icons/letter-j-icon-png-21789-Windows.ico">
        <title>About | Contact - Joy Kyser</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="site.css">
        <link rel="stylesheet" href="about-contact.css">

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
        <div id="main-content" class="container-fluid">
            <div class="row">
                <div id="left-side" class="col">
                    <div id="all-content">
                        <div id="left-content">
                            <h1>About Me</h1>
                            <p>
                                I'm a software developer/content creator doing a little bit of everything. I draw inspiration from many sources,
                                then turn those inspirations into tailor-made websites and media content for my clients. My specialties include Songwriting, CSS 
                                and Bootstrap-based Web Design, and Portrait photography.
                            </p>
                        </div>
                        <div id="contact-div">
                            <h1 id="contact-header">Contact</h1>
                            <form id="contact-form" method="post" action="contact-form.php" onsubmit="return validateForm()">
                                <div class="row">
                                    <div class="col">
                                        <input id="fname" name="fullname" type="text" class="form-control" placeholder="First name" aria-label="First name" maxlength="50">
                                        <input id="email" name="email" type="text" class="form-control" placeholder="Email" aria-label="Email address" maxlength="50">
                                    </div>
                                    <div class="col">
                                    <textarea class="form-control" id="message" name="message" placeholder="Your message..." maxlength="500"></textarea>
                                    <input id="inquiry-type" name="inquiry-type" class="visually-hidden" aria-hidden="true" tabindex="-1" autocomplete="off" value="">
                                    </div>
                                </div>
                                <button id="submit-button" name="submit" type="submit" formmethod="post" disabled>Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="right-side" class="col">
                    <img id="about-img" src="Images/ProfilePictureBW.png" alt="Girl Posing By A River">
                </div>
            </div>
        </div>
        <?php include('../JoyKyser/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
        // Toggle submit button depending on whether all forms are filled out
        function toggleSubmit() {

            var empty = false;
            $('form input').each(function() {
                if ($(this).val() == '' && $(this).attr("name") !== "inquiry-type") {
                    empty = true;
                }
            });

            if ((document.getElementById("message").value).trim() === "") {
                empty = true;
            }

            if (empty) {
                $('#submit-button').attr('disabled', true); 
            } else {
                $('#submit-button').removeAttr('disabled');
            }
        }
    </script>
    </body>
</html>