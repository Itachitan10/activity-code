<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Student</title>
    <link rel="stylesheet" href="./index2.css" />
</head>
<body>

<div class="con2">
  <h1 style="color: antiquewhite;">Add Student</h1>
  <form method="POST" action="insert.php">
    <input type="text" name="name" placeholder="Name" required /><br>
    <input type="text" name="surname" placeholder="Surname" required /><br>
    <input type="number" name="age" placeholder="Age" required /><br>
    <input type="date" name="date" required /><br>
    <button type="submit" name="submit" class="btn-submit">Add Student</button>
  </form>
</div>

</body>
</html>
