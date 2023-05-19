<?php

$host= 'localhost';
$user= 'root';
$pass= 'kevoh12345';
$db= 'school';

$con =mysqli_connect ($host, $user, $pass, $db);

if ($con) {
    echo "";
}
else {
    echo "DB Not Connected"; 
}

?>