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
    <h2>MODIFICATIONS</h2>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service1" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>7000</p>
        <img src="https://www.autoguide.com/blog/wp-content/uploads/2018/08/best-aftermarket-suspension-upgrades.jpg" height="100px" width="150px" alt="Service2">
        <p>Suspension Upgrades</p>
        <ul>
            <li>Srings,Shock Absorbers</li>
            <li>Knuckles In Stock Car Suspensions</li>
            <li>Perfect Steering And Control</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service2" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>5000</p>
        <img src="https://www.mvsottawa.com/wp-content/uploads/2017/03/7385-1.jpeg" height="100px" width="150px" alt="Service2">
        <p>Turbochargers And Superchargers</p>
        <ul>
            <li>Increased Horsepower</li>
            <li>Immediate Power Delivery</li>
            <li>Proper Oil Change And Engine Maintanence</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service3" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>900</p>
        <img src="https://i.ytimg.com/vi/VoAiZbazk8I/maxresdefault.jpg" height="100px" width="150px" alt="Service2">
        <p>Neon Lights</p>
        <ul>
            <li>Cars Beauty</li>
            <li>Very Rich Look </li>
            <li>Tubing Is Not On Show</li>
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
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>8000</p>
        <img src="https://automodifying.com/wp-content/uploads/2019/05/5ce5af795b183-720x480.png"height="100px" width="150px" alt="Service2">
        <p>Windows Tint</p>
        <ul>
            <li>Can Block The Harmful UV Rays from the Sun</li>
            <li>No Prolonged Exposure to the skin</li>
            <li>Reduces Glare During Peak Sunshine Hours</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service6" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>24000</p>
        <img src="https://901soundsautoaccessoriesmtn.files.wordpress.com/2019/06/sus5.jpg?w=640" height="100px" width="150px" alt="Service2">
        <p>Nitrous Oxide</p>
        <ul>
            <li>Best Way To Add a lot of Power</li>
            <li>Increases The Oxygen And Hence Extracts More Power</li>
            <li>Maximizes The Power</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service7" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>15000</p>
        <img src="http://www.autosspeed.com/wp-content/uploads/2019/01/2-2.jpg" height="100px" width="150px" alt="Service2">
        <p>Sport Seats</p>
        <ul>
            <li>Looks Cool</li>
            <li>Much Comfortable And Supportive</li>
            <li>Designed To Be Used With Race Harnesses</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service8" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>7000</p>
        <img src="https://www.theaa.com/~/media/the-aa/article-summaries/driving-advice/security/catalytic-converter-theft.jpg?la=en&hash=FB801138B7C0127187A400AE91B84B5482E2B6D0" height="100px" width="150px" alt="Service2">
        <p>Altering Emissions or the Catalytic Converter</p>
        <ul>
            <li>Coal Rolling</li>
            <li>Performance Gain</li>
            <li>Upgrading The Exhaust System</li>
        </ul>
    </div>

    <div class="container">
        <input type="checkbox" onclick="calculate()" class="service" id="service9" style="float:right;width: 30px;height: 30px;">
        <p style="float: right;margin-right: 10px;"><i class="fas fa-rupee-sign"></i>1500</p>
        <img src=https://cdn4.wheelbasealloys.com/product-images/product-817764_63776_93.jpg height="100px" width="150px" alt="Service2">
        <p>Alloy Wheels</p>
        <ul>
            <li>Tyre Upsizing</li>
            <li>Performance Advantages</li>
            <li>Quicker Acceleration And Faster Stopping</li>
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
        var service9 = document.getElementById("service9");
        function calculate() {
            var total_modify = 0;
            if (service1.checked) {
                total_modify += 7000;
            }
            if (service2.checked) {
                total_modify += 5000;

            }
            if (service3.checked) {
                total_modify += 900;

            }
            if (service4.checked) {
                total_modify += 7000;

            }
            if (service5.checked) {
                total_modify += 8000;

            }
            if (service6.checked) {
                total_modify += 24000;

            }
            if (service7.checked) {
                total_modify += 15000;

            }
            if (service8.checked) {
                total_modify += 7000;

            }
            if (service9.checked) {
                total_modify += 1500;

            }
            document.getElementById('final_amt').innerHTML = total_modify;
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