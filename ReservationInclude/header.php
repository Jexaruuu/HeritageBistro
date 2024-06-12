<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.parent-reservation {
    width: 100%;
height: 205vh;
    background-color: #c4a27a;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.left-reservation, .right-reservation {
    width: 90%;
    margin: 2%;
}

.three-div {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 1%;
}

.image {
    flex: 1 1 300px;
    max-width: 330px;
    height: 250px;
    margin: 1%;
}

.image img {
    border-radius: 15px;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.discover {
    margin: 1%;
    text-align: center;
}

.discover h {
    font-size: 40px;
}
.reservation-header{
    width: 100%;
    text-align: center;
    margin-top: 70px;
}
.reservation-footer {
    width: 100%;
    text-align: center;
}

.reservation-footer-submit {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 3%;
}

.reservation-form {
    margin-top: 5%;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #221e1f;
    color: #ffffff;
    height: 480px;
    width: 800px;
    border-radius: 20px;
    margin-top: -690px;
    
}

.reservation-title {
    font-weight: 500;
    font-size: 24px;
    text-align: center;
    margin-top: 25px;
}

.reservation-input input {
    width: 90%;
    max-width: 300px;
    height: 40px;
    border-radius: 5px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    padding: 1%;
    margin-top: 1%;
}

.reservation-footer-submit {
    display: flex;
    justify-content: space-between; 
    align-items: center;
    width: 100%;
}

.submit_btn_reservation {
    width: 45%; 
    max-width: 300px;
    height: 50px;
    border-radius: 5rem;
    border: none;
    background-color: #bc560a;
    color: #ffffff;
    cursor: pointer;
    margin-top: 3%;
    
}

.submit_btn_reservation:hover {
    background-color: #f49d0c;
    transition: 0.3s;
}

.backbtn {
    width: 45%; 
    max-width: 300px;
    height: 50px;
    border-radius: 5rem;
    border: none;
    background-color: #bc560a;
    color: #ffffff;
    cursor: pointer;
    margin-top: 3%;

}
.backbtn:hover {
    background-color: #f49d0c;
    transition: 0.3s;
}

.reservation-header-img {
    display: flex;
    justify-content: center;
    margin-top: 2%;
}

.reservation-header-img img {
    height: 100px;
    width: auto;
    object-fit: contain;
    margin-top: 70px;
}

.two-div {
    width: 90%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 3%;
}

.gordon {
    flex: 1 1 45%;
    max-width: 40%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-left: 840px;
}
.details {
    flex: 1 1 45%;
    max-width: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-top: 300px;
    margin-left: 388px ;
}

.gordon img {
    width: 100%;
    margin-left: 200px;
    margin-top: -20px;
}

.details p {
    font-weight: 500;
}

.socials {
    display: flex;
    justify-content: center;
    gap: 1%;
    margin-top: 1%;
}

.tweet img {
    width: 30px;
    height: 30px;
    object-fit: contain;
}
</style>
