<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>N0</th>
            <th>username</th>
            <th>password</th>
</tr>
<?php
include"connect.php";
$i=1;
$query=mysqli_query($conn,"select * from admin");
while($row=mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['password'];?></td>
</tr>
<?php
$i++;
}
?>
</table>

</body>
</html>