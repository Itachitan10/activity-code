<?php
session_start();
include('database.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student User</title>
  <link rel="stylesheet" href="./index.css">
</head>
<body>

<div class="con2">
  <h1>STUDENT USER</h1>
  <div class="btn">
    <a href="addstu.php" class="btn-stu">Add Student</a>
  </div>

  <div class="con">
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Surname</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php

$select = "SELECT * FROM student";
$check_query = mysqli_query($connection, $select);
$students = mysqli_fetch_all($check_query, MYSQLI_ASSOC); // convert result to array

foreach ($students as $display) {
    ?>
    <tr>
        <td><?php echo htmlspecialchars($display['name']); ?></td>
        <td><?php echo htmlspecialchars($display['surname']); ?></td>
        <td><?php echo htmlspecialchars($display['age']); ?></td>
        <td><?php echo htmlspecialchars($display['date']); ?></td>
        <td>
            <a href="edit.php?id=<?php echo $display['id']; ?>">
                <button type="button" id="btn-success">Edit</button>
            </a>
            <a href="delete.php?id=<?php echo $display['id']; ?>" onclick="return confirm('Are you sure you want to delete this student?');">
                <button type="button" id="btn-danger">Delete</button>
            </a>
        </td>
    </tr>
    <?php
}
?>

        ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
