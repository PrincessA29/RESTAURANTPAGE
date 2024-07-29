<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head><title>Let's Steak a Break</title></head>
<style> 
@import url('https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@400;500;700&display=swap');

body{
    background-image: url("images/steakbg04.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    color: #201f1f;
    overflow-x: hidden;
    overflow-y: hidden;
    font-family: 'Alegreya Sans SC';
}

.nav{
    margin-right: 21px;
    font-family: 'Alegreya Sans SC';
}

.nav ul{
    text-align: center;
    align-items: center;
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
}

.nav li{
    margin-left: 10px;
    display: flex;
    padding: auto;
    text-align: center;
    transition: .05s;
    margin-right: 10px;
    
}

.nav button{
    font-size: 20px;
    border-radius: 25px;
    padding: 5px 35px;    
    transition: .08s;
    background-color: #201f1f;
    font-family: 'Alegreya Sans SC';
}

.nav button:hover{
    font-size: 20px;
    border-radius: 25px;
    transform: scale(1.1);
    cursor: pointer;
    background-color: #c30010;
}

.nav a{
    text-decoration: none;
    color: white;
}

.desc2{ 
    width:462px;
    border-style:solid;
    border-color: transparent;
    font-family: 'Alegreya Sans SC';
    margin-top: 120px;
    margin-left: 50px; 
}

.desc h1{
    text-align: center;
    letter-spacing: 1px;
    font-size: 55px;
    margin: 0;
}

.desc h2{
    text-align: center;
    font-size: 25px;
    margin-top: -10px;
    margin-bottom: 10px;
}

.desc p{
    text-align: justify;
    font-size: 18px;
    margin-bottom: 5px;
}

.desc a{
    text-decoration: none;
    color: white;
}

.desc button{ 
    margin-top: 10px;
    background-color: #201f1f;
    padding: 10px 25px;
    border-radius: 25px;
    transition: .05s;
    font-size: 20px;
    font-family: 'Alegreya Sans SC';
    color: white;
}

.desc button:hover{
    font-size: 20px;
    border-radius: 25px;
    transform: scale(1.1);
    cursor: pointer;
    background-color: #c30010;
}

.logo {
    width: 140px;
    height: 140px;
    margin-left: 27px;
    float: left;
}

.food {
    height: 700px;
    width: auto;
    position: absolute; right: -90px; top: 51px;
}

.sc1 {
    height: 36px;
    width: 37px;
    position: absolute; left: 60px; top: 501px;
}

.sc2 {
    height: 47px;
    width: 46px;
    position: absolute; left: 101px; top: 496px;
}

.sc3 {
    height: 75px;
    width: 74px;
    position: absolute; left: 132px; top: 471px;
}

.sc1:hover, .sc2:hover, .sc3:hover{
    transform: scale(1.1);
    filter: invert(14%) sepia(85%) saturate(6503%) hue-rotate(350deg) brightness(74%) contrast(109%);
}

</style>

<body>
    <a href="index1.php">
    <img src="images/steaklogo.png" class="logo" alt="logo">
    </a>   

    <img src="images/food.png" class="food" alt="food">

    <a href="https://www.facebook.com/profile.php?id=100092701120693" target="_blank">
    <img src="images/sc1.png" class="sc1" alt="sc1">
    </a>

    <a href="https://twitter.com/Letssteakbreak?fbclid=IwAR2zMv7KpA1pvvnbGf3bPO4MrlmnnZ1S0JoQUL5iiDDdg4Y7gWUipgeWMDE" target="_blank">
    <img src="images/sc2.png" class="sc2" alt="sc2">
    </a>

    <a href="https://www.instagram.com/letssteakabreak/?fbclid=IwAR2AwUr_Es8jffCAJqW-cSXqKxdA_hy5ao33L-JjvZWcsKh7eQDnb1bFjH4" target="_blank">
    <img src="images/sc3.png" class="sc3" alt="sc3">
    </a>

    <div class="nav">
    <ul>
    <li><button><a href="menu1.php"><b>Menu</b></a></button></li>
    <li><button><a href="login.php"><b>Feedback</b></a></button></li>
    <li><button><a href="login.php"><b>Login/Signup</b></a></button></li>
    </ul>
    </div>

    <div class="desc2">
        <div class="desc">
        <h1>Let's Steak a Break</h1>
        <h2>"Where There is Food, There is Comfort"</h2>
        <p>Our restaurant offers fine dining for a small price, give
        them satisfaction and another way of bonding to their loved
        ones without being worried if they will be able to afford the
        menu that is prepared for our lovely and hardworking people. </p>
        <a href="login.php"><button><b>Reserve Now!</b></button></a>
        </div>
    </div>

</body>

</html>