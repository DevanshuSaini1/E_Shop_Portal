/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
<?php
    $id=$_GET['pid'];
    $conn= mysqli_connect("localhost","root","","eshopdb");
    mysqli_query($conn,"delete from productmaster where pid=$id");
    mysqli_close($conn);
    header("location:viewallproducts.php");
?>
