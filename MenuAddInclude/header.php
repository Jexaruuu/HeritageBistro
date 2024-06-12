
<style>

.index-parent {
    width: 100%;
    height: 132vh;
    background-image: url('/HeritageBistro/img/Login&SignupBG.jpg');
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    display: flex;
}

.welcome-header{
    
    padding: 3%;
   display: flex;
   justify-content: flex-start;
   height: 130px;
   width: 102.5%;
   background-color: #221E1F;
}
.welcome {
    margin-left: 20px;
}
.welcome p{

   opacity: 70%;
   font-weight: 600;
   margin-left: 3px;
   color: #ffffff;
}

.welcome  h{

   font-size:xx-large;
   font-weight: 600;
   color: #ffffff;
}
.parent_container {
    display: flex;
    flex-wrap: wrap;
}

.left-container, .right-container {
    flex: 1;
    min-width: 300px;
    padding: 10px;
}

#welcome-header {
    display: flex;
    justify-content: flex-start;
    padding: 3%;
    height: 100px;
}

.welcome p {
    opacity: 70%;
}

.welcome-header h {
    font-size: 25px;
}

.category-container {
    display: flex;
    flex-wrap: wrap;
}

.left-category, .right-category {
    flex: 1;
    min-width: 300px;
    margin-top: 5%;
    margin-left: 5%;
}

.menu-form {
    margin-left: 20%;
    padding: 3%;
    background-color: rgba(210, 180, 140, 0.8);
    backdrop-filter: blur(4px);
    width: 65%;
    border: 3px solid #FFFFFF;
    border-radius: 10px;
}

.addmenu {
    margin-bottom: 3%;
    border-bottom: 1px solid rgba(0, 0, 0, 0.55);
}

.addmenu h1 {
    font-size: 25px;
    font-weight: 600;
    color:#221E1F;
}

.addmenu p {
    opacity: 85%;
}

#menu_name, #price, #menu_image, #description {
    border: 1px solid rgba(46, 46, 46, 0.2);
    border-radius: 5px;
    margin-top: 10px;
    margin-bottom: 10px;
    padding: 15px;
    flex: 1;
    min-width: 100px;
}

#menu_name {
    height: 50px;
    width: auto;
}

#price {
    height: auto;
    width: 100px;
}

#menu_image {
    width: 150px;
    height: auto;
}

#description {
    width: 100%;
    height: 90px;
}

#price-image {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 3%;
}

#price-image .parent-flex {
    flex: 1;
}

#description-parent {
    margin-top: 2%;
}

.addmenubtn {
    width: 100%;
    max-width: 250px;
    height: 50px;
    color: #ffffff;
    cursor: pointer;
    text-transform: uppercase;
    border: none;
    margin-top: 5%;
    border-radius: 10px;
    background-color: #221E1F;
}
.addmenubtn:hover{
    background-color: #4b4144;
    transition: 0.3s;
}

</style>
