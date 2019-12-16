<?php

session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASM Services</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- fav icon linked -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- linking css file -->
    <link rel="stylesheet" href="./css/about_style.css">
</head>
<style>
header #navbarNav a:hover {
    color: green;
    /* border-bottom: 1px solid yellow;*/
    font-weight:bold;
}
header #navbarNav a{
    font-weight:bold;
}
</style>

<body>
    <header>
        <nav class=" navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <i class="fab fa-asymmetrik fa-3x mx-3" style="color: beige;"></i>
            <p
                style="text-align:left; margin-top:10px; margin-left: 10px; font-weight: bold; font-size: 25px; color: white; ">
                ASM
                Services</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_page.php">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo "Welcome"." ".$_SESSION['username']?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"
                            style="background-color:grey;">
                            <a class="dropdown-item" href="resetpwd.php">Reset Password</a>
                            <a class="dropdown-item" href="logout.php">Sign Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- end of nav -->


    <div class="bg-image"></div>
    <div class="bg-text" style="top:30em;background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));">
        <br><br><br><br>
        <h1><u>ABOUT US</u></h1>
        <br>
        <h4 style="font-size:50px">ASM Services</h4>
        <br><br>
        <p style="padding: 1em;">ASM Services is India's first standardized network of workshops to provide car
            services. We provide
            affordable,
            transparent and convenient on-demand car services at the comfort of your home or your office. With expert
            mechanics, state-of-the-art machinery, top quality spares, standardized processes & pricing, ASM Services
            provides a uniform service experience to all its customers, across its workshops. Everything under one-roof
            : servicing, repairs, inspections, denting/painting, roadside assistance and car care.<br><br>

            ASM Services provides best online car service in India making car maintenance easy, affordable and
            completely
            transparent. We also provide you with the best car service deals. Full car service is faciliated at all of
            the ASM car service centre. So book car service now!</p>
        <br><br>
        <button><a href="welcome.php">Get Started</a></button>
    </div>
    <div class="bg-image"></div>

    <!-- JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>