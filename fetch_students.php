<?php
include "./db_connection.php";

$sql = "SELECT fullname, gender, age, class_id FROM students";
$result = mysqli_query($conn, $sql);
$students = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $students[] = $row;
    }
}
echo json_encode($student);
?>