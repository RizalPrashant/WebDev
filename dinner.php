<?php
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
    session_start();
    //Crost site script check
    echo 'Welcome '.  htmlspecialchars($_SESSION["uname"], ENT_QUOTES, 'UTF-8');
    echo '<br><a href="login.php"> Logout</a>';
    ?>
    
<img src = "logo.jpg"> </img>
</div>
</div>

<div class = "navigation">
<nav>
                <a href="home.php">BreakFast</a> |
                <a href="lunch.php">Lunch</a> |
                <a href="dinner.php" style="color: blue"data-toggle="tooltip" title="You are here!" >Dinner</a> |
		<a href="snacks.php"> Snacks </a>
</nav>
</div>

<div class= "fooditems">
<p>
<h1> <i> <u> Dinner Items </u> </i></h1>
<ul>
<!-- <li> <a href="chai.php"> Masala Chai </a>
<li> <a href="alu.php">Alu Chana </a>(Coming soon)
<li> <a href="roti.php">Plain roti and cauliflower tarkari </a>(Coming soon)
<li> <a href="parotha.php">Alu Parotha</a> (Coming soon) -->
    <li> dinner item 1</li>
</ul>
</p>
</div>

<div class= "imagelocation">
<table style="width:100%" border="1">
  <tr>
    <td width = "50%" height = "300"> <img style="display:block;" width="100%" height="100%" src = "dinner1.jpeg" ></td>
    <td width = "50%" height = "300"><img style="display:block;" width="100%" height="100%" src = "dinner2.jpeg" ></td> 
  </tr>
  <tr>
    <td width = "50%" height = "300"><img style="display:block;" width="100%" height="100%" src = "dinner3.jpeg" ></td>
    <td width = "50%" height = "300"><img style="display:block;" width="100%" height="100%" src = "dinner4.jpeg" ></td>    
  </tr>
 
</table>
</div>

<div class = "footer">
&copy; Prashant Rizal. &emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Click here for
<a href = "login.php"> Back to home page </a> or to <a href="submit.php"> Submit a form </a> for any concerns/suggestions.
</div>
</body>
</html>