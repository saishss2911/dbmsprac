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
                ID
            </h3>
        </td>
        <td>
            <input type="number" name="id">
        </td>
    </tr>
    <br>
    <br>
    <br>
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
<input type="submit" name="submit" value="UPDATE">
<button><a style="text-decoration: none; color:black" href="index.php">REGISTER</a></button>
<button><a style="text-decoration: none; color:black" href="search.php">SEARCH</a></button>
</form>
<br>
<br>

</body>
</html>

<?php

include 'conn.php';

if(isset($_POST['submit']))
{   
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $update = "UPDATE dbmsprac SET `name`='$name',`age`=$age,`gender`='$gender',`email`='$email' WHERE `id` = $id";
    $updatesuc = mysqli_query($con,$update);

    if($updatesuc){
        ?>
        <script>
            alert('data updated successfully');
        </script>
        <?php
        }else{
        ?>
        <script>
            alert('updation unsuccessful');
        </script>
        <?php
        }
}

?>