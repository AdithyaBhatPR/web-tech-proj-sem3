<?php

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--fav icon linked -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- link css here -->
    <link rel="stylesheet" href="./css/servicepgcss.css">
</head>
<style>
#navbarNav a:hover {
    color: green;
    /* border-bottom: 1px solid yellow;*/
    font-weight:bold;
}
#navbarNav a {
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
    <br><br><br>
    <h2>SERVICES</h2>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service1" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>500</p>
        <img src="http://fmpmotors.wpengine.com/wp-content/uploads/2014/09/The-Importance-of-Wheel-Alignment-and-Tyre-Balancing.jpg" height="100px" width="150px" alt="Service2">
        <p>Wheel Alignment And Balancing</p>
        <ul>
            <li>Fully Automated</li>
            <li>High Quality Weights</li>
            <li>Every 10000kms or 6 Months</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service2" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>6000</p>
        <img src="https://www.familyhandyman.com/wp-content/uploads/2017/06/FH15FEB_DIYBRK_01-2.jpg" height="100px" width="150px" alt="Service1">
        <p>Brake Pad/Disc Pad Replacement</p>
        <ul>
            <li>Brakes Inspection</li>
            <li>Consumable Replacement</li>
            <li>Brake Fluid top up</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service3" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>10000</p>
        <img src="https://i1.adis.ws/i/washford/Fitting_Car_Battery_BG_770x470?$adpimage$" height="100px" width="150px" alt="Service2">
        <p>Battery Charging/Replacement</p>
        <ul>
            <li>Electrical System Inspection</li>
            <li>Battery Replacement,if faulty</li>
            <li>Battery Charging</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service4" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>7000</p>
        <img src="http://www.dublindiagnostics.com/wp-content/uploads/2016/08/Clutch-1500x862.jpg" height="100px" width="150px" alt="Service2">
        <p>Clutch Check</p>
        <ul>
            <li>Clutch Functionality And Health Check</li>
            <li>Consumable Replacement(as required)</li>
            <li>Clutch Fluid top up</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service5" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>4500</p>
        <img src="http://www.autotechwestislip.com/wp-content/uploads/2015/08/car-wheel-suspension-and-brake-system-maintenance-000031874536_Small.jpg" height="100px" width="150px" alt="Service2">
        <p>Wheel Alignment And Suspension System</p>
        <ul>
            <li>Wheel Alignment using state-of-art laser technology</li>
            <li>Hunter Enginerring Alignment Machine</li>
            <li>Inspect Your Steering And Suspension System</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service6" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>250</p>
        <img src="https://hip2save.com/wp-content/uploads/2017/05/oil-change.jpg?resize=1200%2C630&strip=all" height="100px" width="150px" alt="Service2">
        <p>Oil Changes</p>
        <ul>
            <li>Milti-point Oil Change Service</li>
            <li>Proper fluid oil using Kendall Oil products</li>
            <li>High Mileage And Full Synthetic Oils</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service7" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>500</p>
        <img src="http://clunkbucket.com/wp-content/gallery/replace-windshield-wipers/replace_wiper3.jpg" height="100px" width="150px" alt="Service2">
        <p>Wiper Blade Installation</p>
        <ul>
            <li>Replace Worn Rubber Part of Wiper Blades</li>
            <li>Slide in the Windshield Wiper Blade Replacement</li>
            <li>Windshield Washer Fluid Troubleshooting</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service8" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>4000</p>
        <img src="http://autorepairprofitsystem.com/wp-content/uploads/2019/04/brake-disc-1024x682.jpg" height="100px" width="150px" alt="Service2">
        <p>Brake Problems</p>
        <ul>
            <li>Inspecting the Caliper And Break Pads</li>
            <li>Resurface or Replace the Brake Rotors</li>
            <li>Checking Brake Pressure</li>
        </ul>
    </div>
    
    <div class="container">
        <!-- <button id="final" onclick="calculate()" style="float: left;margin: 1em;font-size: 22px;">Estimate
            Total</button> -->
        <p style="margin: 1em;font-size: 22px;">TOTAL: <i class="fas fa-rupee-sign"></i><span id="final_amt"
                onfocus="this.blur();" style="font-size: 25px;margin-left: 0.5em;">-</span>
        </p>
        <button style="float:right;margin:5px;font-size: 22px;"><a style="text-decoration:none" href="bookingpg.php">Proceed to Book</a></button>
        <button style="float:right;margin:5px ;font-size: 22px;"><a style="text-decoration:none" href="cardeffect.php">Go Back to Menu</a></button>

    </div>

    <script>
        var service1 = document.getElementById("service1");
        var service2 = document.getElementById("service2");
        var service3 = document.getElementById("service3");
        var service4 = document.getElementById("service4");
        var service5 = document.getElementById("service5");
        var service6 = document.getElementById("service6");
        var service7 = document.getElementById("service7");
        var service8 = document.getElementById("service8");

        function calculate() {
            var total_service = 0;
            if (service1.checked) {
                total_service += 500;
            }
            if (service2.checked) {
                total_service += 6000;

            }
            if (service3.checked) {
                total_service += 10000;

            }
            if (service4.checked) {
                total_service += 7000;

            }
            if (service5.checked) {
                total_service += 4500;

            }
            if (service6.checked) {
                total_service += 250;

            }
            if (service7.checked) {
                total_service += 500;

            }
            if (service8.checked) {
                total_service += 4000;

            }
            document.getElementById('final_amt').innerHTML = total_service;
        }
    </script>

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