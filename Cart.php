<?php
    session_start();
    if(!isset($_SESSION['uname']))
    {
        header("location:signin.php");
    }
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css.css" rel="stylesheet">
        <style>
            .Cart{
                margin-left: 450px;
                margin-top: 10px;
            }
            table{
                border: hidden;
                box-shadow: 1px 1px 4px gray;
                align-content: center;
            }
        </style>
    </head>
    <body>
        <?php include './Header.php';?>
        <main>
            <div class="Cart">
                <?php
                if(isset($_COOKIE['cart']))
                {
                    $products=$_COOKIE['cart'];
                    $conn = mysqli_connect("localhost","root","","eshopdb");
                    $result=mysqli_query($conn,"select * from productmaster where pid in ($products)");
                    if(mysqli_num_rows($result)>0){
                    echo "<table border cellspacing='10' style='width:50%;'>";
                    echo "<tr>";
                    echo "<th>Product</th>";
                    echo "<th>Name</th>";
                    echo "<th>Price</th>";
                    echo "</tr>";
                    $amount=0;
                    while($row= mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td><img src='$row[4]' width='50px' height='50px'></td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        $amount+=$row[2];
                        echo "<td style='background-color: red; text-align: center;'><a style='color: white; text-decoration: none; ' href='deletecart.php?pid=$row[0]'>Delete</a></td>";
                        echo "</tr>";
                    }
                    $_SESSION['total']=$amount;
                    echo "<tr>";
                        echo "<td colspan='4' style='text-align: right;'>Total Amount : <b>$amount</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td colspan='3'></td>";
                        echo "<td style='background-color: turquoise; text-align: center;'><a style='color: white; text-decoration: none;' href='shipping.php'>Place Order</a></td>";
                    echo "</tr>";
                    echo "</table>";
                    }
                    mysqli_close($conn);
                }
                else
                    echo "<h2>Cart is Empty</h2>";
                ?>
            </div>
        </main>
        <?php include './Footer.php';?>
    </body>
</html>
