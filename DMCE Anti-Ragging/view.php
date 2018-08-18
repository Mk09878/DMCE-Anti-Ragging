<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	echo 'Not Connected';
}
if(!mysqli_select_db($con,'complaint'))
{
	echo 'DB not selected';
}
$result=mysqli_query($con,"SELECT * FROM comp");
?>
<html>
<style>
.php{
	 min-width: 500px;
  min-height: 200px;
  /*left: -webkit-calc( 50% - 250px );*/
  /*top: 20%;*/
  /*position: absolute;*/
  border-radius: 5px;
  border-collapse: separate;
    border-spacing: 10px 50px;
  -moz-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.6);
  -webkit-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.6);
  box-shadow: 0 20px 30px rgba(0, 0, 0, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.3);
  padding: 20px;
  text-align: left;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
  display: flex;
  transition: box-shadow .3s ease;
}

    input[type=text], input[type=password] {
        width: 65%;
        
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
        font-size: 20px;
        color: #000000;
    } 
   

/*.wrap{
    width: 250px;
    margin: 50px auto;
    background-image: #7d86ea;
    float:right;
    padding: 0px 50px 30px;
       
}*/
/*.intro{
    width: 400px;
        margin: 50px auto;
        float: left;
    padding: 10px
}*/
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
</head>
<div class="image">
    <img src="img/2.png">
       </div>
<body background="Al.jpg" >
    
<br><br>
<div class="topnav" id="myTopnav">
  
  <a href="Homenew.php">Logout</a>
  <a href="modal with carousel.php">Home</a>
    <a href="Usefullink.html">Useful Links</a>
  
  
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

<h1 align="center">Registered Complaints</h1>
<?php
$id=1;
while($row=mysqli_fetch_array($result))
{
	//echo "<table>";
	echo "<div class='php' id=$id>";
	echo "<tr>";
	echo "<td>";
	echo "Complainant Name:".$row['cname'];
	echo "</td>";
	echo "</tr>";
	echo "<br>";
	echo "<br>";
	echo "<tr>";
	echo "<td>";
	echo "Victim Name:".$row['vname'];
	echo "</td>";
	echo "</tr>";
	echo "<br>";
	echo "<br>";
	echo "<tr>";
	echo "<td>";
	echo "Offendent Name:".$row['oname'];
	echo "</td>";
	echo "</tr>";
	echo "<br>";
	echo "<br>";
	echo "<tr>";
	echo "<td>";
	echo "Complaint:".$row['complaint'];
	echo "</td>";
	echo "</tr>";
	echo "<br>";
	//echo "$id";
	echo "</div>";
	echo "<br>";
	
$id++;	
}
?>
<br><br>
    <div class="foot">
        
    <footer align="center" background="Al.jpg">
        
        <p><b><u>National Anti Ragging Help Line (UGC Crisis Hotline)</u></b></p>
        <p><b><u>24x7 Toll Free Number* 1800-180-5522</u></b></p> 
        <p><b><u>(helpline@antiragging.in)</u></b></p> </footer>
           
</div>
</html>
