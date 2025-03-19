<?php
    session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION['role']!='Admin')
            header("location:Index1.php");
    }
    else{
            header("location:Signin.php");
    }
    
   $msg = "";
   if(isset($_POST['addproduct'])){
       $id = $_POST['pid'];
       $name = $_POST['pname'];
       $type = $_POST['ptype'];
       $price = $_POST['pprice'];
       $path = "";
       if($_FILES['pimage']['error'] == 0){
           if($_FILES['pimage']['type']=="image/jpg" || $_FILES['pimage']['type']=="image/png" || $_FILES['pimage']['type']=="image/jpeg"){
             $sou = $_FILES['pimage']['tmp_name'];  
             $des = $_SERVER['DOCUMENT_ROOT']."/STP/Product/".$_FILES['pimage']['name'];
             if(move_uploaded_file($sou, $des)){
                 $path = "product/".$_FILES['pimage']['name'];
                 $con = mysqli_connect("localhost","root","","eshopdb");
                 $query = "insert into productmaster values($id,'$name',$price,'$type','$path')";
                 mysqli_query($con,$query);
                 if(mysqli_affected_rows($con)>0)
                     $msg = "Product Added Successfuly !!!";
                 else
                     $msg = "Product not Added. Try Again...";
                 mysqli_close($con);
           }
           else{
               $msg = "Error in Adding the Product !!!";
           }
           }
       }
       else{
           $msg = "File is Corrupted !!!";
       }
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
            .addnewproduct{
                flex: 6;
            }
            .admintable{
                background-color: white;
                margin: 5px 5px 5px 5px;
            }
            input{
                margin: 0px;
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
            <div class="addnewproduct">
                <form method="post" enctype="multipart/form-data">
                    <table cellspacing="15" style="margin-left: 300px; margin-top: 40px; border: 1px hidden; box-shadow: 2px 2px 5px gray;">
                        <tr>
                            <td style="text-align: center; color: maroon;" colspan="2">
                                <h2>Add New Product</h2>
                                <div style="background-color: maroon; height: 4px;"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Product Id</label>
                            </td>
                            <td>
                                <input type="number" name="pid"y required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Product Name</label>
                            </td>
                            <td>
                                <input type="text" name="pname" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Product Type</label>
                            </td>
                            <td>
                                <select name="ptype" style="width: 363px; height: 32px;" required>
                                    <option></option>
                                    <option>TV</option>
                                    <option>Mobile</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Product Price</label>
                            </td>
                            <td>
                                <input type="number" name="pprice" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Product Image</label>
                            </td>
                            <td>
                                <input type="file" name="pimage" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input  style="width: 550px; ; margin: 0px; background-color: turquoise; color: white; " type="submit" name="addproduct" value="Add Product">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo $msg; ?>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        </main>
        <?php include './Footer.php';?>
    </body>
</html>
