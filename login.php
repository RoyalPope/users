<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST" autocomplete="off">
    <h1>register here!!!</h1>
    <label for="t">username:</label> 
    <input type="text" placeholder="enter username" name="a" id="t" required><br><br>

    <label for="tt">password:</label> 
    <input type="password" placeholder="enter password" id="tt" maxlength="8" name="b" required><br><br>
    <button type="submit" name="btn">log in</button>
</form>
<?php
if(isset ($_POST['btn'])){
    include"connect.php";
    $aa=$_POST['a'];
    $bb=$_POST['b'];
    $query=mysqli_query($conn,"select * from admin where username='$aa' && password='$bb'");
    if(mysqli_num_rows($query)){
        echo"<script>alert('hello there.!')</script>";
        header("location:index.php");
    }else{
        echo "<script>alert('user not found')</script>";
    }
}
?>
</body>
</html>