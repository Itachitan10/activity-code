<?php
session_start();
include('database.php');


$id = intval($_GET['id']);

$query = "SELECT * FROM student WHERE id = $id LIMIT 1";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) == 0) {
    die("Student not found");
}

$student = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="./edit.css">
</head>
<body>

    <form action="update.php" method="POST">
            <h1>Edit Student</h1>
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>" />
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($student['name']); ?>" required /><br>

        <label>Surname:</label>
        <input type="text" name="surname" value="<?php echo htmlspecialchars($student['surname']); ?>" required /><br>

        <label>Age:</label>
        <input type="number" name="age" value="<?php echo htmlspecialchars($student['age']); ?>" required /><br>

        <label>Date:</label>
        <input type="date" name="date" value="<?php echo htmlspecialchars($student['date']); ?>" required /><br>

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
