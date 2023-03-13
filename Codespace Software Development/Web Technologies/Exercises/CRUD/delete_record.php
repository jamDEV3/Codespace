<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a class="btn btn-light btn-sm" href="delete_now.php?id='.$row['id'].'">Delete
Post</a><br>
    
<?php

# Connect to the database.
require ('connect_db.php');

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
<td>'.$row['last_name'].'</td>
<td><div class="alert alert-light" role="alert">
<a class="btn btn-light btn-sm" href="delete_now.php? id='.$row['id'].'">Delete Post</a><br>'; }

echo'</tr></table></br><br><a href="create_record.php">Add Records</a>  |
<a href="read_table.php">Read Records</a>   |   <a href="update_record.php>Update Record</a>    |
<a href="delete_record.php">Delete Record</a>';}

# Close database connection.
mysqli_close($link);
exit();

?>

</body>
</html>