<?php
    include("../Database/dbase_connect.php");
    if(!isset($_SESSION["login"])){
        header("location:login.php");
    }
    elseif(isset($_SESSION["login"])&& $_SESSION['login']==2){
        header("location:../admin/dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="foodpanda.css" />
    <link rel="icon" type="gif/img/png" href="assets/images/icon-img.PNG">
    <title>Document</title>
</head>

<body>
    <div class="Newaz">
        <div class="div-1">
            <div class="div-2">
                <img src="../assets/images/a1.PNG">
            </div>
            <div class="div-3">
                <div class="div-4">
                    <h4>
                        EN
                    </h4>
                </div>
                <div class="div-4 color">
                    <i class="far fa-user"></i>
                    <a href="../session/session_destroy.php" target="" style="font-weight:normal; display: inline-block;">Logout</a>
                </div>
                <div class="div-4 color">
                    <i class="far fa-clipboard"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="dim-1">
        <div class="dim-2 dim-22">
            <h1 class="color1">It's the food you love, delivered</h1>
            <div class="dim-3">
                <input type="search" placeholder="Enter your city (e.q Karachi, Lahore)">
                <div class="nick">
                    FIND RESTAURENT
                </div>
            </div>
        </div>
    </div>


    <div class="dim-5">
        <div class="city">
            <h2 class="titleBig">Cities
                <span class="black titleSmall">Find us in your city</span>
            </h2>
        </div>

        <div class="All">
            <div class="ImageAll">
                <img src="../assets/images/Jinnah_Mausoleum.jpeg">
                <h2 class="displayelem">K</h2>
                <button class="displayelem"><i class="fa-solid fa-arrow-right"></i></button>
                <p>Karachi</p>
            </div>
            <div class="ImageAll">
                <img src="../assets/images/lahorea.jpg">
                <h2 class="displayelem">L</h2>
                <button class="displayelem"><i class="fa-solid fa-arrow-right"></i></button>
                <p>Lahore</p>
            </div>
            <div class="ImageAll">
                <img src="../assets/images/islamabada.jpg">
                <h2 class="displayelem">I</h2>
                <button class="displayelem"><i class="fa-solid fa-arrow-right"></i></button>
                <p>Islamabad</p>
            </div>
            <div class="ImageAll">
                <img src="../assets/images/peshawar.jpg">
                <h2 class="displayelem">P</h2>
                <button class="displayelem"><i class="fa-solid fa-arrow-right"></i></button>
                <p>Peshawar</p>
            </div>
            <div class="ImageAll">
                <img src="../assets/images/quetta.jpg">
                <h2 class="displayelem">Q</h2>
                <button class="displayelem"><i class="fa-solid fa-arrow-right"></i></button>
                <p>Quetta</p>
            </div>
            <div class="ImageAll">
                <img src="../assets/images/faisalabad.png">
                <h2 class="displayelem">F</h2>
                <button class="displayelem"><i class="fa-solid fa-arrow-right"></i></button>
                <p>Faislabad</p>
            </div>
        </div>
    </div>




    <div class="appPart">
        <div class="dim-5">
            <h2 class="titleBig">App
                <span class="blackColor titleSmall">Put us in your pocket</span>
            </h2>
        </div>
    </div>

    <div class="app1">
        <div class="app2">
            <div>
                <h2 class="titlesmall">Download the food you love</h2>
                <span class="Tax" style="color: #fff;">It's all at your fingertips -- the restaurants you love. Find the
                    right food to suit
                </span>

            </div>
            <span class="Text1" style="color: #fff;"> mood, and make the first bite last. Go ahead, download us.</span>
            <div>
                <img src="../assets/images/a7.PNG">
            </div>
        </div>
        <img class="mobileImage" src="assets/images/a8.png">
    </div>



    <div class="gd-1">
        <div class="gd-2">
            <h2 class="titleBig">Office
                <span class="black titleSmall">Take your office out to lunch</span>
            </h2>
        </div>
    </div>

    <div class="gd-3">
        <div class="gd-4">
            <span class="black titleSmall dum">foodpanda for business</span>
            <span class="Text" style="color: #707070;">Order lunch, fuel for meetings or late-night deliveries to the
                office.<br>
                Your favorite restaurants coming to a desk near you.</span>
            <div class="gd-5">GET STARTED</div>
        </div>
    </div>


    <div class="gd-2 gd-6">
        <h3 class="black">Order food from the best restaurants with foodpanda Bangladesh</h3>
        <span class="Nai1">Are you hungry? Did you have a long and stressful day? Interested in getting a cheesy pizza
            delivered to your home or office? Then foodpanda Bangladesh is</span><br>
        <span class="Nai1">the right destination for you! foodpanda offers you a long and detailed list of the best
            restaurants and local favourites near you to help satisfy your hunger</span><br>
        <span class="Nai1">through our online food delivery service. Cuisines are diverse: whether you fancy a juicy
            burger from Takeout, fresh sushi from Samdado or peri peri chicken</span><br>
        <span class="Nai1">from Nando's, foodpanda Bangladesh has a wide range of 2000+ restaurants available from
            Dhaka, to Chittagong through to Sylhet. From a healthy lunch to</span><br>
        <span class="Nai1">evening snacks to a hearty dinner, foodpanda provides you with the means to satisfy your
            cravings throughout the day. Sit back and relax - let foodpanda</span><br>

        <button class="Nai">Click Here to Read More</button>
    </div>



    <div class="gd-7 gd-2">
        <span class="Text">Want vouchers and the latest news from our restaurants?</span>
        <h4 class="black">GET OUR WEEKLY EMAIL:</h4>
        <div>
            <select class="location">
                <option>City</option>
                <option>DHAKA</option>
                <option>CHITTAGONG</option>
                <option>SYLHET</option>
                <option>COX'SBAZAR</option>
            </select> &nbsp;
            <input class="location" type="email" placeholder="Email"> &nbsp;
            <a href="register.php" class="location" target="_blank"
                style="font-weight: bold;text-decoration:none;background-color:rgb(214, 12, 99);color:white;">SING UP
                NOW</a>
        </div>
    </div>
    <div class="gd-2 socialImg">
        <img src="../assets/images/b2.PNG" alt="">
        <img class="scRight" src="assets/images/b1.PNG" alt="">
    </div>




    <div class="gd-2 gd-8 black">
        <div class="gd-9">
            <p>&copy; 2019 foodpanda</p>
        </div>
        <div class="gd-10">
            <ul>
                <li>Press</li>
                <li>Help center</li>
                <li>Terms and conditions</li>
                <li>Privacy policy</li>
                <li>Security</li>
                <li>Partner With us</li>
                <li>How foodpanda works</li>
                <li>Download foodpanda apps</li>
                <li>Careers</li>
                <li>Corporate Customer</li>
                <li>foodpanda Deals</li>
            </ul>
        </div>
    </div>




    <div class="gd-2">
        <div class="delivery">
            <div class="deliveryInner">
                <h4>FOOD DELIVERY IN DHAKA</h4>
                <p>Takeout-Banani, Pizza Guy, Shawarma Street ,<br>Coffeelicious Coffee-Baily Road, Time Out.</p>
            </div>
            <div class="deliveryInner deliveryMarTop">
                <h4>FOOD DELIVERY IN CHITTAGONG</h4>
                <p>Barcode Cafe, Muno Cafe Bistro, Afghan Restaurant ,<br>Burgwich Town Fusion Cafe, Sadia's Kitchen.
                </p>
            </div>
        </div>
        <div class="delivery">
            <div class="deliveryInner">
                <h4>FOOD DELIVERY IN SYLHET</h4>
                <p>Shawarma House-Sylhet , Hot Spot, Woondaal King<br>Kebab, Panshi Restaurant, Chick Chicken, Bhujon
                    Bari.</p>
            </div>
            <div class="deliveryInner deliveryMarTop">
                <h4>PIZZA DELIVERY IN DHAKA</h4>
                <p>Cafe La Vista , Food Lounge, Chick Chicken, Shawarma<br>House, Hot Spot.</p>
            </div>
        </div>
        <div class="delivery">
            <div class="deliveryInner">
                <h4>CHINESE FOOD DELIVERY IN DHAKA</h4>
                <p>Royal Kitchen, Kebabish Original, Eatopia, Rainbow<br>Chinese, Nirvana Inn,</p>
            </div>
            <div class="deliveryInner deliveryMarTop">
                <h4>BECOME A RIDER</h4>
                <p>Apply Here</p>
            </div>
        </div>
    </div> <br>



    <div class="gd-2 dark">
        <div class="black00">
            <h4>Popular Cuisines</h4>
        </div>

        <div class="dark1">
            <ul>
                <li>American</li>
                <li>Bakery & Cake</li>
                <li>Burger</li>
                <li>Chinese</li>
                <li>Dessert</li>
            </ul>
        </div>
        <div class="dark1">
            <ul>
                <li>Fast food</li>
                <li>Healthy food</li>
                <li>Italian</li>
                <li>Indian</li>
                <li>Japanese</li>
            </ul>
        </div>
        <div class="dark1">
            <ul>
                <li>Korean</li>
                <li>Mexican</li>
                <li>Middle East</li>
                <li>Pizza</li>
                <li>Seafood</li>
            </ul>
        </div>
        <div class="dark1">
            <ul>
                <li>Thai</li>
                <li>Vegetarian</li>
                <li>Western</li>
            </ul>
        </div>
    </div>

    <div class="dark2 gd-2">
        <ul>
            <li>Bulgeria</li>
            <li>Romania</li>
            <li>Hong Kong</li>
            <li>Pakistan</li>
            <li>Singapore</li>
            <li>Malaysia</li>
            <li>Phillipains</li>
            <li>Thailand</li>
            <li>Taiwan</li>
        </ul>
    </div>

    <div class="dark3">

    </div>
    <script src="https://kit.fontawesome.com/69ee489e1c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        jQuery.noConflict()
        jQuery(document).ready(function($){
            $(".ImageAll").each((index)=>{
                $(".ImageAll")[index].addEventListener('mouseleave',function(e){
                    $(".ImageAll")[index].children[1].classList.add("displayelem")
                    $(".ImageAll")[index].children[2].classList.add("displayelem")
                })
                $(".ImageAll")[index].addEventListener('mouseenter',function(e){
                    $(".ImageAll")[index].children[1].classList.remove("displayelem")
                    $(".ImageAll")[index].children[2].classList.remove("displayelem")
                })
            })
        })
    </script>
</body>

</html