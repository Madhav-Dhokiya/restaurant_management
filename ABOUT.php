<?php
    session_start();
?>
<html>
    <head>
        <title> ROYAL Restuarant </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
                body
                {
                    color: white;
                    font-size: 15px;
                    font-family: 'Athiti', sans-serif;
                    line-height: 1.80857;
                    margin: 0px; 
                    overflow: visible;
                }
                .main{
                    background-image: url("all.jpg");
                    background-size: cover;
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    height: 100vh;
                }
                #nav_bar 
                {
                  float: right;
                }

                #nav_bar li 
                {
                  display: inline-block;
                  padding: 8px;
                }

                #nav_bar  
                {
                    margin-right: 60px;
                    padding: 7px 15px;
                    border-radius: 3px; 
                    font-weight: bold;
                    color: black;
                }

                .con
                {
                    padding-right: 130px;
                    font-size: 19px;
                }

                .logo
                {
                    margin-left: 50px;
                    height: 100px;
                    width: 120px;
                }

                .head-class
                {
                    background-color: white;
                }

                .foot-class
                {
                    background-color: rgb(192,192,192);
                    margin-top: 100px;
                    height: 270px;
                    font-family: cursive;
                    padding-top: 20px;
                }

                .footer-first
                {
                    margin-left: 100px;
                }

                .footer-second
                {
                    margin-left: 550px;
                    transform: translate(0,-88%)
                }

                .footer-third
                {
                    margin-left: 1000px;
                    transform: translate(0,-160%);
                }
                .fa {
                  padding: 20px;
                  font-size: 30px;
                  width: 50px;
                  text-align: center;
                  text-decoration: none;
                  margin: 5px 2px;
                }

                .fa:hover {
                    opacity: 0.7;
                }

                .fa-facebook {
                  background: #3B5998;
                  color: white;
                }
                .fa-google {
                  background: #dd4b39;
                  color: white;
                }
                .fa-instagram {
                  background: #125688;
                  color: white;
                }
                .nav-item:hover
                {
                    background-color: #ff5800;
                    border-radius: 20px;
                    cursor: pointer;
                }

                .special
                {
                    text-align: center;
                    margin-top: 100px;
                    margin-bottom: 150px;
                }

                .middle
                {
                    background-color: white;
                    color: black;
                }

                .link
                {
                    text-decoration: none;
                    color: black;
                }

                .link:hover
                {
                    text-decoration: none;
                }

                .pra
                {
                    text-align: center;
                    font-family: cursive;
                    font-size: 20px;
                }

                .wel-come
                {
                    text-align: center;
                    font-size: 60px;
                }
        </style>
    </head>
    
<body>
    <div class="main">
    <header class="head-class">
        <nav class="nav-class">
            <div class="con">
                <img src="logo.jpg" class="logo">
                <ul id="nav_bar">  
                    <li class="nav-item"><a class="link" href="HOMEPAGE.php"> Home </a></li>
                    <li class="nav-item" style="transform: translate(20%,0)"><a class="link" href="MENU.php"> Menu </a></li>
                    <li class="nav-item" style="transform: translate(30%,0)"><a class="link" href="ABOUT.php"> About </a> </li>
                    <li class="nav-item" style="transform: translate(40%,0)"><a class="link" href="CONTACT.php"> Contact </a></li>
                     <?php
                    if(isset($_SESSION['uname']))
                    {
                        echo '<li class="nav-item" style="transform: translate(50%,0)"><a class="link" href="logout.php"> Logout </a></li>';
                    }
                    else
                    {
                        echo '<li class="nav-item" style="transform: translate(50%,0)"><a class="link" href="login.php"> Login </a></li>';   
                    }
                ?>
                </ul>
            </div>
        </nav>
    </header>
    
    <h1 class="special"> About us </h1>
    
    <div class="middle">
        <h1 class="wel-come"><font color="#ff5800"> ROYAL Restaurant </font></h1>
        
        <p class="pra"> Fresh Homecooked food prepared in the hygiene of the home kitchen cooked with fresh ingredients, care, and love. <br> We deliver vegetarian meals on a daily basis, Veg Biriyanis, and Specialists in Gujarati cuisines.<br> Takeaway is available.<br> Give us an order in advance of 12-24hrs since we prepare your order fresh from scratch and customize it as per your taste.</p>
    </div>
    </div><br><br>
    
     <font color="black">
    <footer class="foot-class">
                <div class="footer-first">
					<h3>Opening hours</h3>
				
					<p><span class="text-color"> ♦ Mon-Fri :</span> 5PM - 11PM</p>
					<p><span class="text-color"> ♦ Sat-Sun :</span> 3PM - 12AM</p>
				</div>
				<div class="footer-second">
					<h3>Contact information</h3>
					<p class="lead"> ♦ M.G. Road, Porbandar</p>
					<p class="lead"> ♦ <a href="#">+91 91373 41427</a></p>
					<p> ♦ Admin's Email :- <a href="#"> brijeshmakwana813@gmail.com </a></p>
				</div>
				<div class="footer-third">
					<h3>Subscribe</h3>
					<a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-google"></a><a href="#" class="fa fa-instagram"></a>
                </div>
    </footer>
    </font>
    </div>
</body>        
</html>