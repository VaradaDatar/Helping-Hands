<?php

$connection = mysqli_connect('localhost','root','','registration');
if($connection)
{

}
else
{
    echo "Error in Connection".mysqli_error($connection);
}


?>

 