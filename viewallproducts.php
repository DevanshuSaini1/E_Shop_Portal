<?php
    session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION['role']!='Admin')
            header("location:Index1.php");
    }
    else{
            header("location:Signin.php");
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
            .admin{
                display: flex;
                flex-direction: row;
            }
            .adminarea{
                background-color: lightgreen;
                flex: 1;
                min-height: 635px;
            }
            .viewallproducts{
                flex: 6;
            }
            .admintable{
                background-color: white;
                margin: 5px 5px 5px 5px;
            }
            .desc{
                background-color: turquoise;
                text-align: center;
            }
            .delete{
                background-color: red;
                text-align: center;
            }
        </style>
    </head>
    <body>
         <?php include './Header.php';?>
        <main>
        <div class="admin">
            <div class="adminarea">
                <table class="admintable" cellspacing="3">
                    <tr>
                        <td style="background-color:  green; width: 250px; height: 30px;">
                            <a style="text-decoration: none; color: white; margin-left: 50px; font-weight: bold" href="addnewuser.php">
                                Add New User
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:  green; width: 250px; height: 30px;">
                            <a style="text-decoration: none; color: white; margin-left: 50px; font-weight: bold" href="viewalluser.php">
                                View All User
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:  green; width: 250px; height: 30px;">
                            <a style="text-decoration: none; color: white; margin-left: 35px; font-weight: bold" href="addnewproduct.php">
                                Add New Product
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:  green; width: 250px; height: 30px;">
                            <a style="text-decoration: none; color: white; margin-left: 35px; font-weight: bold" href="viewallproducts.php">
                                View All Products
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:  green; width: 250px; height: 30px;">
                            <a style="text-decoration: none; color: white; margin-left: 70px; font-weight: bold" href="orders.php">
                                Orders
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:  green; width: 250px; height: 30px;">
                            <a style="text-decoration: none; color: white; margin-left: 40px; font-weight: bold" href="query.php">
                                Query/Feedback
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="viewallproducts">
                <?php  
               $conn = mysqli_connect("localhost","root","","eshopdb");
               $result = mysqli_query($conn,"select * from productmaster");
               if(mysqli_num_rows($result)>0){
                   echo "<table width='1310px' border ='1'>";
                   echo "<tr>";
                   echo "<th>Product Id</th>";
                   echo "<th>Product Name</th>";
                   echo "<th>Product Price</th>";
                   echo "<th>Product Type</th>";
                   echo "<th>Product Image</th>";
                   echo "</tr>";
                   while($row = mysqli_fetch_array($result)){
                        
                       echo "<tr>";
                       echo "<td>$row[0]</td>";
                       echo "<td>$row[1]</td>";
                       echo "<td>$row[2]</td>";
                       echo "<td>$row[3]</td>";
                       echo "<td><img src='$row[4]' width='35px' height='40px'</td>";
                       $path ="";
                       if($row[3]=="Mobile")
                             $path = "mobiledesc.php?pid=$row[0]";
                         else
                             $path = "tvdesc.php?pid=$row[0]";
                       echo "<td class='desc'><a style='color:white; text-decoration:none;' href='$path'>Add Desc</a></td>"; 
                       echo "<td class='delete'><a style='color:white; text-decoration:none;' href='deleteproduct.php?pid=$row[0]'>Delete</a></td>";  
                       echo "</tr>";
                   }
                   echo "</table>";
                       
               }
               else
                   echo "<h2>No Product Found !!!</h2>";
               mysqli_close($conn);
            ?>
        </div>
        </div>
        </main>
        <?php include './Footer.php';?>
    </body>
</html>
