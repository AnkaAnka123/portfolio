<!DOCTYPE html>




<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Portflio Anna Folwarska</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/main.js">
</head>

<body>
    <!--nazwa, animacja-->
    <header class="header">
        <center>

            <?php

$encoding = "utf-8";
$to      = 'programanka@gmail.com';
$name    = $_POST['name']; //wpisujemy wartość atrybutu name
$email   = $_POST['email'];
$subject = 'Nowy email od ' .$name. '(' .$email. ')';
$message = $_POST['message'];
$headers = 'From:  ' .$name. '(' .$email. ')';
$headers = "Content-type: text/html; charset=".$encoding." \r\n";

mail($to, $subject, $message, $headers);
echo '<h1 class="name ">Wiadomość została wysłana</h1>'          
            
?>








        </center>
    </header>
    <!--    menu -->
    <nav class="nav">
        <ul>
            <li><a href="#omnie">o mnie</a></li>
            <li><a href="#prace">prace</a></li>
            <li><a href="#kontakt">kontakt</a></li>
        </ul>
    </nav>
    <!--sekcja z 6 kwadratami -->
    <section class="container">
        <!--       sekcja 1 zdjęcie + informacje o mnie -->
        <div class="section1">
            <hgroup>
                <h1>Cześć !! Jestem Ania!!</h1>
                <h3>Lubię tworzyć strony. </h3>
                <p>Z chęcią podejmę pracę lub współpracę jako junior front end developer. <br/> Obecnie najbardziej interesuje mnie nauka i rozwój umiejętności w JavaScript. Planuję także naukę React.</p>
            </hgroup>
            <img src="img/2017-11-26-02-00-45-234.jpg" alt="ja" width="180" height="251">
            <!--
            <article class="description">
                <h4>Cześć !! Jestem Ania!!</h4>
                
                <h4>dlaczego front end?</h4>
                <p>Kiedy wciąż nie mogłam się zmobilizować do nauki do egazminu na doradcę podatkowego, przyszła mi do głowy myśl, że to nie to!<br>Dopiero ostatniego lata wpadłam na pomysł żeby zająć się front end'em.</p>
                
                <h4>praca !</h4>
                <p>Najważniejsze w pracy jest doświadczenie. Z którego można czerpać. <br/>Z wielką chęcią podejmę pracę lub współpracę jako junior front end developer. <br/> Obecnie najbardziej interesuje mnie nauka i rozwój umiejętności w JavaScript. Planuję także naukę React.</p>

            </article>
-->

        </div>
        <!--  sekcja 2   -   fioletowe tło i wyśrodkowany napis "o mnie"-->
        <div class="section2">
            <article class="color">
                <a name="omnie"> </a>
                <h1>o mnie</h1>

            </article>
        </div>
        <!--        sekcja 3 - zielone tło z wyśrodkowanym napisem "prace "  -->
        <div class="section3">
            <article class="color">
                <a name="prace"> </a>
                <h1>prace</h1>

            </article>
        </div>
        <!--        sekcja 4 - galeria screenów wykoananych stron i używane technologie -->
        <div class="section4">


            <div class="slideshow-container">
                <div class="mySlides fade">
                    <a href="http://sznurkove.pl/" target="_blank"><img src="img/sznurkove.jpg" alt="screen sznurkove" width="100%"></a>
                </div>
                <div class="mySlides fade">
                    <a href="http://sznurkove.pl/new/s%C5%82odkabasia.pl/nowa/" target="_blank"><img src="img/slodkabasiajpg.jpg" alt="screen slodka basia" width="100%"></a>
                </div>
                <div class="mySlides fade">
                    <a href="http://sznurkove.pl/" target="_blank"><img src="img/sznurkove.jpg" alt="screen sznurkove" width="100%"></a>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <div class="icons">
                <img src="img/html.jpg" alt="ikona html" width="20%">
                <img src="img/CSS3.png" alt="ikona css" width="20%">
                <img src="img/js.jpg" alt="ikona js" width="20%">
                <img src="img/bootstrap.png" alt="ikona bootstrap" width="20%">
            </div>
        </div>
        <!--        sekcja 5 form z kontaktaktem (do oprogramowania w PHP zeby wysylał mail) -->
        <div class="section5">

            <div class="container2">
                <h2 class="brand">Dane kontaktowe:</h2>
                <div class="wrapper animated bounceInLeft">
                    <div class="company-info">
                        <h3>Anna Folwarska</h3>
                        <ul>
                            <li><i class="fa fa-phone"></i> 668-134-058</li>
                            <li><i class="fa fa-envelope"></i> anna.folwarska@gmail.com</li>
                        </ul>

                    </div>
                    <div class="contact">
                        <h3>Napisz do mnie: </h3>
                        <form name="contactform" method="post" action="mail.php">
                            <p>
                                <label>Imię</label>
                                <input type="text" name="name" required>
                            </p>
                            <!--
                            <p>
                                <label>Nazwisko</label>
                                <input type="text" name="surname">
                            </p>
-->
                            <p>
                                <label>Adres email</label>
                                <input type="email" name="email" required>
                            </p>
                            <!--
                            <p>
                                <label>Telefon</label>
                                <input type="text" name="phone">
                            </p>
-->
                            <p class="full">
                                <label>Wiadomość</label>
                                <textarea name="message" rows="5" required></textarea>
                            </p>
                            <p class="full">
                                <button type="submit" name="submit" value="Wyślij" class="special">Wyślij</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--        sekcja 6 - żółty kwadrat  z wyśrodkowanym napisem kontakt + ikony social -->
        <div class="section6">
            <article class="color">
                <a name="kontakt"> </a>
                <h1>kontakt</h1>
                <div class="social">
                    <ul>
                        <!--                            <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>-->
                        <li><a target="_blank" href="https://www.linkedin.com/in/anna-folwarska/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="https://github.com/AnkaAnka123"><i class="fa fa-github"></i></a></li>

                        <li><a target="_blank" href="https://www.instagram.com/program_anka/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>

            </article>
        </div>
    </section>

    <footer class="footer">
        <h2>"The Sky is the limit"</h2>

    </footer>
    <footer>
        <p>Copyright &copy; 2018 - Anna Folwarska</p>
    </footer>
    <!--  JS do galerii zdjęć -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            };
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < dots.length; i++) {
                slides[i].style.display = "none"
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].clasName = dots[i].className.replace("active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

    </script>
</body>

</html>
