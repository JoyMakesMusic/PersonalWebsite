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
        <link rel="stylesheet" href="site.css" />
        <link rel="stylesheet" href="about-contact.css" />

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
    <?php
    if (isset($_POST['submit'])) {

        function problem($error)
        {
            echo "<div class='contact-notice text-center'>
                    <h2>Uh-Oh!</h2>
                    <p>It looks like there's a problem with the form info.</p>
                    <h3>Details:</h3>"
                    .$error 
                    ."<hr>
                    <p id='instructions'>Please fix these errors before resubmitting.</p>
                  </div>
                  <div class='contact-back text-center'>
                    <a href='about-contact.php'><img src='Icons/back-arrow.png'/><p>Back to About-Contact</p></a>
                  </div>";
            die();
        }

        // Validate if data exists
        if (
            !isset($_POST['fullname']) ||
            !isset($_POST['email']) ||
            !isset($_POST['message']) 
        ) {
            problem("All fields must be filled out.");
        }

        $fullName = $_POST['fullname'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $errorMessage = "";
        $email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
        $name_exp = "/^[A-Za-z .'-]{2,}$/";

        // Validate standard email, name, and message patterns
        if( !preg_match($email_exp, $mailFrom)) {
            $errorMessage .= "The email address you entered does not appear to be valid.<br>";
        }

        if( !preg_match($name_exp, $fullName)) {
            $errorMessage .= "The name you entered does not appear to be valid.<br>";
        }

        if( strlen($message) < 2) {
            $errorMessage .= "The message you entered does not appear to be valid.<br>";
        }

        if (strlen($errorMessage) > 0) {
            problem($errorMessage);
        }

        function clean_string($string)
        {
            $bad = array("content-type", "bcc:", "to:", "cc:", "href");
            return str_replace($bad, "", $string);
        }

        $mailTo = "lydiajkyser@gmail.com";
        $headers = "From: ".clean_string($mailFrom);
        $txt = "You have received an e-mail from ".clean_string($fullName).".\n\n".clean_string($message);

        mail($mailTo, "Website Inquiry", $txt, $headers);
        header("Location: index.php?mailsend");
    }
?>
    <div class="contact-notice text-center">
        <h2>Thanks for reaching out!</h2>
        <p>I'll be in touch soon.</p>
        <hr>
        <div id="contact-back">
            <a href="home.php" class="hover-underline"><img src='Icons/back-arrow.png'/><p>Back to Main</p></a>
        </div>
    </div>
</body>