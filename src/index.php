<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="My name is Ian Cross, I am a young driven computer sciecne developer. Let me show you what I can do.">
        <meta name="title" content="Home | Ian Cross">

        <link rel="stylesheet" href="/iancross.ca/src/css/main.css">
        <link rel="stylesheet" href="/iancross.ca/src/css/universal.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <title>Home | Ian Cross</title>
    </head>

    <body>
        <div class="header-img"><div class="header-img-cover"></div></div>
        <div class="header-text">
            <div class="container-fluid">
                <h1>Ian Cross</h1>
                <h3 class="mg-bt-0">Junior Web Developer & Computer Scientist</h3>
            </div>
        </div>
        <div class="clear-space"></div>
        <nav id="nav" class="header">
            <div class="container">
                <div class="container-fluid nav-container">
                    <div class="nav-link">
                        <a href="#nav">About</a>
                    </div>
                    <div class="nav-link">
                        Experience
                    </div>
                    <div class="nav-link">
                        Projects
                    </div>
                    <div class="nav-link">
                        <a href="#contact">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="welcome-content">
            <div class="container">
                <div class="container-fluid">
                    <div id="welcome" class="text-container">
                        <h1 class="mg-top-0">About Me</h1>
                        <p>Allow me to introduce myself, my name is Ian Cross. I am currently enrolled in the Univeristy of Guelph Honors Computer Science program. I also am completing my minor in Statistis</p>
                        <p>As an aspiring student, computer science is such a </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" class="contact-container">
            <div class="contact">
                <h2 class="mg-tp-0">Contact</h2>
                <form action="mailto:iancrossjc@gmail.com" method="post" enctype="text/plain">
                    <label>
                        Name<br>
                        <input type="text" name="name"><br>
                    </label>
                    <label>
                        E-mail<br>
                        <input type="text" name="mail"><br>
                    </label>
                    <label>
                        Message<br>
                        <textarea name="message" rows="8" cols="80"></textarea>
                    </label>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
        <nav class="footer">
            <div class="container-one-third text-center">
                <div class="container-fluid footer-link">
                    <img src="/iancross.ca/src/images/GitHub-logo.png" alt="GitHub Ian Cross"/>
                    <a href="" taget="_blank"><p>GitHub/Ian-Cross</p></a>
                </div>
            </div>
            <div class="container-one-third text-center">
                <div class="container-fluid footer-link">
                    <img src="/iancross.ca/src/images/Gmail-logo.png" alt="Email Ian Cross"/>
                    <a href="mailto:contact@iancross.ca" taget="_blank"><p>contact@iancross.ca</p></a>
                </div>
            </div>
            <div class="container-one-third text-center">
                <div class="container-fluid footer-link">
                    <img src="/iancross.ca/src/images/LinkedIn-logo.png" alt="LinkedIn Ian Cross"/>
                    <a href="" taget="_blank"><p>LinkedIn/Ian-Cross</p></a>
                </div>
            </div>
            <div class="clear-space"></div>
        </nav>

        <script type="text/javascript">
            $(window).scroll(function() {
                if($(window).scrollTop() >= $(".header").offset().top) {
                    $(".header").addClass("sticky");
                }
                if ($(window).scrollTop() < $(".welcome-content").offset().top - $(".header").height()){
                    $(".header").removeClass("sticky");
                }
            });
        </script>
    </body>
</html>