<?php

$connection = mysqli_connect('localhost','root','','HelpingHands');
if($connection)
{

}

else
{
    echo "Error in Connection".mysqli_error($connection);
}


?>

 