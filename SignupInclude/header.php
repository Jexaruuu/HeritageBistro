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
   *{

margin: 0%;
padding: 0%;
box-sizing: border-box;
font-family: 'Poppins';
}

.login-container{

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

.form-wrapper-signup{

padding: 5%;
width: 50%;
height: 100vh;
display: flex;
align-items: center;
justify-content: center;

}

.form-login h{


font-size: 25px;
}

.create-account{

margin-top: 5%;
font-size: 15px;

}

#id { 

filter: grayscale(100%);

}

.create-account a{

text-decoration: none;
list-style: none;
color: #9E0505;
font-weight: 500;
}
#username, #password ,#first_name ,#last_name{
width: 300px;
height: 50px;
padding: 3%;
border-radius: 4px;
margin-top: 1%;

border: 1px solid rgba(46, 46, 46, 0.2); /* Adding border with low opacity */
}


.content-signup{
display: flex;
align-items: center;
justify-content: center;
margin-top: 5;
padding: 5%;
width: 300%;
height: 700px;
background-color: #ffffff;
border-radius: 10px;
}

.btn{
margin-top: 5%;
color: #ffffff;
background-color: #9E0505;
  width: 300px;
height: 50px;
 border-radius: 4px;
 border: none;
 font-size: 20px;
 text-transform: uppercase;
 cursor: pointer;
}

.form-outline{

margin-top: 5%;
margin-right: 5%;
}

.last-first{


display: flex;

}
select{
width: 200px;
height: 30px;
border-radius: 5px;
padding: 1%;

}

</style>


</style>
<body>
    <div class="row w-100" id="mainBody">
<?php
?>
