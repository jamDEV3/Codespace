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

# Connect  on 'localhost' 'practice' . 

$link = mysqli_connect('localhost','root','root','practice');  

if (!$link) {  

# Otherwise fail gracefully and explain the error.  

die('Could not connect to MySQL: ');  

}  

echo 'Connection OK';   

?> 
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Form Validation</h2>
                    <p>Your Name:</p>

                    <input type="name" placeholder="Name">

                    <p>Your Email:</p>

                    <input type="email" placeholder="Email">

                    <br>

                    <input type="button" value="Submit" style="margin-top: 20px">

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