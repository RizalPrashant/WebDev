<?php
    session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<title> Nepalese Recipe </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class = "wrapheader">
<div class = "header">
<h1> Try our Nepalese Recipes </h1>
<?php
    echo 'Welcome '. $_SESSION["uname"];
    echo '<br><a href="login.php" action=logout> Logout</a>';
?>
    
<img src = "logo.jpg" onmouseover="Large(this)"> </img>
</div>
</div>

<div class = "navigation">
<nav> 
     <a href="home.php" style="color: blue" data-toggle="tooltip" title="You are here!" >BreakFast</a> | 
         <a href="lunch.php">Lunch</a> | 
         <a href="dinner.php">Dinner</a> |
    	<a href="snacks.php"> Snacks </a> 
    
</nav>
</div>

<div class= "fooditems">
<p>
<h1> <i> <u> Breakfast Items </u> </i></h1>
<ul>
<li> <a href="chai.php"> Masala Chai </a>
<li> <a href="alu.php">Alu Chana </a>
<li> <a href="roti.php">Plain roti and cauliflower tarkari </a>
<li> <a href="parotha.php">Alu Parotha</a>
</ul>
</p>
</div>

<div class= "imagelocation" id="image">
<table style="width:100%" border="1">
  <tr>
    <td width = "50%" height = "300"> <img style="display:block;" width="100%" height="100%" src = "masalachai.jpg" ></td>
    <td width = "50%" height = "300"><img  style="display:block;" width="100%" height="100%" src = "aluchana.jpg" ></td> 
  </tr>
  <tr>
    <td width = "50%" height = "300"><img  style="display:block;" width="100%" height="100%" src = "roticauli.jpg" ></td>
    <td width = "50%" height = "300"><img  style="display:block;" width="100%" height="100%" src = "parotha.jpeg" ></td>    
  </tr>
 
</table>
</div>

<div class = "footer">
&copy; Prashant Rizal. &emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Click here for
<a href = "login.php"> Back to home page </a> or to <a href="submit.php"> Submit a form </a> for any concerns/suggestions.
</div>
</body>
</html>