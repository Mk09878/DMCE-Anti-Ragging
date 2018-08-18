<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    input[type=text], input[type=password] {
        color: black;
        border-radius:5px;
        
    } 
    
    .fa {
  padding: 25px;
  font-size: 30px;
  width: 600px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.9;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
    .carousel-control.left, .carousel-control.right {
   background-image:none !important;
   filter:none !important;
}
    
    .size{
        height: 500px;
    }
    
    .carousel-caption {
    top: 10;
    bottom: auto;
}
    .carousel .item {
  height: 350px;
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
  color: black;
  background-color: transparent;
  border: none;
  border-radius: 15px;
  
}

.button:hover {background-color: #fff;
   color: black;}

    .size{
        height: 400px;
    }
    

.topnav {
  overflow: hidden;
  
  
}
    .foot{
        font-size: 25px;
        color: #000000;
    } 
    .jumbotron{
        height: auto;
        width:auto%;
        float: left;
        border-radius: 10px;
      background-color: #accaf4;
        padding-left: 20px;
    }
    
    .jumbotron-2{
        height: auto;
        width: 25%;
        float:right;
        border-radius: 10px;
         background-color: #accaf4;
        padding-left: 20px;
        padding-top: 40px;
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
 
}


.topnav a {
  float: left;
  display: block;
  color:    #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
    .container1{
        height: 50px;
    }

.topnav a:hover {
  background-color: #4e8abe;
  color: black;
    border-radius: 15px;
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
    .well{
        float: left;
        width:100%;
        
    }
    .carousel-control {
  opacity: 0.5;
}

.carousel-control:hover {
  opacity: 0.5;
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
    .color{
        color: black;
    }
    .left carousel-control{
   background-image:none !important;
   filter:none !important;
}
    .right carousel-control{ 
 background-image:none !important;
   filter:none !important;
}
}
</style>
   <link rel="stylesheet" href="feed_scroll.css" type="text/css"> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="image">
    <img src="img/2.png">
       </div>
<body background="Al.jpg" >
    
<br><br>
<div class="topnav" id="myTopnav">
 
  <a href="Alogin.php">Adminstrator Login</a>

    <a href="Usefullink.php">Useful Links</a>
  <a href="Aboutus.php">About</a>
    <ul class="nav navbar-nav navbar-right">
      
  
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
    <div class="jumbotron">
        
        
        
        <legend style="font-size:56px;">Introduction</legend>
          <b>The aim of our website “DMCE Anti-Ragging” is to eliminate ragging from our college. This will be achieved by preventing its occurrence and punishing those who indulge in ragging. 
              Ragging has ruined countless innocent lives and careers. So, in order to eradicate it, Hon’ble Supreme Court in Civil Appeal No. 887 of 2009, passed the judgement where in guidelines was issued for setting up of central crisis hotline and anti-ragging database.</b>
    
        
    </div>
        
    <div class="jumbotron-2">
    <form action="fetch.php" method="post">
         <fieldset>
             <legend style="font-size:46px;">User Login</legend>
         <label for="user">Username</label>
     <input type="text" name="fname" placeholder="Enter Username">
    <br><br>
             <label for="pswd">Password</label>
    <input type="password" name="pswd" placeholder="Enter Password">
             <br><br>
            
             <button class="button">Login</button>
              <button class="button">Reset</button>
             <br>
            
             <br>
         <a href="signupnew.php">Register Here</a>
         </fieldset>
     </form>
    
    
    </div>
    <div class="well">
        <br>
        <h4>In accordance with the orders, UGC (University Grants Commission), Govt. of India has developed this web portal.&nbsp;</h4>
        <b><h4><a href="Aboutus.php">Click Here</a> to know about us.</h4></b></div>
    <div class="well">
    <b><h4>Follow Us on:</h4></b><br>
   <a href="https://www.facebook.com/antiragging.in/" class="fa fa-facebook"></a>
<a href="https://twitter.com/intent/user?screen_name=Antiragging2" class="fa fa-twitter"></a></div>
    
    <div class="well">
        <b><h4>Want to Give a Feedback  <a href="Feedback.php">Click Here</a></h4></b>
       
    </div>
    </div>
    
    
    <br>
    <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br>
    <div class="foot">
        
    <footer align="center" background="Al.jpg">
        
        <p><b><u>National Anti Ragging Help Line (UGC Crisis Hotline)</u></b></p>
        <p><b><u>24x7 Toll Free Number* 1800-180-5522</u></b></p> 
        <p><b><u>(helpline@antiragging.in)</u></b></p> </footer>
           
</div>
    
    </body>
    
</html>
        
        
        
        
        
        
        
        
        