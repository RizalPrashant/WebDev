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
        
   <table class="greenTable">
<thead>
<tr>
<th>head1</th>
<th>head2</th>
<th>head3</th>
</tr>
</thead>
<tbody>
<tr>
<td>cell1_1</td>
<td>cell2_1</td>
<td>cell3_1</td>
</tr>
<tr>
<td>cell1_2</td>
<td>cell2_2</td>
<td>cell3_2</td>
</tr>
<tr>
<td>cell1_3</td>
<td>cell2_3</td>
<td>cell3_3</td>
</tr>
<tr>
<td>cell1_4</td>
<td>cell2_4</td>
<td>cell3_4</td>
</tr>
<tr>
<td>cell1_5</td>
<td>cell2_5</td>
<td>cell3_5</td>
</tr>
</tbody>
</table>
?>
    </body>
</html>