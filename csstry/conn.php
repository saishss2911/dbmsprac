<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'dbmsprac';

$con =mysqli_connect($server,$user,$password,$db);

if($con){
?>
<script>
    alert('connnection successful');
</script>
<?php
}else{
?>
<script>
    alert('connection unsuccessful');
</script>
<?php
}

?>