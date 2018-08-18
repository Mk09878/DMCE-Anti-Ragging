<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type"text/css" href="css/adstyle.css" > 
<style>
  input[type=text], input[type=password] {
    width: 50%;
    padding: 8px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #f79595;
    box-sizing: border-box;
}
    
    .carousel-control.left, .carousel-control.right {
   background-image:none !important;
   filter:none !important;
}
    
    
     .button {
  display: block;
  padding: 5px 5px;
  font-size: 20px;
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
    h1{
        text-decoration-color: white;
    }
    
    
    
    
    
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}
    .carousel-inner{
        
    }

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: #eb9898;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #de9696;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #d36374;
    color: white;
}

.modal-body {
    background-image: url(Al.jpg); 
    padding: =0px;
     max-height: 500px;
    
   }
    .color{
        color: aliceblue;
    }

.modal-footer {
    height: auto;
    padding: 20px 16px;
    background-color:#7fce45 ;
    color: white;
}
    .ty{
        float: right;
    }
</style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
     <div class="image">
    <img src="img/2.png">
    
<body background="Al.jpg">
    
    <br><br>
<div class="topnav" id="myTopnav">
  <a href="Homenew.php">Signout</a>
  <a href="Alogin.php">Administrator Login</a>
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
<br><br>
<!-- The Modal -->
<div id="myModal" class="modal">
    <br><br><br><br>

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Hello,</h2>
    </div>
    <div class="modal-body">
        <div class="container1">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
    </ol>

    <!-- Wrapper for slides -->
   <center> <div class="carousel-inner"  role="listbox" style=" width:100%; height: 350px !important;">
      <a href="Complaint.html">
          <div class="item active">
              <a href="Complaint.php"><h1 class="color">Click Here to Register a Complaint</h1>
              
                  <img src="img/speak_the_truth1.jpg"  style="width:35%;"></a>
           <div class="carousel-caption">
               
        
        </div>
      </div>
        </a>
        
      <div class="item">
           <a href="view.php"><h1 class="color">Click Here to View Complaint</h1>
          
               <img src="img/injustice.jpg"  style="width:50%;">
            <div class="carousel-caption ">
                </a>
        
        </div>
      </div>
       
      
    </div>
      </center>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> 
       
        
    </div>
    <div class="modal-footer">
    <h2 class="ty">Thank you!!!</h2>
    </div>
  </div>

</div>
    

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
window.onload = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
   

</body>
</html>