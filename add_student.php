<?php

session_start();
include 'config.php';

if(isset($_POST['save'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students(name, email, course)

            VALUES('$name', '$email', '$course')";

    if($conn->query($sql)){

        header("Location: dashboard.php");

    } else {

        echo "Error";

    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<form method="POST">

    <input type="text"
           name="name"
           placeholder="Name"
           required>

    <br><br>

    <input type="email"
           name="email"
           placeholder="Email"
           required>

    <br><br>

    <input type="text"
           name="course"
           placeholder="Course"
           required>

    <br><br>

    <button type="submit" name="save">
        Save
    </button>

</form>

</body>
</html>