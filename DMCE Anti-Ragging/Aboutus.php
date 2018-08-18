<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    input[type=text], input[type=password] {
        border-radius:5px;
        
    } 
    
    
body {margin:0;
     background-color: #6294bf;
    margin:0;
    padding:10px ;
    font-family: sans-serif;
}
  .button {
  display: inline-block;
  padding: 5px 5px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4c85af;
  border: none;
  border-radius: 15px;
  
}
    
    .btn{
        color: black;
    }

.button:hover {background-color: #4d91bc}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}  
    

.topnav {
  overflow: hidden;
  
}
    .foot{
        font-size: 25px;
        color: #000000;
    } 
    .jumbotron-1{
        height: auto;
        width: 100%;
        float: left;
        border-radius: 10px;
    }
    
    .jumbotron{
        height: auto;
        width: auto;
        
        border-radius: 10px;
    }
   
    
.wrap{
    width: 250px;
    margin: 50px auto;
    background-image: #7d86ea;
    float:right;
    padding: 0px 50px 30px;
    margin-right: 100px;
       
}
.intro{
    width: 400px;
        margin: 50px auto;
        float: left;
    padding: 10px
}
.image{
    float: left
}


.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
    .container1{
        height: 50px;
    }

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>
   <link rel="stylesheet" href="feed_scroll.css" type="text/css"> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    
    <title>About us</title>
</head>

<div class="image">
    <img src="img/2.png">
       </div>
<body background="Al.jpg" >
    
<br><br>
<div class="topnav" id="myTopnav">
  <a href="Homenew.php">Home</a>
  <a href="Alogin.php">Adminstrator Login</a>
 
    <a href="Usefullink.php">Useful Links</a>
  
  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
    
    <h1 align="center"><legend style="font-size:36px;">About Us</legend></h1>
    

<div class="container">
    <div class="jumbotron">
        <div class="well">
    <b>Ragging has ruined countless innocent lives and careers. In order to eradicate it, Hon&rsquo;ble Supreme Court in Civil Appeal No. 887 of 2009, passed the judgement wherein guidelines were issued for setting up of a Central Crisis Hotline and Anti-Ragging database.&nbsp;</b>
           </div> <div class="well">
<b>In accordance with the orders, UGC (University Grants Commission), Govt. of India has developed this web portal.&nbsp;</b>

        </div>
        
   <button type="button" class="btn" data-toggle="collapse" data-target="#demo">Know More</button>
  <div id="demo" class="collapse">     
        <br>
        
<b>This portal will contain</b>
         <div class="well">
             <b> 1. Undertaking confirmed by each student and his/her parents or guardians, which will then be stored electronically and will contain the details of each student. <br> 2. Record of registered complaints received and the status of the action taken.</b>
             </div>
    
    
     <div class="well">
         <b>The aim of the portal is to eliminate ragging in all its forms from universities, deemed universities and other higher educational institutions in the country. This will be achieved by preventing its occurrence and punishing those who indulge in ragging, in accordance with the Supreme Court Regulations.</b>
             </div>
          <div class="well">
         <br>
              <b>Kindly view <a href="http://www.antiragging.in/site/Infopack.aspx" target="_blank">Information Pack </a> to know more details about ragging and its regulations.</b></div>
        </div></div>
    
<br><br><br>
<div class="foot">
        
    <footer align="center" background="Al.jpg">
        
        <p><b><u>National Anti Ragging Help Line (UGC Crisis Hotline)</u></b></p>
        <p><b><u>24x7 Toll Free Number* 1800-180-5522</u></b></p> 
        <p><b><u>(helpline@antiragging.in)</u></b></p> </footer>
           
</div>

      
    </div>
    
   

    

    
    
    
    
</body>
</html>
