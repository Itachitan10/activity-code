<?php
session_start();
include('database.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $delete = "DELETE FROM student WHERE id = ?";
    $stmt = mysqli_prepare($connection, $delete);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error deleting student.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare statement.";
    }
} else {
    echo "No student id specified.";
}

mysqli_close($connection);
?>
