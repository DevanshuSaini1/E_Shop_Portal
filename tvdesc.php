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
            $inbox=$_POST['inthebox'];
            $color=$_POST['color'];
            $display=$_POST['displaysize'];
            $screentype=$_POST['screentype'];
            $hdtechres=$_POST['hdtechres'];
            $smarttv=$_POST['smarttv'];
            $motionsensor=$_POST['motionsensor'];
            $hdmi=$_POST['hdmi'];
            $usb=$_POST['usb'];
            $wifi=$_POST['builtinwifi'];
            $launchyear=$_POST['launchyear'];
            
            $conn= mysqli_connect("localhost","root","","eshopdb");
            $qry = "insert into tvspecification(pid,in_the_box,color,display_size,screen_type,hd_tech_res,smart_tv,motion_sensor,hdmi,usb,built_in_wifi,launch_year) values('$pid','$inbox','$color','$display','$screentype','$hdtechres','$smarttv','$motionsensor','$hdmi','$usb','$wifi','$launchyear')";
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
            .tvdesc{
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
            <div class="tvdesc">
                <form method="post">
                    <table cellspacing="10" style="margin-left: 300px; margin-top: 30px; border: 1px hidden; box-shadow: 2px 2px 5px gray;">
                        <tr>
                            <td style="text-align: center; color: maroon;" colspan="2">
                                <h2>TV Description</h2>
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
                                <label>In The Box</label>
                            </td>
                            <td>
                                <input type="text" name="inthebox" required>
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
                                <label>Display Size</label>
                            </td>
                            <td>
                                <input type="text" name="displaysize" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Screen Type</label>
                            </td>
                            <td>
                                <input type="text" name="screentype" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>HD Tech Res</label>
                            </td>
                            <td>
                                <input type="text" name="hdtechres" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Smart TV</label>
                            </td>
                            <td>
                                <input style="width: 20px;" type="radio" name="smarttv" required><label>Yes</label>
                                <input style="width: 20px;" type="radio" name="smarttv" required><label>NO</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Motion Sensor</label>
                            </td>
                            <td>
                                <input style="width: 20px;" type="radio" name="motionsensor" required><label>Yes</label>
                                <input style="width: 20px;" type="radio" name="motionsensor" required><label>NO</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>HDMI</label>
                            </td>
                            <td>
                                <input type="text" name="hdmi" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>USB</label>
                            </td>
                            <td>
                                <input type="text" name="usb" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Built in WI-FI</label>
                            </td>
                            <td>
                                <input style="width: 20px;" type="radio" name="builtinwifi" required><label>Yes</label>
                                <input style="width: 20px;" type="radio" name="builtinwifi" required><label>NO</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Launch Year</label>
                            </td>
                            <td>
                                <input type="number" name="launchyear" required>
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