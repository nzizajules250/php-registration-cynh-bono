<?php
include "db_connection.php";
if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $fullName = $_POST["fullName"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $class = $_POST["class"];

    $sql = "INSERT INTO students (fullName, gender, age, class_id)
            VALUES ('$fullName', '$gender', '$age', '$class')";

    if (mysqli_query($conn,$sql)){

        echo "Student registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $conn->close(); 
    }
?>