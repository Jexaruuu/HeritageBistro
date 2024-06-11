<?php
include './classes/Database.php';
session_start();
$DB = new Database();
$DB->connectDB();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Heritage Bistro Restaurant Management System</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/ForLogin.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="css/addmenu.css">
    <link rel="stylesheet" type="text/css" href="css/MenuUpdateView.css">
    
   
     <link rel="stylesheet" type="text/css" href= "css/OrderAdd.css">
    <link rel="stylesheet" type="text/css" href="css/index-parent.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/reservations.css">
    
   
</head>
<body>
    <div class="row w-100" id="mainBody">
<?php
?>
