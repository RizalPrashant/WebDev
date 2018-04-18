<html>
<head>
    <link rel="stylesheet" href="table.css">
    <title>
        Feedback Page
    </title>
    </head>
    <body>
<?php
    require_once('dbconnect.php'); 
        echo "<br>";
        $my_query = "";
    $my_query = "select * from feedback";
    $result = mysqli_connect($connection, $my_query) or die('error');
        echo '<table class="greenTable">';
echo "<thead>";
echo "<tr> <th>Name</th> <th>Email</th> <th>Feedback</th> </tr>";
echo "</thead>";
echo "<tbody>";
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr> <td> $row['Name']</td> <td>$row['Email']</td> <td>$row['suggestion']</td> </tr>";
        }


echo "</tbody>";
echo "</table>";
      ?>  
   

    </body>
</html>