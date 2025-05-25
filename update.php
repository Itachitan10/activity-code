<?php
session_start();
include('database.php');

if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $surname = mysqli_real_escape_string($connection, $_POST['surname']);
    $age = intval($_POST['age']);
    $date = $_POST['date'];

    $query = "UPDATE student SET 
                name='$name', 
                surname='$surname', 
                age=$age, 
                date='$date' 
              WHERE id=$id";

    if (mysqli_query($connection, $query)) {
    
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request.";
}
?>
