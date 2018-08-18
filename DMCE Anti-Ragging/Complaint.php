<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<title>Complaint Page</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
/* Full-width input fields */

input[type=text], input[type=password] {
    width: 50%;
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
  color: #fff;
  background-color: #4c85af;
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
  <a href="modal with carousel.php">Home</a>
  <a href="Homenew.php">Signout</a>
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
        <form action="test1.php" method="post">
            <fieldset >
    <legend style="font-size:36px;">Complaint Form</legend>
<label><b>Complainant Name</b></label>
    <input type="text" placeholder="Enter Complainant Name" name="cname">
    <br>
<label><b>Victim Name</b></label>&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Victim Name" name="vname">
    <br>
<label><b>Offendent Name</b></label>&emsp;&nbsp;
    <input type="text" placeholder="Enter Offendent Name" name="oname">
    <br>
<label><b>Date</b></label>&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
    <input type="date" name="date">
    <br><br>
<label><b>Ragging Details </b><br>
                <b>Note: In order to lodge your complaint, enter complete details including your name, the place of ragging, the time of ragging, the people involved in the incident.
Give us as much details as possible. </b></label>&emsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;
                
<textarea  rows="4" cols="50" name="complaint"></textarea>
                <br>
     
     

        &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <button background-color="#f56464" class="button">Submit</button>
        
        
        
        
</fieldset>
    </form>
    
</div>
<br><br><br><br><br>
   <br><br><br><br><br><br>
    <div class="foot">
        
    <footer align="center" background="Al.jpg">
        
        <p><b><u>National Anti Ragging Help Line (UGC Crisis Hotline)</u></b></p>
        <p><b><u>24x7 Toll Free Number* 1800-180-5522</u></b></p> 
        <p><b><u>(helpline@antiragging.in)</u></b></p> </footer>
           
</div>
</body>
</html>
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

