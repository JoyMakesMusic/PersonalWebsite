<!doctypehtml><html lang="en"><head><meta charset="utf-8"><meta content="width=device-width,initial-scale=1,shrink-to-fit=no"name="viewport"><meta content="Joy Kyser"property="og:title"><meta content="https://i.ibb.co/qxvJ1GW/Profile-Picture-BW.png"property="og:image"><meta content="Portfolio"property="og:description"><meta content="https://joykyser.com/"property="og:url"><meta content="1200"property="og:image:width"><meta content="627"property="og:image:height"><meta content="website"property="og:type"><link rel="icon"href="Icons/letter-j-icon-png-21789-Windows.ico"><title>Code - Joy Kyser</title><link rel="stylesheet"rel="nofollow"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"crossorigin="anonymous"integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"><link rel="stylesheet"href="site.css"><link rel="stylesheet"href="code.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script><script src="site.js"></script><link rel="preconnect"href="https://fonts.googleapis.com"><link rel="preconnect"href="https://fonts.gstatic.com"crossorigin><link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Lusitana&family=Roboto+Mono&display=swap"><link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"><link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Palanquin:wght@200&display=swap"></head><body><?php include('header.php'); ?><div class="container-fluid p-0"id="main-content"><div class="row no-gutters"><div class="col align-middle"id="left-side"><img alt="ComputerCodeOnAScreen"src="Images/CodingScreen.png"id="code-img"></div><div class="col container"id="right-side"><div class="row"id="project-row"><div class="col"id="slide-left"><a href="#slide1"><img alt="Slide Back Navigation Arrow"src="Icons/back-arrow.png"class="slide-nav"></a></div><div class="col"id="right-content"><h1 class="text-center"id="page-title">Coding & Development</h1><hr><div id="slider"><div class="slide"id="slide1"><div class="text-center project-img-div"><img alt="Volkswagen Bus Logo"src="Images/PassengerLogo.png"id="passenger"></div><div class="project-content-box"><a href="#"target="_blank"><div class="text-center project-title-box"><h2 class="hover-underline project-title">Passenger - Ride-Sharing App<br>(Coming Soon)</h2></div></a><p class="text-center project-text">Passenger is my capstone project. As a ride-sharing app designed for Pensacola Christian College, it allows students to find and host rides within the Pensacola area. I served as the UI/UX developer, where I designed an easy-to-use interface that was both appealing and intuitive in ASP.NET using Bootstrap and CSS.</p></div></div><div class="slide"id="slide2"><div class="text-center project-img-div"><img alt="Open Bible Baptist Church Logo"src="Images/ChurchLogo.png"id="obbc"></div><div class="project-content-box"><a href="https://openbiblebaptistva.com/"target="_blank"><div class="text-center project-title-box"><h2 class="hover-underline project-title">Open Bible Baptist Church - Website</h2></div></a><p class="text-center project-text">I worked with a website builder to design a modern, visually appealing website for my local church. Additionally, I've used my own photography to provide media content for the website.</p></div></div></div></div><div class="col"id="slide-right"><a href="#slide2"><img alt="Slide Forward Navigation Arrow"src="Icons/forward-arrow.png"class="slide-nav"></a></div></div></div></div></div><?php include('footer.php'); ?><script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"crossorigin="anonymous"integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"crossorigin="anonymous"integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"></script><script>// Show guiding arrows on mouse focus and hide on unfocus
function showArrows() { const arrows = document.querySelectorAll(".slide-nav"); arrows.forEach((arrow) => (arrow.style.opacity = ".7")); } function hideArrows() { const arrows = document.querySelectorAll(".slide-nav"); arrows.forEach((arrow) => (arrow.style.opacity = "0")); }
