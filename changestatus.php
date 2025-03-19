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
    $id=$_GET['oid'];
    $conn= mysqli_connect("localhost","root","","eshopdb");
    mysqli_query($conn,"update orders set status='Delivered' where order_id=$id");
    mysqli_close($conn);
    header("location:orders.php");
?>

