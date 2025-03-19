<?php
session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION['role']!='Admin')
            header("location:Index1.php");
    }
    else{
            header("location:Signin.php");
    }
    $msg="";
    if(isset($_POST['adddesc'])){
            $pid=$_POST['pid'];
            $os=$_POST['os'];
            $processor=$_POST['processor'];
            $color=$_POST['color'];
            $sim=$_POST['simtype'];
            $simslot=$_POST['hybridsimslot'];
            $display=$_POST['displaysize'];
            $resolution=$_POST['resolution'];
            $storage=$_POST['internalstorage'];
            $ram=$_POST['ram'];
            $camera=$_POST['primarycamera'];
            $camera2=$_POST['secondarycamera'];
            $network=$_POST['networktype'];
            $battery=$_POST['batterycapacity'];
            $width=$_POST['width'];
            $height=$_POST['height'];
            $warranty=$_POST['warrantysummary'];
            
            $conn= mysqli_connect("localhost","root","","eshopdb");
            $qry = "insert into mobilespecification(pid,os,processor,color,sim_type,hybrid_sim_slot,display_size,resolution,internal_storage,ram,primary_camera,secondary_camera,network_type,battery_capacity,width,height,warranty_summary) values('$pid','$os','$processor','$color','$sim','$simslot','$display','$resolution','$storage','$ram','$camera','$camera2','$network','$battery','$width','$height','$warranty')";
        mysqli_query($conn, $qry);
        if(mysqli_affected_rows($conn)>0)
            $msg = "Specification Added Successfully !!";
        else
            $msg = "Specification Not Added !!";
        mysqli_close($conn);
            
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
            .mobiledesc{
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
            <div class="mobiledesc">
                <form method="post">
                    <table cellspacing="10" style="margin-left: 300px; margin-top: 20px; border: 1px hidden; box-shadow: 2px 2px 5px gray;">
                        <tr>
                            <td style="text-align: center; color: maroon;" colspan="2">
                                <h2>Mobile Description</h2>
                                <div style="background-color: maroon; height: 4px;"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Product Id</label>
                            </td>
                            <td>
                                <input type="number" name="pid" value="<?php
                                if(isset($_GET['pid'])){
                                    echo $_GET['pid'];
                                }
                                ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Operating System</label>
                            </td>
                            <td>
                                <input type="text" name="os" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Processor</label>
                            </td>
                            <td>
                                <input type="text" name="processor" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Color</label>
                            </td>
                            <td>
                                <input type="text" name="color" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>SIM Type</label>
                            </td>
                            <td>
                                <input type="text" name="simtype" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Hybrid SIM Slot</label>
                            </td>
                            <td>
                                <input style="width: 20px;" type="radio" name="hybridsimslot" required><label>Yes</label>
                                <input style="width: 20px;" type="radio" name="hybridsimslot" required><label>NO</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Display Size</label>
                            </td>
                            <td>
                                <input type="text" name="displaysize" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Resolution</label>
                            </td>
                            <td>
                                <input type="text" name="resolution" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Internal Storage</label>
                            </td>
                            <td>
                                <input type="text" name="internalstorage" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>RAM</label>
                            </td>
                            <td>
                                <input type="text" name="ram" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Primary Camera</label>
                            </td>
                            <td>
                                <input type="text" name="primarycamera" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Secondary Camera</label>
                            </td>
                            <td>
                                <input type="text" name="secondarycamera" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Network Type</label>
                            </td>
                            <td>
                                <input type="text" name="networktype" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Battery Capacity</label>
                            </td>
                            <td>
                                <input type="text" name="batterycapacity" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Width</label>
                            </td>
                            <td>
                                <input type="text" name="width" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Height</label>
                            </td>
                            <td>
                                <input type="text" name="height" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Warranty Summary</label>
                            </td>
                            <td>
                                <input type="text" name="warrantysummary" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input  style="width: 550px; ; margin: 0px; background-color: turquoise; color: white; " type="submit" name="adddesc" value="Add Description">
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
