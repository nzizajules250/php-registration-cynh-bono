<?php
$host="localhost";
$username="root";
$password="";
$database="schools";
$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn){
   echo "connection failed" ;
}
else{
    echo "connection successful";
}

    ?>