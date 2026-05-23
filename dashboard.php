<?php

session_start();
include 'config.php';

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Welcome <?php echo $_SESSION['user']; ?></h1>

<a href="add_student.php">Add Student</a> |
<a href="logout.php">Logout</a>

<h2>Students List</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Actions</th>
</tr>

<?php

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){

    echo "<tr>

        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['course']}</td>

        <td>
            <a href='delete_student.php?id={$row['id']}'>
                Delete
            </a>
        </td>

    </tr>";
}

?>

</table>

</body>
</html>