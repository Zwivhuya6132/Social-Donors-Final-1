<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../Stylesheets/General CSS/General CSS.css">
    <link rel="stylesheet" href="../../Stylesheets/index head.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/Navigation.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/footer.css">
    <link rel="stylesheet" href="../../Stylesheets/End-User CSS/Registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Social Donors - Registration</title>

    <style>
        .errorMessa{
        margin:  0;
        display: block;
        color:red;
        border-radius: 5px ;
        font-size: 14px;
        }

        .canvaDrops{
            position: relative;
            width: 125px;
            margin: auto;
        }

        .profileCon{
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        #errorContainer{
        width: 35%;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: larg;
        font-weight: 700;
        border-radius: 25px;
        background-color: red;
        margin: auto;
        }

        /* Style The Dropdown Button */
        .dropbtn {
        background-color: red;
        color: white;
        height: 30px;
        width: 80px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        display: none;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
        position: absolute;
        bottom: -16px;
        right: 25px;

        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
        display: none;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        #photo{
            width: 120px;
            height: 120px;
            border-radius: 50px;
        }

        /* Links inside the dropdown */
        .dropdown-content label{
        color: black;
        padding: 12px 0px;
        text-decoration: none;
        display: block;
        background-color: #f9f9f9;
        width: 150px;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content label:hover {background-color: #f1f1f1}

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
        display: inline;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
        background-color: red;
        }

        #file{
            display: none;
        }

        #uploadBtn,
        #videoBtn{
            text-align: center;
            color: wheat;
            font-family: sans-serif;
            font-size: 15px;
            cursor: pointer;

        } 

        #webcam{
            /* margin: auto; */
            width: 120px;
            height: 120px;
            border-radius: 150%;
            position: absolute;
            -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%);
            -webkit-transform: rotate(0.000001deg); 
            -webkit-border-radius: 100%; 
            -moz-border-radius: 100%;
            /* bottom: -170px; */
        }

        #snap{
            padding: 10px;
            background-color: red;
            color: white;
            text-decoration: none;
            display: block;
            width: 50px;
            border-radius: 15px;
            text-align: center;
            margin: auto;
            /* display: none; */
        }

        .zwiv{
        border-radius: 100%;

        margin: auto;
        /* display: none; */

        }

        /* #canvas{
        left: 34.95%;
        bottom: 5px;
        width:250px; 
        height:250px;
        border-radius: 50%;
        } */

        /* #Profile-pic-container{
        width: 250px;
        height: 250px;
        border-radius: 50%;
        border: 2px solid #717171;
        margin: auto;
        position: relative;
        } */

    </style>
    

</head>

<body>

    <header class="header">
            
        <a href="../../index.php">
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

                <div class="log-in">
                            
                    <h4>Become a Donor</h4>
                    <p>0800 119 031</p>
                    <img src="../../Icons/download (1).png">

                </div>

            </div>

            <ul class="header-navigation-anchor">
                <a href="../../index.php#section-one"><li class="header-navigation">Donation Stats</li></a>
                <a href="../../index.php#section-two"><li class="header-navigation">Blood Drive</li></a>
                <a href="../../index.php#section-three"><li class="header-navigation">About I.R.O.N</li></a>
                <a href="../../index.php#section-four"><li class="header-navigation">Photo Galary</li></a>
                <a href=""><li class="header-navigation">Where To Donate</li></a>
            </ul>

        </div>

    </header>

<!-------------------------------------------------------------------- THIS IS WHERE MY NAVIGATION WILL START ----------------------------------------------------------------->

    <nav class="navigation-container">

        <div class="navigation">

            <a href="../../index.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img class="home-img" src="../../Icons/ant-design_home-outlined.png">
                    </div>
        
                    <div class="home-text">
                        <p>HOME</p>
                    </div>
                </div>

            </a>

            <a href="Registration.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/Registration.png">
                    </div>
        
                    <div class="registration-text">
                        <p>REGISTRATION</p>
                    </div>
                </div>

            </a>

            <a href="Login.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/Log-in.png">
                    </div>
        
                    <div class="login-text">
                        <p>LOG-IN</p>
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