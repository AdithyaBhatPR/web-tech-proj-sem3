
<?php

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>faq</title>

    <!-- bootstrap and fontawesome linked -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--fav icon linked -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style>
        /*FAQS*/
        h1{
            padding: 0px 0px 0px 100px;
        }
        .faq_question {
            margin: 0px;
            padding: 50px 0px 5px 100px;
            display: inline-block;
            cursor: pointer;
            font-weight: bold;
            color: aliceblue;
        }
        
        .faq_answer_container {
            display: none;
            padding: 50px 0px 5px 100px;
            color: aliceblue;
        }
        body{
            background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://images.designtrends.com/wp-content/uploads/2015/11/25102004/Car-Background-Designs4.jpg) no-repeat center center fixed;
        }
        #navbarNav a:hover {
        color: green;
        /* border-bottom: 1px solid yellow;*/
        font-weight:bold;
        }
        #navbarNav a {
            font-weight:bold;
        }
    </style>
    
</head>

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

    <h1 style="color: aliceblue">FAQ</h1>
    <div class="faq_container">
        <div class="faq">
            <div class="faq_question ">1.WHAT IS ASM?</div>
            <div class="faq_answer_container" style="display: block;">
                <div class="faq_answer">ASM is an online car repair & servicing platform, who aims to make car servicing & repair more easy and affordable. We are building a wide network of multi branded car service & repair workshops offering a quality experience with benefits such as transparent pricing, Genuine spare parts, highly skilled mechanics, service warranty & many more. So next time when you go for a service or need a repair in your car, All you got to do is make a simple call or visit us on our website or app.</div>
            </div>
        </div>
        <div class="faq">
            <div class="faq_question"><b>2.WHAT IS THE DIFFERENCE BETWEEN ASM SERVICE STATION & OTHER SERVICE STATION?</b></div>
            <div class="faq_answer_container">
                <div class="faq_answer">All of our service stations follows the service standards recommended by ASM. All of the service centers are verified & maintained by ASM to improve the service quality & deliver a premium service quality experience to the customer. When you avail a service from ASM service center you get benefits such as
                      <form>
                        <ul>
                        <li>Easy appointment schedule.</li>
                        <li>Fixed & transparent pricings.</li>
                        <li>Genuine parts assurance.</li>
                        <li>Service warranty up to 30 Days.</li>
                        <li>24*7 customer support.</li>
                        <li>Easy tracking of the service progress.</li>
                          </ul></form>
                </div>
            </div>
        </div>
        

        <div class="faq">
            <div class="faq_question"><b>3.WHAT ARE THE SERVICES OFFERED BY ASM?</b></div>
            <div class="faq_answer_container">
                <div class="faq_answer"><form>
                      <ul>
                        <li>Brake Pad/Disc Pad Replacement.</li>
                        <li>Wheel Alignment And Balancing.</li>
                        <li>Battery Charging/Replacement.</li>
                        <li>Clutch Check.</li>
                        <li>Suspension System.</li>
                        </ul>
                    </form></div>
            </div>
        </div>
         <div class="faq">
            <div class="faq_question"><b>4.CAN I GET A RIDE HOME WHEN I DROP OFF MY CAR?</b></div>
            <div class="faq_answer_container">
                <div class="faq_answer">
                    Yes, we would be happy to provide this service to you. We want each customer's visit to be a positive experience and will work diligently towards that goal.  We provide a pickup and delivery service with prior arrangements.
                </div>
            </div>
        </div>
        <div class="faq">
            <div class="faq_question"><b>5.HOW LONG WILL THE REPAIRS TO MY VEHICLE TAKE?</b></div>
            <div class="faq_answer_container">
                <div class="faq_answer">
                    We will do a proper disassembly to identify all the damage.  Once complete we will order parts and contact you with a guaranteed completion date.

On average repairs take 8-10 days (includes weekends)
                </div>
            </div>
        </div>
         <div class="faq">
            <div class="faq_question"><i>6.HOW WILL I KNOW WHEN MY CAR IS DONE?</i></div>
            <div class="faq_answer_container">
                <div class="faq_answer">
                   You will be notified by phone when your vehicle is ready to be picked up. Feel free to call or e-mail your advisor during the repair process if you have questions or concerns.
                </div>
            </div>
        </div>

        <div class="faq">
            <div class="faq_question"><b>7.WHEN DO I NEED TO PAY?</b></div>
            <div class="faq_answer_container">
                <div class="faq_answer">
                    You can pay at any time after the booking confirmation till the delivery of your vehicle.
                </div>
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

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.faq_question').click(function() {
                if ($(this).parent().is('.open')) {
                    $(this).closest('.faq').find('.faq_answer_container').slideUp();
                    $(this).closest('.faq').removeClass('open');
                } else {
                    $('.faq_answer_container').slideUp();
                    $('.faq').removeClass('open');
                    $(this).closest('.faq').find('.faq_answer_container').slideDown();
                    $(this).closest('.faq').addClass('open');
                }
            });
        });
    </script>

</body>

</html>