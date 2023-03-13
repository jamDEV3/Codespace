<?php

# Connect to the database.
require ('connect_db.php');

$q = "SELECT * FROM my_table;" ;
$r = mysqli_query ( $link, $q ) ;

if (mysqli_num_rows($r) != 0 )
{
echo '
<h1>Read Records</h1>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th> </tr> </thead> <tbody>';

while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
{
echo'<tr>
<td>'.$row['id'].'</td>
<td>'.$row['first_name'].'</td>
<td>'.$row['last_name'].'</td> '; }

echo'</tr></table></br><br><a href="create_record.php">Add Records</a>  |
<a href="read_table.php">Read Records</a>   |   <a href="update_record.php>Update Record</a>    |
<a href="delete_record.php">Delete Record</a>';}

# Close database connection.
mysqli_close($link);
exit();


?>