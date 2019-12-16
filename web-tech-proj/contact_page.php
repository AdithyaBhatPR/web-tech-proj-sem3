<?php

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>ASM Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- fav icon linked -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- linking css file -->
    <!-- <link rel="stylesheet" href="./css/index_style.css"> -->

    <link rel="stylesheet" href="./css/contact_pg.css">
</head>
<style>
#navbarNav a:hover {
    color: green;
    /* border-bottom: 1px solid yellow;*/
    font-weight:bold;
}
#navbarNav a{
    font-weight:bold;
}
</style>

<body>

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
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:grey;">
                        <a class="dropdown-item" href="resetpwd.php">Reset Password</a>
                        <a class="dropdown-item" href="logout.php">Sign Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="bg-image"></div>
    <div class="container">
        <div style="text-align:center;margin-top: 100px;">
            <h2 style="background-color: rgb(255, 253, 250);color: rgb(27, 27, 119);border:2px solid rgb(27, 27,
                119);font-size: 40px;box-shadow: 0 15px 25px rgba(0, 0, 0, .5);
                border-radius: 10px;">
                CONTACT US</h2>
            <p style="font-size: 20px;">Come along and be with us... Feel free to leave your message!</p>
        </div>
        <div class="row">
            <div class="c1">
                <img src="img/Car_Checkup-512.png" style="width:100%;">
            </div>
            <div class="c1">
                <form>
                    <label for="fname">Name</label>
                    <input type="text" id="Name" name="Name" placeholder="name" required="">
                    <label for="email">E-Mail</label>
                    <input type="email" id="mail" name="mail" placeholder="e-mail" required="">
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Message" style="height:170px"
                        required=""></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

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