<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../Stylesheets/General CSS/General CSS.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/Header.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/Navigation.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/footer.css">
    <link rel="stylesheet" href="../../Stylesheets/End-User CSS/Profile.css">
    <link rel="stylesheet" href="../../Stylesheets/End-User CSS/Registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Social Donors - Profile</title>

    <style>
        .first-section{
            margin-bottom: 25px;
        }

        h3{
            margin-left: 30px;
        }
    </style>
</head>

<body>

    <header class="header">
            
        <a href="home.php">

            <div class="logo-container">
                <img class="logo" src="../../Logo/download 2.png" >
            </div>

        </a>


        <div class="container">
            
            <div class="search-bar-button">

                <div class="search-input-container">
                    <div class="search-input">
                        <input type="text" placeholder="Search" class="search-bar">
                        <button type="submit" class="search-btn">search</button>
                        <img src="../../Icons/ant-design_search-outlined.png">
                    </div>
                </div>

                <div class="notifications">

                    <div class="alert-icon">
                        <img src="../../Icons/Frame 1.png" alt="">

                        <div class="notification-count">3</div>
                    </div>

                    <div class="message-icon">
                        <img src="../../Icons/ep_message.png" alt="">
                        <div class="message-count">3</div>
                    </div>

                    <div>
                        <img src="../../Profile Pictures/Ellipse 1.png" alt="">
                    </div>

                </div>
            </div>

            <ul class="header-navigation-anchor">
                <a href="../../HTML/End-User HTML/Home.php#section-one"><li class="header-navigation">Donation Stats</li></a>
                <a href="../../HTML/End-User HTML/Home.php#section-two"><li class="header-navigation">Blood Drive</li></a>
                <a href="../../HTML/End-User HTML/Home.php#section-three"><li class="header-navigation">About I.R.O.N</li></a>
                <a href="../../HTML/End-User HTML/Home.php#section-four"><li class="header-navigation">Photo Galary</li></a>
                <a href=""><li class="header-navigation">Where To Donate</li></a>
            </ul>

        </div>

    </header>

<!-------------------------------------------------------------------- THIS IS WHERE MY NAVIGATION WILL START ----------------------------------------------------------------->

    <nav class="navigation-container">

        <div class="navigation">

            <a href="Home.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img class="home-img" src="../../Icons/ant-design_home-outlined.png">
                    </div>
        
                    <div class="home-text">
                        <p>HOME</p>
                    </div>
                </div>

            </a>

            <a href="../includes/logout.inc.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/Group 1.png">
                    </div>
        
                    <div class="login-text">
                        <p>LOG-OUT</p>
                    </div>
                </div>

            </a>

            <a href="profile.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/healthicons_ui-user-profile.png">
                    </div>
        
                    <div class="profile-text">
                        <p>PROFILE</p>
                    </div>
                </div>

            </a>


            <a href="../Admin HTML/Login.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/Dashboard.png">
                    </div>
        
                    <div class="dashboard-text">
                        <p>ADMIN DASHBOARD</p>
                    </div>
                </div>

            </a>

        </div>

    </nav>

<!-------------------------------------------------------------------- THIS IS WHERE THE MAIN CONTENT START --------------------------------------------------------->

<section class="first-section">

    <div class="profile-picture">
        <img class="profile-picture" src="../../Profile Pictures/Ellipse 1.png" >
    </div>

    <div class="user-name">
    <?php
        if (isset($_SESSION["id"])) {
            echo "<h1>".$_SESSION["Fname"]." ".$_SESSION["Lname"]."</h1>";
        }
    ?>
        
    </div>
</section>

<section class="section-two">


    <form method="POST" name="userRegForm" class="registration-form" action="../includes/update.inc.php">

        <h1>PROFILE</h1>


    <div class="personal-details">
    <h3>Personal Details:</h3>

    <div class="single-input-container">
        <div class="id-number">
            <label for="idnumber">ID Number:</label>
            <input name="idNumber" id="idNumber" type="text" value="<?php  if (isset($_SESSION["id"])) {echo "".$_SESSION["IdNumber"]."";} ?>" maxlength="13" disabled>
            <small class="errorMessa"> <?php  if (isset($IdNumberErr)) echo $IdNumberErr; ?></small>
        </div>
    </div>
    
    <div class="names ">
        <div class="first-name ">
            <label for="fname">Date of Birth:</label><br>
            <input id="firstName" type="text" name="fname" value="<?php  if (isset($_SESSION["id"])) {echo "".$_SESSION["Day"]." ".$_SESSION["Month"]." ".$_SESSION["Year"]."";} ?>" disabled>
            <small class="errorMessa"> <?php  if (isset($EmptyInputs)) echo $EmptyInputs; ?></small>
        </div>

        <div class="last-name">
            <label for="lname">Gender:</label><br>
            <input id="lastName"  type="text" name="lname" value="<?php  if (isset($_SESSION["id"])) {echo "".$_SESSION["Gender"]."";} ?>" disabled>
            <small class="errorMessa"> <?php  if (isset($LnameErr)) echo $LnameErr; ?></small>
        </div>
    </div>
</div>

<div class="names ">
        <div class="first-name ">
            <label for="fname">Race:</label><br>
            <input id="firstName" type="text" name="fname" value="<?php  if (isset($_SESSION["id"])) {echo "".$_SESSION["Race"]."";} ?>" disabled>
            <small class="errorMessa"> <?php  if (isset($EmptyInputs)) echo $EmptyInputs; ?></small>
        </div>

        <div class="last-name">
            <label for="lname">Blood Type:</label><br>
            <input id="lastName"  type="text" name="lname" value="<?php  if (isset($_SESSION["id"])) {echo "".$_SESSION["BloodType"]."";} ?>" disabled>
            <small class="errorMessa"> <?php  if (isset($LnameErr)) echo $LnameErr; ?></small>
        </div>
    </div>

<div class="address">
    <div>
        <h3>Address:</h3>
    </div>

    <div class="single-input-container">
        <div class="street">
            <label for="street">Street Adress</label><br>
            <input id="streetAdd" type="text" name="street" value="<?php  if (isset($_SESSION["id"])) {echo "".$_SESSION["Street"]."";} ?>">
            <small class="errorMessa"> <?php  if (isset($StreetErr)) echo $StreetErr; ?></small>
        </div>
    </div>
</div>

<div class="city">

    <div class="city-selection">
        <label for="town">Town:</label><br>
        <input id="city" type="text" name="town" value="<?php  if (isset($_SESSION["id"])) {echo "".$_SESSION["Town"]."";} ?>">
        <small class="errorMessa"> <?php  if (isset($TownErr)) echo $TownErr; ?></small>
    </div>

    <div class="city-selection">
        <label for="city">City:</label><br>
        <input id="town" type="text" name="city" value="<?php  if (isset($_SESSION["id"])) {echo "".$_SESSION["City"]."";} ?>">
        <small class="errorMessa"> <?php  if (isset($CityErr)) echo $CityErr; ?></small>
    </div>

    <div class="city-selection">
        <label for="PostalCode">Postal code:</label><br>
        <input id="postalCode" type="text" name="PostalCode" value="<?php  if (isset($_SESSION["id"])) {echo "".$_SESSION["PostalCode"]."";} ?>">
        <small class="errorMessa"> <?php  if (isset($PostalCodeErr)) echo $PostalCodeErr; ?></small>
    </div>
</div>

<div class="login-details ">
    <div>
        <h3>Login Details:</h3>
    </div>
</div>

<div class="email">

    <div class="email-selection">
        <label for="phone">Phone:</label><br>
        <input id="cEmail" type="text" name="phone" value="<?php  if (isset($_SESSION["PhoneNumber"])) {echo "".$_SESSION["PhoneNumber"]."";} ?>">
        <small class="errorMessa"> <?php  if (isset($CEmailErr)) echo $CEmailErr; ?></small>
    </div>

    <div class="email-selection">
        <label for="email">Email:</label><br>
        <input id="email" type="text" name="email" value="<?php  if (isset($_SESSION["id"])) {echo "".$_SESSION["Email"]."";} ?>">
        <small class="errorMessa"> <?php  if (isset($EmailErr)) echo $EmailErr; ?></small>
    </div>


</div>

<div class="email">

    <div class="email-selection">
        <label for="password">Password:</label><br>
        <div class="toggle">
            <input id="password" type="password" name="password" value="<?php  if (isset($_SESSION["Password"])) {echo "".$_SESSION["CPassword"]."";} ?>"  onkeyup="checkPassword(this.value)">
            <small class="errorMessa"> <?php  if (isset($PasswordErr)) echo $PasswordErr; ?></small>
            <span id="toggleBtn"></span>
        </div id="passwordvalidation">
    </div>

    <div class="email-selection">
        <label for="email">Confirm Password:</label><br>
        <input id="cPassword" type="password" name="cPassword" placeholder="Re-enter your Password">
        <small class="errorMessa"> <?php  if (isset($CPasswordErr)) echo $CPasswordErr; ?></small>
    </div>
</div>

<div class="submit">
    <button id="submit" type="submit" name="update">UPDATE</button>
</div>

</form>

</section>

<footer class="footer">

    <div class="footer-child-one">

        <div class="where-to-donate">
            <div>
                <h5>WHERE TO DONATE</h5>
            </div>

            <div>
                <ul>
                    <li>Donor Centre</li>
                    <li>Plasma & Platelets</li>
                    <li>Convalescent Plasma donors</li>
                    <li>Blood Drives</li>

                </ul>
            </div>

        </div>
        
        <div class="donors">
            <div>
                <h5>DONORS</h5>
            </div>

            <div>
                <ul>
                    <li>Who Can Donate?</li>
                    <li>Why Donate Blood?</li>
                    <li>Defferals</li>
                    <li>Donor Partners</li>
                    <li>Donors Iron & Ferritin</li>
                    <li>FAQs</li>
                    <li>Can I Save 3 Lives Today</li>

                </ul>
            </div>

        </div>
        <div class="about-blood">
            <div>
                <h5>ABOUT BLOOD</h5>
            </div>

            <div>
                <ul>
                    <li>Blood Types</li>
                    <li>Types of Donations</li>
                </ul>
            </div>
        </div>
        <div class="services">
            <div>
                <h5>SERVICES</h5>
            </div>

            <div>
                <ul>
                    <li>Blood Products</li>
                    <li>Clinical Service</li>
                    <li>Proficiency Testing(EQA)</li>
                    <li>Product Price List</li>
                    <li>Specialised Services</li>
                    <li>Customer Invoice Portal</li>
                    <li>User Guides - Cust Inv Portal</li>
                    <li>HC Worker - Learning Portal</li>
                </ul>
            </div>
        </div>

        <div class="news">
            <div>
                <h5>NEWS</h5>
            </div>

            <div>
                <ul>
                    <li>News</li>
                    <li>Media Release</li>
                    <li>Campaigns</li>
                    <li>Events</li>
                    <li>Gaz'lam</li>

                </ul>
            </div>

        </div>
        <div class="subscribe">
            <div>
                <P class="to-our-news">Subscribe To Our News:</P>
            </div>

            <div>
                <input class="enter-your-email" type="text" placeholder="Enter Your Email"><br>
                <button Class="subscribe-button">Subscribe</button>


            </div>
            <p class="terms-of-use">By Subscribing you are confirming<br> that you have read and accept our<br> <em>Terms of Use</em></p>
        </div>
    </div>

    <div class="footer-child-two">

        <div class="social-donors-rights">
            <div class="footer-logo">
                <h1>SOCIAL DONORS</h1>
            </div>

            <div class="copy-right">
                <p>Social Donors 2011-2021</p>
            </div>

            <div class="terms-n-cond">
                <p>terms & Conditions</p>
            </div>

            <div class="privacy">
                <p>Privacy</p>
            </div>

            <div class="language">
                <p>US English</p>
            </div>
        </div>



        <div class="socials">
            <div>
                <img src="../../Icons/Facebook.png">
            </div>
            <div>
                <img src="../../Icons/Twitter.png">
            </div>
            <div>
                <img src="../../Icons/Linkedin.png">
            </div>
        </div>

    </div>

</footer>

</main>

<script src="../../JavaScript/slideshow.js"></script>
<script src="../../JavaScript/validation.js"></script>
    

</body>
</html>
<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"]== "emptyinputs"){
            echo '<script language="javascript">';
            echo 'alert("Please fill all fields")';
            echo '</script>';
            exit();
        }else if ($_GET["error"]== "none"){
            echo '<script language="javascript">';
            echo 'alert("Succsessfully Updated")';
            echo '</script>';
            exit();
        }
    }  