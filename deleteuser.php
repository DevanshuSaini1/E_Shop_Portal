/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
<?php
    session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION['role']!='Admin')
            header("location:Index1.php");
    }
    else{
            header("location:Signin.php");
    }
    $id=$_GET['uid'];
    $conn= mysqli_connect("localhost","root","","eshopdb");
    mysqli_query($conn,"delete from usermaster where user_id=$id");
    mysqli_close($conn);
    header("location:viewalluser.php");
?>
