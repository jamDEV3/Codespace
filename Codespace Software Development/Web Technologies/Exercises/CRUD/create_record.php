<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Forms</title>
    <style>
        
    </style>
</head>
<body>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require('connect_db.php');
}

$errors = array();

if (empty($_POST['id']))
{$errors[]='Enter ID Number';}
else{
    $id = mysqli_real_escape_string($link, trim($_POST['id']));
}

if (empty($_POST['first_name']))
{$errors[]='Enter your first name';}
else{
    $fn = mysqli_real_escape_string($link, trim($_POST['first_name']));
}

if (empty($_POST['last_name']))
{$errors[]='Enter your last name';}
else{
    $ln = mysqli_real_escape_string($link, trim($_POST['last_name']));
}

// Check if id registered.
if ( empty( $errors ) )
{
$q = "SELECT id FROM my_table WHERE id='$id'" ;
$r = mysqli_query($link, $q) ;
if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'User already registered.';
}

# On success data into my_table on database.
if ( empty( $errors ) )
{
$q = "INSERT INTO my_table (id, first_name, last_name) VALUES ('$id', '$fn', '$ln')";
$r = mysqli_query($link, $q) ;
if ($r)
{ echo ('<p>You have added data successfully</p>');


# Close database connection.
mysqli_close($link);
exit();
}

# Or report errors.
else
{
echo ('<p>The following error(s) occurred:</p>') ;
foreach ( $errors as $msg )
{ echo " - $msg<br>" ; }
echo ('<p>or please try again.</p></div>');
# Close database connection.
mysqli_close( $link );
}
}

echo'</tr></table></br><br><a href="create_record.php">Add Records</a>  |
<a href="read_table.php">Read Records</a>   |   <a href="update_record.php>Update Record</a>    |
<a href="delete_record.php">Delete Record</a>';


?>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Form Validation</h2>
                    <p>Your Name:</p>

                    <form action="create_record.php" method="post">
                    <div class="form-group">
                    <label for="inputid">ID</label>
                    <input type="text"
                    name="id"
                    class="form-control"
                    value="<?php if (isset($_POST['id'])) echo $_POST['id']; ?> ">
                    </div>
                    <div class="form-group">
                    <label for="inputfirst_name">First Name</label>
                    <input type="text"
                    name="first_name"
                    class="form-control"
                    value="<?php if (isset($_POST['first_name']))
                    echo $_POST['first_name']; ?> ">
                    </div>
                    <div class="form-group">
                    <label for="inputlast_name">Last Name</label>
                    <input type="text"
                    name="last_name"
                    class="form-control"
                    value="<?php if (isset($_POST['last_name']))
                    echo $_POST['last_name']; ?>">
                    </div>
                    <input type="submit"
                    class="btn btn-light btn-lg btn-block"
                    value="Add Record">
                    </p>
                    </form>

            </div>

            <div class="col-sm-6">
                <h2>Your given values are: </h2>
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>