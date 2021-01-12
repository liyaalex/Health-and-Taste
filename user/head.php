<?php session_start();
$user=$_SESSION["username"];
include("../db/dbConnection.php");
	$obj=new connection();


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" media="screen and (max-width: 768px)" href="../css/mobile-style.css">
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}

            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              padding-top: 100px; /* Location of the box */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
              background-color: #fefefe;
              margin: auto;
              padding: 20px;
              border: 1px solid #888;
              width: 80%;
            }

            /* The Close Button */
            .close {
              color: #aaaaaa;
              float: right;
              font-size: 28px;
              font-weight: bold;
            }

            .close:hover,
            .close:focus {
              color: #000;
              text-decoration: none;
              cursor: pointer;
            }
            .dropbtn {
            font-size: 16px;
            border: none;
            background-color: white;
          }
           .dropbtn:hover
           {
               background-color: #FBDED7;
           }
          .dropdown {
            position: relative;
            display: inline-block;
          }

          .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            z-index: 1;
          }

          .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
          }

          .dropdown:hover .dropdown-content {display: block;}
            
          .reg-input
          {
              margin-top: 20px;
            border:none;  
            border-bottom: 2px solid rgb(241, 141, 141);
            width: 377px;
            color: crimson;
            background-color:rgb(212, 204, 204);
            font-weight: bold;
            font-size: 13px;
          }
          .reg-input-select
          {
            margin-top: 20px;
            padding: 3px;
            border-bottom: 2px solid rgb(241, 141, 141);
            color: crimson;
            background-color:rgb(212, 204, 204);
            font-weight: bold;
            font-size: 13px;
          }
        </style>
    </head>
    <body>
         <div id="header">
        <div id="header-info-part">
            <ul id="info-list">
                <li class="info-list-li"><a href="#">+880 4664 216</a></li>
                <li class="info-list-li"><a href="#">Mon - Sat 10:00 - 7:00</a></li>
            </ul>
        </div>
        <div id="header-nav-bar">
            <div id="header-logo-nav">
                <div id="logo">
                    <img src="../image/nutrition.png" width="50px" height="50px">
                    <h1>Health&Taste</h1>
                </div>
                <nav>
                    <ul id="navigation">
                        <li class="nav-li"><a  href="userhome.php">Home</a></li>
                        <li class="nav-li"><a href="../recipes.php">Recipes</a></li>
                        <li class="nav-li"><a href="../diet.php">Diet</a></li>
                        <li class="nav-li"><a href="myProfile.php">My Profile</a></li>
                       
                        <li class="nav-li"><a href="../logout.php">Logout</a></li>
                       <!-- <?#php if (!isset($_SESSION["username"])) { ?>
                        <li class="nav-li"><a href="login.php">Login</a></li>
                        <!--<?php #} else { ?>
                        <li class="nav-li">
                            <div class="dropdown">
                                <button class="dropbtn"><?php #echo $_SESSION['username'];?></button>
                                    <div class="dropdown-content">
                                      <a href="..logout.php">Log Out</a>
                                      <!--<a href="changePassword.php">Change Password</a>-->
                                    </div>
                            </div>
                        </li>   
                        <!--<?php #} ?>-->
                    </ul>
                </nav>
            </div>
        </div>
    </div>