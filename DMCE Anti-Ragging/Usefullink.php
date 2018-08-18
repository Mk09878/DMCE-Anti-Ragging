<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
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
.topnav {
  overflow: hidden;
  
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
    .table{
        align-content: center;
        
    }

    table {
    width:50%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #6fbbea;
}
table#t01 tr:nth-child(odd) {
   background-color:#aed4f0;
}
table#t01 th {
    background-color: #6979d3;
    color: white;
}
    .u{
         color: white;
    }

    .foot{
        font-size: 25px;
        color: #000000;
    }
    </style>
</head>
<div class="image">
    <img src="img/2.png">
       </div>
<body background="Al.jpg" >
    
<br><br>
<div class="topnav" id="myTopnav">
  <a href="Homenew.php">Home</a>
  <a href="Alogin.php">Adminstrator Login</a>
  
 
  
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
    <h1 align="center"><legend style="font-size:36px;">Useful Links</legend></h1>
                <table style="width:100%">
        
        
    <table align="center" id="t01">
  <tr>
    <th>Sr no.</th>
    <th>Website</th> 
    <th>Description</th>
  </tr>
  <tr>
    <td>1.</td>
    <td><a href="http://www.mhrd.gov.in/">www.mhrd.gov.in</a></td>
    <td>Ministry of Human Resources (HRD)</td>
  </tr>
  <tr>
    <td>2.</td>
      <td><a href="https://www.ugc.ac.in/">www.ugc.ac.in</a></td>
    <td>University Grants Commission (UGC)</td>
  </tr>
  <tr>
    <td>3.</td>
      <td><a href="http://amanmovement.org/amanmovement/">www.amanmovement.org</a></td>
    <td>Aman Satya Kachroo Trust</td>
  </tr>
</table>
       </div>
    <br><br><br><br><br><br><br><br>
    <div class="foot">
        
    <footer align="center" background="Al.jpg">
        
        <p><b><u>National Anti Ragging Help Line (UGC Crisis Hotline)</u></b></p>
        <p><b><u>24x7 Toll Free Number* 1800-180-5522</u></b></p> 
        <p><b><u>(helpline@antiragging.in)</u></b></p> </footer>
           
</div>
</body>
</html>

    
 