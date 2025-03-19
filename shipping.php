<?php
    session_start();
    if(!isset($_SESSION['uname']))
    {
        header("location:signin.php");
    }
    $msg="";
    if(isset($_POST['ordernow']))
    {
        $userid=$_SESSION['uid'];
        $pid=$_COOKIE['cart'];
        $date=date("Y-m-d");
        $amount=$_SESSION['total'];
        $address=$_POST['name'].",".$_POST['address'];
        $mode=$_POST['paymode'];
        $status="Undelivered";
        $conn = mysqli_connect("localhost","root","","eshopdb");
        $qry = "insert into orders(user_id,pid,order_date,amount,address,payment_status,status) values($userid,'$pid','$date',$amount,'$address','$mode','$status')";
        mysqli_query($conn,$qry);
        if(mysqli_affected_rows($conn)>0)
        {
            $msg="<h2 style='color:green;'>Order Placed Sucessfully!!</h2>";
            setcookie("cart","");
        }
        else
            $msg="<h2 style='color:red;'>Order not Placed. Try Again!!</h2>";
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
        <script type="text/javascript" src="validation.js"></script>
        <script>
            Validate=()=>{
            flag=true;
                Name=document.getElementById("t1").value;
                obj=document.getElementById("a1");
                if(!isEmpty(Name,obj))
                    flag=false;
                
                        return flag;
                    }
                    
        </script>
        <style>
            .shippingform{
                display: flex;
            }
            #a1{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php include './Header.php';?>
        <main>
            <div class="shippingform">
                <form method="post" onsubmit="return Validate()">
                    <table cellspacing="10" style="margin-left: 450px; margin-top: 130px; border: hidden; box-shadow: 1px 1px 4px gray;">
                        <tr>
                            <td style="text-align: center; color: maroon;" colspan="2">
                                <h2>Shipping Details</h2>
                                <div style="background-color: maroon; height: 4px;"></div>
                            </td>
                        <tr>
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input style="margin-left: 0px;" type="text" name="name" id="t1">
                            </td>
                            <td><label id="a1"></label></td>
                        </tr>
                        <tr>
                            <td>
                                <label>Address</label>
                            </td>
                            <td>
                                <textarea required style="padding: 5px;"  id="address" name="address" rows="8" cols="46"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Payment Mode</label>
                            </td>
                            <td>
                                <select required  style="margin-left: 0px; height: 30px; width: 364px;" name="paymode" style="margin-left: 25px; width: 363px; height: 32px;">
                                    <option></option>
                                    <option>Cash on Delivery</option>
                                    <option>Credit Card</option>
                                    <option>Debit Card</option>
                                    <option>Internet Banking</option>
                                    <option>UPI</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input  style="width: 550px; ; margin: 0px; background-color: turquoise; color: white; " type="submit" name="ordernow" value="Order Now">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <?php echo $msg; ?>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </main>
        <?php include './Footer.php';?>
    </body>
</html>
