<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
   <link rel="stylesheet" type"text/css" href="css/adstyle.css" > 
<style>
  input[type=text], input[type=password] {
    width: 50%;
    padding: 8px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #f79595;
    box-sizing: border-box;
       border-radius:5px;
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
    background-color: #9fff9b;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
         border-radius:15px;
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
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

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 20px 16px;
    background-color:#7fce45 ;
    color: white;
}
</style>
</head>
     <div class="image">
    <img src="img/2.png">
    
<body background="Al.jpg">
    
   
<!-- The Modal -->
<div id="myModal" class="modal">
    <br><br><br><br>

  <!-- Modal content -->
  <div class="modal-content">
      <br><br>
      <center><h4>Successfully Registered</h4></center>
     <br><br>

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
<?php
if(TRUE)
{
header("refresh:2; url=signupnew.php");
}
?>
</script>
</body>
</html>