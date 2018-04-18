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
    $my_query = "SELECT * from User";
    $result = mysqli_connect($connection, $my_query);
        echo "<table class="greenTable">";
echo "<thead>";
echo "<tr> <th>head1</th> <th>head2</th> <th>head3</th> </tr>";
echo "</thead>";
echo "<tbody>";
        //while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr> <td>cell1_1</td> <td>cell2_1</td> <td>cell3_1</td> </tr>";
        //..


echo "</tbody>";
echo "</table>";
      ?>  
   

    </body>
</html>