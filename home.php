
<!DOCTYPE html>
<html>
<head>
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
    echo 'Welcome' . $_SESSION['uname'];
    echo '<br><a href="login.php"> Logout</a>';
    ?>
    
<img src = "logo.jpg"> </img>
</div>
</div>

<div class = "navigation">
<nav> <ul>
    <li> <a href="home.php">BreakFast</a> | </li>
    <li>      <a href="lunch.php">Lunch</a> | </li>
    <li>     <a href="dinner.php">Dinner</a> |</li>
    <li>	<a href="snacks.php"> Snacks </a> </li>
    </ul>
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

<div class= "imagelocation">
<table style="width:100%" border="1">
  <tr>
    <td width = "50%" height = "300"> <img style="display:block;" width="100%" height="100%" src = "masalachai.jpg" ></td>
    <td width = "50%" height = "300"><img style="display:block;" width="100%" height="100%" src = "aluchana.jpg" ></td> 
  </tr>
  <tr>
    <td width = "50%" height = "300"><img style="display:block;" width="100%" height="100%" src = "roticauli.jpg" ></td>
    <td width = "50%" height = "300"><img style="display:block;" width="100%" height="100%" src = "parotha.jpeg" ></td>    
  </tr>
 
</table>
</div>

<div class = "footer">
&copy; Prashant Rizal. &emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Click here for
<a href = "login.php"> Back to home page </a> or to <a href="submit.php"> Submit a form </a> for any concerns/suggestions.
</div>
</body>
</html>