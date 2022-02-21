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
</table>
<input type="submit" name="submit" value="SEARCH">
<button><a style="text-decoration: none; color:black" href="index.php">REGISTER</a></button>
<button><a style="text-decoration: none; color:black" href="update.php">UPDATE</a></button>
</form>
<br>
<br>
<br>

</body>
</html>

<?php

include 'conn.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];

    $search = "SELECT * FROM `dbmsprac` WHERE name = '$name'";
    $searchsuc = mysqli_query($con,$search);
    ?>
    <table>
    <tr>
        <td>
            <h3>ID</h3>
        </td>
        <td>
            <h3>Name</h3>
        </td>
        <td>
            <h3>Age</h3>
        </td>
        <td>
            <h3>Gender</h3>
        </td>
        <td>
            <h3>Email</h3>
        </td>
    </tr>
    </table>
    <?php
    
    while($result = mysqli_fetch_array($searchsuc))
    {?>
        <tr>
            <td>
                <?php echo $result['id'];?>
            </td>
            <td>
                <?php echo $result['name'];?>
            </td>
            <td>
                <?php echo $result['age'];?>
            </td>
            <td>
                <?php echo $result['gender'];?>
            </td>
            <td>
                <?php echo $result['email'];?>
            </td>
        </tr>
        <br>
    <?php
    }
    if($searchsuc){
        ?>
        <script>
            alert('data fetched');
        </script>
        <?php
        }else{
        ?>
        <script>
            alert('fecth failed');
        </script>
        <?php
        }
}

?>