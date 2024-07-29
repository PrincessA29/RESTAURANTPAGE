<!DOCTYPE html>
<html>
<head>
  <title>Booking Information</title>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@400;500;700&display=swap');
*{

padding: 0;
margin: 0;
font-family: 'Alegreya Sans SC';
background-repeat: no-repeat;
}
    body {
      height: 100vh;
      margin: 0;
      background-image: url("bgko.png");
      font-family: 'Alegreya Sans SC';
    }

    .upper{
        height: 75px;
     border-radius: 0px;
        outline: 5px solid black;
        background-color: #7D0B0B;
       margin-bottom: 50px;
    }
    .upper img{
height:auto;
width:80px;

    }

    .title{
        display: center;
        text-align: center;
        color: white;
        margin-top: -5.5%;
    }
    .box {
      width: 800px;
      height: 450px;
      background-color: #F2D9B4;
      border-radius: 0px;
      outline: 13px solid #A62424;
      display: flex;
      justify-content: flex;
      align-items: center;    
      flex-direction: column;
      margin-left: 25%;
      margin-top: 100px;
    }

    .box-title{
        font-family: 'Alegreya Sans SC';
        color: #000000;
        margin-bottom: 20px;
        font-size: 39px;
        position: relative;
        font-weight: bold;
        margin-top: 15px;
    }

    .box-list {
      width: 700px;
      height: 400px;
      background-color: white;
      border-radius: 25px;
      justify-content: center;
      align-items: center;
      outline: 5px solid #A62424;
    }

    .box-info ul{
float: left;
list-style-type: none;  
margin-left: 3%;
margin-top: 3%;
    }

    .box-info li{
        font-family: 'Alegreya Sans SC';
        font-size: 20px;
        margin-top: 7%;
        margin-bottom: 14%;



    }
.button{
   margin-bottom: 20px;
   margin-left: 75%;
}

.button button{
padding: 10px 25px;
background-color: #A62424;
border-radius: 25px;
color: white;
border: solid 1px;
transition: .5s;
}
.button a{
text-decoration: none;
color: white;
}

.button button:hover{
padding: 10px 35px;
background-color:#D11313;
cursor:pointer;
}
  </style>
</head>
<body>
    <div class="upper">
        <a href="index2.php"> <img  src="Logo.png"> </a>
        <div class="title">
        <h1> SCHEDULE </h1> 
        <h2> "PLAN AHEAD AND SAVE THE DATE WITH THE FAMILY" </h2>
    </div>
        
</div>
<div class="box">
    <h2 class="box-title">LIST OF INFORMATION</h2>
    <div class="box-list">
<div class="box-info"> 
<ul> 
    <li> USERNAME: </li> 
    <li> DATE: </li> 
    <li> TIME: </li> 
    <li> NO. OF PEOPLE: </li> 
    <li> ORDERS: </li> 
    <li> TOTAL PRICE: </li> 
</ul>

</div>
    </div>
    <div class="button">  
        <br>  <br> 
    <button> <a href="index2.php"> CONFIRM </a> </button> </div>
    

</div>
</body>
</html>