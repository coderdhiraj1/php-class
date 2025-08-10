<?php
// error_reporting(0);
$db = mysqli_connect('localhost','root','root','mini_crud');

if($db)
{
    echo "<pre>";
    var_dump($_POST);

    $query = "INSERT INTO `students`(`name`, `email`, `mobile`, `age`, `course`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['age']."','".$_POST['course']."')";
    
    $insert = mysqli_query($db,$query);

    if($insert)
    {
        header("Location: ../index.php?status=success");
    }
    else
    {
        header("Location: ../index.php?status=failed");
    }
}
else
{
    echo "faield :-(";
}