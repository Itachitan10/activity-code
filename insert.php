<?php 
include('database.php');

if(isset($_POST["submit"])){

    $name = trim(mysqli_real_escape_string($connection, $_POST['name']));
    $surname = trim(mysqli_real_escape_string($connection, $_POST['surname']));
    $age = trim(mysqli_real_escape_string($connection, $_POST['age']));  
    $date = trim(mysqli_real_escape_string($connection, $_POST['date'])); 
    $insert = "INSERT INTO student(name, surname, age, date) VALUES(?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $insert);

    if($stmt){ 
        mysqli_stmt_bind_param($stmt, "ssis", $name, $surname, $age, $date);

        if(mysqli_stmt_execute($stmt)){ 
              echo '<script>alert("successfull inserting data base")</script>';
            echo '<script>window.location.href = "addstu.php";</script>';

        } else { 
            echo "<script>alert('Failed to execute statement.')</script>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Failed to prepare statement.')</script>";
    }

    mysqli_close($connection);
}
?>

