<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['super'])){
    // header('Location: crud.php');
    echo "<script>
    window.location.href='./crud.php';
    alert('You are not superadmin, You are not authorized to visit this page');
    </script>";
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    echo "<script>
    window.location.href='./login.php';
    alert('Successfully logged out');
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Users page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h2>Users Details</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>Username</td>
    <td>Password</td>
    <td>roles</td>
    <td>Edit</td>
    <!-- <td>Delete</td> -->
  </tr>

<?php

include "config.php"; // Using database connection file here

$records = mysqli_query($con,"SELECT * from users"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['password']; ?></td> 
    <td><?php echo $data['roles']; ?></td>    
    <td><a href="admin-edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <!-- <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td> -->
  </tr>	
<?php
}
?>
</table>

<form method='post' action="">
            <input type="submit" value="Logout" name="but_logout" class="button" style="background-color: red; width: 100px; padding: 8px 4px; cursor: pointer;">
        </form>

</body>
</html>