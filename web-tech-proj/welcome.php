<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASM Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- fav icon linked -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- linking css file -->
    <link rel="stylesheet" href="./css/index_style.css">

</head>

<body>
    <header style="margin-right:-17px;">
        <nav class=" navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding:10px;margin-right">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

        <div class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12 text-center" style="margin-top: 140px;">
                    <h1 style="color: thistle;font-size: 50px;">
                        CAR SERVICES MADE EASY</h1><br>
                    <h5 style="color: wheat;">DOORSTEP SERVICE | LOW PRICES | PROFESSIONAL SERVICE</h5>
                    <h6 style="color: wheat;">RESTORATION | AMAZING SKINS | LOW COST INSURANCE DEALS</h6>
                </div>
                <div class="col-md-5 col-sm-12 ">
                    <div class="model-brand" style="padding-left: 30px;" id="modelb">
                        <h4 style="margin-left: -190px; margin-top: 50px; color: goldenrod;"><br><br><br>BRAND
                        </h4>
                        <select id="column-select" onclick="myfunction()" style="margin-left: -20px; width: 60%; align-self: right;color:white;">
                            <option value="1">Audi</option>
                            <option value="2">Ford</option>
                            <option value="3">Hyundai</option>
                            <option value="4">Mercedez</option>
                        </select>
                        <h4 style="margin-left: -190px; margin-top: 10px; color: goldenrod;">MODEL</h4>
                        <!-- <select id="carmodel" style="margin-left: -20px; width: 60%; align-self: right;color:white;">
                            <option value="1">Volvo</option>
                            <option value="2">Saab</option>
                            <option value="3">Mercedes</option>
                            <option value="4">Audi</option> -->
                        <select style="margin-left: -20px; width: 60%; align-self: right;color:white;" id="layout-selectsss">
                            <option id="car1" style="color:black;"></option>
                            <option id="car2" style="color:black;"></option>
                        </select>
                    </div><br>
                    <a href="cardeffect.php" class="btn"
                        style="color: white; font-weight: bold; border:1px solid white;border-radius: 30px;">Get
                        Started </a>
                </div>
            </div>
        </div>
        <br><br><br>
    </header>

    <main>
        <!-- section-2 about branches -->

        <section class="section-2 container-fluid p-0">
            <div class="row">
                <div class="container-fluid text-center">
                    <h1>OUR BRANCHES</h1>
                    <p>adjjbj jbjb jjbb</p>
                </div>
                <div class="section-02" style="justify-content:center;">
                    <div class="card text-center" style="width: 18rem;box-shadow: 0 15px 25px rgba(0, 0, 0, .5);">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <iframe class="card-img-top"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7777.398399584498!2d77.57888172186875!3d12.927044520492839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae159eeb3a5753%3A0xbe47e1b47ffa7c46!2s4th%20Block%2C%20Jayanagar%2C%20Bengaluru%2C%20Karnataka%20560041!5e0!3m2!1sen!2sin!4v1570631116340!5m2!1sen!2sin"
                            width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        <div class="card-body">
                            <p class="card-text">aaaaaaaa asbahishh asdadsad adadasdad
                                oijoijoisdjijaisjdijoi joijocijijijcij iojoij ioj ijoi jioj oij oji ji joasx.</p>
                        </div>
                    </div>
                    <div class="card text-center" style="width: 18rem;box-shadow: 0 15px 25px rgba(0, 0, 0, .5);">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <iframe class="card-img-top"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7777.398399584498!2d77.57888172186875!3d12.927044520492839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae159eeb3a5753%3A0xbe47e1b47ffa7c46!2s4th%20Block%2C%20Jayanagar%2C%20Bengaluru%2C%20Karnataka%20560041!5e0!3m2!1sen!2sin!4v1570631116340!5m2!1sen!2sin"
                            width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        <div class="card-body">
                            <p class="card-text">aaaaaaaa asbahishh asdadsad adadasdad
                                oijoijoisdjijaisjdijoi joijocijijijcij iojoij ioj ijoi jioj oij oji ji joasx.</p>
                        </div>
                    </div>
                    <div class="card text-center" style="width: 18rem;box-shadow: 0 15px 25px rgba(0, 0, 0, .5);">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <iframe class="card-img-top"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7777.398399584498!2d77.57888172186875!3d12.927044520492839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae159eeb3a5753%3A0xbe47e1b47ffa7c46!2s4th%20Block%2C%20Jayanagar%2C%20Bengaluru%2C%20Karnataka%20560041!5e0!3m2!1sen!2sin!4v1570631116340!5m2!1sen!2sin"
                            width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        <div class="card-body">
                            <p class="card-text">aaaaaaaa asbahishh asdadsad adadasdad
                                oijoijoisdjijaisjdijoi joijocijijijcij iojoij ioj ijoi jioj oij oji ji joasx.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-3">
            <div class="container text-center">
                <h1>What our Customers Say About Us</h1>
                <p>adjjbj jbjb jjbb</p>
            </div>
            <div class="team_row">
                <div class="card-deck text-center">
                    <div class="card d-inline-block shadow-lg">
                        <img class="card-img-top" src="./img/bg1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Allen Mathews</h5>
                            <p class="card-text">aaaaaaaaaaaaaaaaaa a aaaaaaaaa aaaaa aaaaa a a a  aaaaaaaaaaa aaaaaaaa aaaaaaaaaaaaaaa 
                                aaaaaaaaaaaaa aaaaaaaa aaaaaaaaaaa aaaaaaaaa aaaaaaa aaaa
                            </p>
                            <p class="card-text">CEO at ASM</p>
                        </div>
                    </div>
                    <div class="card d-inline-block shadow-lg">
                        <img class="card-img-top" src="./img/bg1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Adriana Jolene</h5>
                            <p class="card-text">aaaaaaaaaaaaaaaaaa a aaaaaaaaa aaaaa aaaaa a a a  aaaaaaaaaaa aaaaaaaa aaaaaaaaaaaaaaa 
                                aaaaaaaaaaaaa aaaaaaaa aaaaaaaaaaa aaaaaaaaa aaaaaaa aaaa</p>
                            <p class="card-text">Tech lead at ASM</p>
                        </div>
                    </div>
                    <div class="card d-inline-block shadow-lg">
                        <img class="card-img-top" src="./img/bg1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">John Carren</h5>
                            <p class="card-text">aaaaaaaaaaaaaaaaaa a aaaaaaaaa aaaaa aaaaa a a a  aaaaaaaaaaa aaaaaaaa aaaaaaaaaaaaaaa 
                                aaaaaaaaaaaaa aaaaaaaa aaaaaaaaaaa aaaaaaaaa aaaaaaa aaaa</p>
                            <p class="card-text">Marketing HOD at ASM</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark" style="color: ivory;margin-right:-17px;">

        <div style="background-color: #170c58;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Get connected with us on social networks!</h6>
                    </div>

                    <div class="col-md-6 col-lg-7 text-center text-md-right" id="footer-social">

                        <!-- Facebook -->
                        <a class="fb-ic" href="#a" style="text-decoration: none;color: white;">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic" href="#" style="text-decoration: none;color: white;">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic" href="#" style="text-decoration: none;color: white;">
                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic" href="#" style="text-decoration: none;color: white;">
                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic" href="#" style="text-decoration: none; color: white;">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container text-center text-md-left mt-5" >
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold" style="color: rgb(9, 175, 9)">ASM Services</h6>
                        <hr class="green accent-2 mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px;border-color: rgb(9, 175, 9);">
                        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                            amet,
                            consectetur
                            adipisicing elit.</p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" id="footer_branch">
                        <h6 class="text-uppercase font-weight-bold" style="color: rgb(9, 175, 9)">BRANCHES AT</h6>
                        <hr class="green accent-2 mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px;border-color: rgb(9, 175, 9);">
                        <p>BANGALORE</p>
                        <p>MYSURU</p>
                        <p>MANGALORE</p>

                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold" style="color: rgb(9, 175, 9)">CONTACT</h6>
                        <hr class="green accent-2 mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px;border-color: rgb(9, 175, 9);">
                        <p>
                            <i class="fas fa-home mr-3"></i> Bangalore , India</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> asm@services.com</p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3"
            style="font-weight: bold; color: rgb(189, 68, 219); background-color: rgb(65, 8, 139);">© 2019 Copyright:
            <a href="./index.html" style="text-decoration: none;font-weight: bold;color: white;">ASM Services</a>
        </div>

    </footer>

    <script>
        function myfunction()
          {
            var x = document.getElementById("column-select").selectedIndex;
            var y = document.getElementsByTagName("option")[x].value;
            var z=document.getElementById("car1");
            var m=document.getElementById("car2"); 
             if(y==1)
             {
               z.innerHTML="Q3";
               m.innerHTML="A3";
                
             }
            if(y==2)
            {
                z.innerHTML="Fiesta";
                m.innerHTML="Ecosport";
            }
            if(y==3)
            {
                z.innerHTML="i10";
                m.innerHTML="i20";
            }
            if(y==4)
            {
                z.innerHTML="cla-class";
                m.innerHTML="c-class";
            }
        }
    </script>


    <!-- JS link -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- gmaps js -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5yvrcVQLtsf5tCXXG8kn1eVLlqysVuW8 &callback=initMap">
    </script> -->

    <script src="./js/index.js"></script>
</body>

</html>