<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<title>Feedback Form</title>
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
    border: 1px solid #f79595;
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
  color: black;
  background-color: transparent;
  border: none;
  border-radius: 15px;
  
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
    .t1{alig}
    
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
     <div class="image">
    <img src="img/2.png">
       </div>
    
    
<body  background="Al.jpg">
    <br><br>
    <div class="topnav" id="myTopnav">
  <a href="Homenew.php">Home</a>
  <a href="admodal.php">Adminstrator Login</a>
  
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
        <form action="submit">
            <fieldset >
                <h1 align="center"><legend style="font-size:36px;">Feedback form</legend></h1>
                <table style="width:100%">
 <table align="center" id="t01">
  <tr>
    <td>Name:<input type="text" placeholder="Enter Name"></td> &emsp;&emsp;&nbsp;
    <td>Address:<input type="text" placeholder="Enter Address"></td>
    
  </tr>
  <tr>
    <td>Email:<input type="text" placeholder="Enter Email"></td> &emsp;&emsp;&nbsp;
    <td>Mobile No.<input type="text" placeholder="Enter Mobile Number"></td>
    
  </tr>
  <tr>
    <td>State:<input type="text" placeholder="Enter State"></td> &emsp;&emsp;&nbsp;
    <td>Pincode:<input type="text" placeholder="Enter Pincode"></td>
    
   
  </tr>
     
</table>
                    <table class="t1">
    &emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
     <Label>Feedback:</Label><br>
        &emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;                
     <textarea  rows="4" cols="50"></textarea>  
                    </table> &emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; &nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; &nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; &nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; 
                     <button background-color="#f56464" class="button">Submit</button>