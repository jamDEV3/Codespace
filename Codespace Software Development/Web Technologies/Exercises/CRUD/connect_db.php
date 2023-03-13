<?php  

# Connect  on 'localhost' 'practice' . 

$link = mysqli_connect('localhost','root','root','forms');  

if (!$link) {  

# Otherwise fail gracefully and explain the error.  

die("Could not connect to MySQL: ".mysqli_connect_error()); 

}  

echo 'Connection OK';   

?> 