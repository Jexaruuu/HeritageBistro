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
</head>
<style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins';
}

.login-container {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url('/HeritageBistro/img/Login&SignupBG.jpg');
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.logo img {
    display: flex;
    align-items: center;
    margin-left: 2vw; /* Adjusted to relative unit */
}

.form-wrapper {
    padding: 5%;
    width: 80%;
    max-width: 600px;
    height: auto; /* Adjusted to allow flexibility */
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.form-login h {
    font-size: 14px;
    color:#ffffff;
}

.create-account {
    margin-top: 5%;
    font-size: 1.5vw; /* Adjusted to relative unit */
    text-align: center; /* Centered text for responsiveness */
}

#id { 
    filter: grayscale(100%);
}

.create-account {
    color: #221E1F;
    font-size: 16px;
}

.create-account a {
    text-decoration: none;
    list-style: none;
    color: #ffffff;
    font-size: 16px;
}

.form-control {
    width: 80%;
    max-width: 300px;
    height: 50px;
    padding: 2.5%; /* Adjusted for padding */
    border-radius: 4px;
    margin-top: 1%;
    border: 1px solid rgba(46, 46, 46, 0.2);
}

.content {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 5%;
    padding: 5%;
    width: 75%;
    height: auto; 
    max-height: 700px;
    background-color: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(4px);
    border-radius: 10px;
    flex-direction: column;
}

.btn {
    margin-top: 7%;
    color: #ffffff;
    background-color: #221E1F;
    width: 80%;
    width: 300px;
    height: 40px;
    border-radius: 4px;
    border: none;
    font-size: 20px;
    text-transform: uppercase;
}

.form-outline {
    margin-top: 5%;
    color: #221E1F;
}
.form-outline input {
    width: 300px;
    height: 40px;
}

.last-first {
    display: flex;
    flex-direction: column; /* Adjusted to column for better stacking on small screens */
    width: 80%;
    max-width: 300px;
    gap: 1vw; /* Added gap for spacing */
}

</style>
<body>
    <div class="row w-100" id="mainBody">
<?php
?>
