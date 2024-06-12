<?php
// include('./routes/routers.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/navigation.css"/>
    <script>
     
        function setActiveNavLink(id) {
    
            const navlinks = document.querySelectorAll('.navlinks');
            navlinks.forEach(link => link.classList.remove('active'));


            document.getElementById(id).classList.add('active');

            localStorage.setItem('activeNavLink', id);
        }

        function loadActiveNavLink() {
            const activeNavLink = localStorage.getItem('activeNavLink');
            if (activeNavLink) {
                document.getElementById(activeNavLink).classList.add('active');
            } else {
               
                document.getElementById('active-events').classList.add('active');
            }
        }

        window.onload = loadActiveNavLink;

        function MenuAdd() {
            window.location.href = 'MenuAdd.php';
        }

        function HomePage() {
            window.location.href = 'index.php';
        }

        function MenuView() {
            window.location.href = 'MenuDisplay.php';
        }

        function MenuUpdate() {
            window.location.href = 'MenuUpdateView.php';
        }

        function Logout() {
            window.location.href = 'logout.php';
        }
    </script>

<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .parents{
            background-color: #C4A27A;
            border: #221E1F;
        }
        .logo img {
            width: 250px;
            height: 100px;
            margin-top: -50px;
        }

        .navbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-color: #333;
        }
        .nav_title p {
            color: #ffffff;
            font-size: medium;
            font-weight: 600;
        }

        .navlinks {
            display: flex;
            align-items: center;
            padding: 1rem;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navlinks .nav_icon img {
            transition: opacity 0.3s ease;
            margin-right: 0.5rem;
        }

        .navlinks.active .nav_icon img {
            filter: invert(100%);
            opacity: 100%;
        }

        .navlinks.active {
            color: #ffffff;
            border-radius: 1rem;
            background-color: #221E1F;
        }

        .navlinks a {
            color: #000;
            text-decoration: none;
        }

        .navlinks.active a {
            color: #ffffff; 
        }
        .logout-parent{
            margin-top: -50px;
        }
    </style>
</head>
<body>

<div class="parents">
    <div class="logo">
       <img src='img/Black and White Chef Food Logo.png' alt=''/>
    </div>
  <div class="customize">
            <div class="nav_icon">
                <img src="img/mage_dashboard.png"/>
            </div>
            <div class="nav_title">
                <p>Dashboard</p>
            </div>
        </div>
    <div class="navlinks" id="active-events">

    
        <div class="nav_icon">
            <img src="img/homeicon.png"/>
        </div>
        <div class="nav_title">
            <a href="javascript:void(0)" onclick="HomePage(); setActiveNavLink('active-events')">Home Page</a>
        </div>
    </div>

    <div class="navlinks" id="cancelled-events">
        <div class="nav_icon">
            <img src="img/view.png"/>
        </div>
        <div class="nav_title">
            <a href="javascript:void(0)" onclick="MenuView(); setActiveNavLink('cancelled-events')">View Menu</a>
        </div>
    </div>

    <div class="menu-custom">
        <div class="customize">
            <div class="nav_icon">
                <img src="img/fluent_food-32-regular.png"/>
            </div>
            <div class="nav_title">
                <p>Customize Menu</p>
            </div>
        </div>

        <div class="navlinks" id="add-event">
            <div class="nav_icon">
                <img src="img/basil_add-outline.png"/>
            </div>
            <div class="nav_title">
            <a href="javascript:void(0)" onclick="MenuAdd(); setActiveNavLink('add-event');">Add Menu</a>
            </div>
        </div>

        <div class="navlinks" id="update-event">
            <div class="nav_icon">
                <img src="img/clarity_update-line.png"/>
            </div>
            <div class="nav_title">
                <a href="javascript:void(0)" onclick="MenuUpdate(); setActiveNavLink('update-event')">Update & Delete Menu</a>
            </div>
        </div>
    </div>

    <div class="logout-parent">


        <div class="logout" onclick="Logout()">
            <div class="logout_text">
                <a href="javascript:void(0)" class="logoutdiv">Logout</a>
            </div>
            <div class="logout_icon">
                <img src="../img/Vector.png" alt="">
            </div>
        </div>
    </div>
</div>

</body>
</html>
