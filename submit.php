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
    <!--<button type="submit" form="submitform" value="Submit">Submit</button>-->

<img src = "logo.jpg"> </img>
</div>
</div>

<div class = "navigation">
<nav>
                <a href="home.php">BreakFast</a> |
                <a href="lunch.php">Lunch</a> |
                <a href="dinner.php">Dinner</a> |
		<a href="snacks.php"> Snacks </a>
</nav>
</div>

<div class= "fooditems">
<p>
<h1> <i>  Submit a form  </i></h1>
Have any concerns/suggestions? Please do not hesitate to contact me.
<form action="submitfeedback.php" accept-charset="ISO-8859-1" method="get" id="submitform">
<br>
Name: <br>
<input type="text" name="name" pattern="[a-zA-Z ]{2,30}" placeholder="Enter Name" required><br>
<br>
Email: <br>
<input type="email" name="email" required><br>
<br>
Concerns/Suggestions <br>
<textarea name="feedback" rows="15" cols="50" required></textarea><br><br>
<input type="submit" value="Submit">
</form>
</p>
</div>

<div class= "imagelocation">
<table style="width:50%" border="1">
  <tr>
    <td width = "50%" height = "300"> <img style="display:block;" width="100%" height="100%" src = "indianset.jpeg" ></td> 
  </tr>
 
 
</table>
</div>

<div class = "footer">
&copy; Prashant Rizal. &emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Click here for
<a href = "displayfeedback.php"> viewing user feedbacks </a> or to <a href="submit.php"> Submit a form </a> for any concerns/suggestions.
</div>
</body>
</html>