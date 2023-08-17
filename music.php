<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="icon" href="Icons/letter-j-icon-png-21789-Windows.ico">
        <title>Music - Joy Kyser</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="site.css">
        <link rel="stylesheet" href="music.css">

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
                    <div id="music-player">
                        <img id="music-image" src="Images/JoyOnTheDock-Cropped.jpg" alt="Woman Sitting On A Dock And Smiling">
                        <audio id="audio" src="Audio/LastDayOfSummer-Clipped.mp3" preload="none" onended="togglePlay()"></audio>
                        <div id="play-div">
                            <img id="play-button" src="Icons/play-button.png" alt="Play Button">
                        </div>
                        <img id="backward" class="skips" src="Icons/backward.png" alt="Button To Skip Backward">
                        <img id="forward" class="skips" src="Icons/fast-forward.png" alt="Button To Skip Forward">
                        <h2 id="song-title" class="text-center">Last Day of Summer</h2>
                    </div>
                </div>
                <div id="right-side" class="col">
                    <div id="music-text">
                        <h1>Music</h1> 
                        <p>I write songs that tell a story - what's yours?</p>
                        <a class="hover-underline" href="https://music.apple.com/us/artist/joy-kyser/1627574867" target="_blank">Apple Music</a><br>
                        <a class="hover-underline" href="https://open.spotify.com/artist/1JCBbgTSkzfabPeEkJJojh" target="_blank">Spotify</a><br>
                        <a class="hover-underline" href="https://music.youtube.com/channel/UCdJSv7YST2H3qkuUvhR_e6Q" target="_blank">YouTube Music</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../JoyKyser/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>

        // Event listeners for mobile and desktop interactions with audio player
        $(document).ready(
            $(function() {
                var audioControls = document.getElementsByClassName("skips");
                var playButton = document.getElementById("play-button");

                playButton.addEventListener("click", togglePlay);
                playButton.addEventListener("touchstart", togglePlay);

                for(var i = 0; i < audioControls.length; i++) {
                    (audioControls.item(i)).addEventListener("click", skipSong);
                    (audioControls.item(i)).addEventListener("touchstart", skipSong);
                }
            })
        );

        // Control audio playback, toggle between play/pause icons
        function togglePlay() {

            var icon = document.getElementById("play-button");
            const song = document.getElementById("audio");

            if ((icon.src).includes("Icons/play-button.png")) {
                icon.src = "Icons/pause.png";
                song.play();
            } 
            else {
                icon.src = "Icons/play-button.png";
                song.pause();
            }
        }
        // Skip forward/backward to next song
        function skipSong() {
            var title = document.getElementById("song-title");
            const song = document.getElementById("audio");

            if ((song.src).includes("Audio/LastDayofSummer-Clipped.mp3")) {
                song.src = "Audio/LeavingYou-Clipped.mp3";
                title.textContent = "Leaving You";
            }
            else {
                song.src = "Audio/LastDayofSummer-Clipped.mp3";
                title.textContent = "Last Day of Summer";
            }
            song.play();
            document.getElementById("play-button").src = "Icons/pause.png";
        }
    </script>
    </body>
</html>