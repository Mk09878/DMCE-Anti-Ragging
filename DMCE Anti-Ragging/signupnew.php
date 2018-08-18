<html>
<head>
<script>
function bluur()
{
	
	var p=document.getElementById('p').value;
	var cp=document.getElementById('cp').value;
	if(p!=cp)
	{
		alert("Please confirm password again");
		
		
}
else if(p==cp)
{
	document.getElementById('btn').disabled=false;
}
}

</script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<title>Registration Page</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
/* Full-width input fields */

input[type=text], input[type=password] {
    width: 100%;
    padding: 8px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid 
    box-sizing: border-box;
    border-radius: 5px;
}
    input[type=date]{
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
  color: black
  background-color: transparent;
  border: none;
  border-radius: 15px;
  
}

.button:hover {background-color: #4d91bc}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px ;
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
        width: 50%;
        float: left;
        border-radius: 10px;
    }
    
    .jumbotron-2{
        height: auto;
        width: 30%;
        float:right;
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
  background-color: #c9b1f5;
  color: black;
    border-radius: 5PX;
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
    .comp{
        align-self :center;
    }
     .t1{
         align-content: center;
    }
    .comp{
        align-self :center;
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

    
</head>
    <a href="Homenew.html"> <div class="image">
    <img src="img/2.png">
        </div></a>
    
    
<body  background="Al.jpg">
    <br><br>
    <div class="topnav" id="myTopnav">
  <a href="Homenew.php">Home</a>
  <a href="Alogin.php">Adminstrator Login</a>

    <a href="Usefullink.php">Useful Links</a>
  <a href="Aboutus.php">About</a>
  
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
    

<div class="comp">
        <form action="test.php" method="post">
            <fieldset >
                <h1 align="center"><legend style="font-size:36px;">Registration form</legend></h1>
                <table style="width:100%">
 <table align="center" id="t01">
  <tr>
      <td>Name:<input type="text" placeholder="First Name" name="fname"> &emsp;&emsp;&nbsp;</td>
    <td><input type="text" placeholder="Last Name" name="lname"></td>
    
  </tr>
  <tr>
    <td>Email:<input type="text" placeholder="Enter Email" name="mail"></td> &emsp;&emsp;&nbsp;
    <td>Mobile No.<input type="text" placeholder="Enter Mobile Number" name="mno"></td>
    
  </tr>
  <tr>
    <td>Password:<input type="password" placeholder="Enter Password" name="pswd" id="p"></td> &emsp;&emsp;&nbsp;
    <td>Confirm Password:<input type="password" placeholder="Confirm Password" id="cp" onblur="bluur()"></td>
    
   
  </tr>
     <tr>
     <td>
         <label class="Mobno."><b>D.O.B</b></label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="date" placeholder="Day" name="dob" required> 
                
         </td>
     </tr>
     
</table>
                        <br>&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; &nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; &nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; &nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; 
    
    <button class="button">Reset</button>
              <button background-color="#f56464" class="button" id="btn" disabled=true>Signup</button>
   
    </fieldset>
  </div>
</form>
    <br><br><br><br><br><br><br><br>
    <div class="foot">
        
    <footer align="center" background="Al.jpg">
        
        <p><b><u>National Anti Ragging Help Line (UGC Crisis Hotline)</u></b></p>
        <p><b><u>24x7 Toll Free Number* 1800-180-5522</u></b></p> 
        <p><b><u>(helpline@antiragging.in)</u></b></p> </footer>
           
</div>

</body>
</html>
