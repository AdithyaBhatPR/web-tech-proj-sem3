<?php

session_start();
?>

<html>
<head><title>
            ASM Services
         </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--fav icon linked -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
         *{
            margin: 0px;
            padding: 0px;
        }
        
        /* body{
            background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), 
                url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3nImOPVNAXqciHQsWZ5kmwsK4i93i-bJ9M0-8hnxBED36WK4l) url(https://images.unsplash.com/photo-1523676060187-f55189a71f5e?ixlib=rb-1.2.1&w=1000&q=80) url(https://www.supertune.com.au/wp-content/uploads/2018/09/repairs.jpg)   no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
            background-size: cover;
            color: white;
            
        
        } */

        #navbarNav a:hover {
        color: green;
        /* border-bottom: 1px solid yellow;*/
        font-weight:bold;
        }
        #navbarNav a {
            font-weight:bold;
        }
         .date input[type="date"]{
       background: transparent;
        border: none;
        border-bottom: 1px solid black;
    }
    .date input[type="time"]{
        background: transparent;
        border: none;
        border-bottom: 1px solid black;
    }
    .button{
        margin-left:300px;
    }
    .name input[type="text"]{
        background: transparent;
        border: none;
        border-bottom: 1px solid black;
    }
    .additionalinfo input[type="text"]{
        background: transparent;
        border: none;
        border-bottom: 1px solid black;
    }

    .heading h3{
    margin-left:500px;

}
 body{
        background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.5)),url(https://cache.desktopnexus.com/thumbseg/328/328742-bigthumbnail.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
} 
/* .box {
    position: absolute;
    top: 53vh;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    padding: 40px;
    background: rgba(0, 0, 0, .8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .5);
    border-radius: 10px;

} */
/* .time{
    margin-left:300px;
    margin-top:-22px;   
}
.additionalinfo{
    

        /* padding: 40px 0px 0px 0px; */
        
    .date input[type="date"]{
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
    }
    .date input[type="time"]{
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
    }
    .button{
        margin-left:300px;
    }
    button:hover{
        background-color: turquoise;
    }
    .name input[type="text"]{
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
    }
    .additionalinfo input[type="text"]{
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
    }
        
    
    </style>
    </head>
<!--    <body style="background-image: url(img/car.jfif);">-->
    <body>
    

    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <i class="fab fa-asymmetrik fa-3x mx-3" style="color: beige;"></i>
        <p
            style="text-align:left; margin-top:10px; margin-left: 10px; font-weight: bold; font-size: 25px; color: white; ">
            ASM Services</p>
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
    <br><br><br><br><br>

      <div class="heading">
        <h3>BOOKING DETAILS</h3>
      </div>
      <div class="box">
            <div id="bookingdate">
                    <h3>BOOKING DATE AND TIME</h3>
            </div>
            <br>
            <div class="date">
                    <label><b>Date:</b></label><input type="date"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <label><b>Time:</b></label><input type="time"/>
                    <!-- <label><b class="time">TIME:</b></label><input type="time" class="time/> -->
            </div>
            <br><br>
            <div class="additionalinfo">
                    <label for="phone"><b>Additional Info:</b></label>
                    <input type="text"><br>
            </div>
            <br><br>
            <div id="customerdetails">
                   <h3>CUSTOMER DETAILS</h3>
            </div>
            <div class="name">
                    <i class="fa fa-address-book" aria-hidden="true"></i> &nbsp;&nbsp;Name:<input type="text">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;Phone:<input type="text">
                    <br><br><br>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;Address:<input type="text">
                    <br><br><br>
                    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;&nbsp;Email:<input type="text">
            </div>
         </div>
      <br><br>
      <button class="button"><a href="submitted.php" style="text-decoration:none;color:black;"> CONFIRM DETAILS <i class="fas fa-arrow-alt-circle-right"></i></a></button>


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


             
   

    
</html>