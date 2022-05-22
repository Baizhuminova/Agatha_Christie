<?php

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Trirong:wght@200&display=swap" rel="stylesheet">


    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/4852611609.js" crossorigin="anonymous"></script>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styless.css">


    <!-- Bootstrap separate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</head>
<body>
                        <!--main page-->

                        <nav>
    <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="#">Agatha Christie</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name">Agatha</span>
                <i class='bx bx-x' ></i>
            </div>
            <ul class="links">
                <li><a href="#">HOME</a></li>
                <li>
                    <a href="article.php">ABOUT THE AUTHOR</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Login Forms</a></li>
                        <li><a href="#">Card Design</a></li>
                        <li class="more">
                <span><a href="#">More</a>
                <i class='bx bxs-chevron-right arrow more-arrow'></i>
              </span>
                            <ul class="more-sub-menu sub-menu">
                                <li><a href="#">Neumorphism</a></li>
                                <li><a href="#">Pre-loader</a></li>
                                <li><a href="#">Glassmorphism</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="home.php">BOOKS</a></li>
                <li><a href="registrationpage.php">CONTACT US</a></li>
            </ul>
        </div>
        <div class="search-box">
            <i class='bx bx-search'></i>
            <div class="input-box">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>
</nav>


<section id="main">
<div class="main_page">
<div class="main_text">
    <pre><h1 class="slide-left">AGATHA<br>  CHRISTI</h1></pre>
    <p class="slide-left" >THE WORLD</p>
    <p1 class="slide-left" >is full <br> of secrets</p1>
    <p2 class="slide-left" >ENDLESS RIDDLES</p2>
    <p3 class="slide-left" >“Good advice is always certain <br> to be ignored, but that is no <br> reason not to give it ”</p3>
  

</div>
</div>
</div>
</section>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>
