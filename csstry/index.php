<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMSPRAC</title>
</head>
<body>
    <form action="" method="POST">
<table>
    <tr>
        <td>
            <h3>
                Name
            </h3>
        </td>
        <td>
            <input type="text" name="name">
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                Age
            </h3>
        </td>
        <td>
            <input type="number" name="age">
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                Gender
            </h3>
        </td>
        <td>
            <input type="text" name="gender">
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                Email
            </h3>
        </td>
        <td>
            <input type="text" name="email">
        </td>
    </tr>
</table>
<input type="submit" name="submit" value="REGISTER">
<button><a style="text-decoration: none; color:black" href="search.php">SEARCH</a></button>
<button><a style="text-decoration: none; color:black" href="update.php">UPDATE</a></button>
</form>
</body>
</html>

<?php

include 'conn.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $insert = "INSERT INTO dbmsprac (`name`, `age`, `gender`, `email`) VALUES ('$name',$age,'$gender','$email')";
    $insertsuc = mysqli_query($con,$insert);

    if($con){
        ?>
        <script>
            alert('data inserted successfully');
        </script>
        <?php
        }else{
        ?>
        <script>
            alert('insertion unsuccessful');
        </script>
        <?php
        }
}

?>