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
            table{
                 margin-top: 50px;
                 margin-left: 500px;
                 border: 1px hidden;
                 box-shadow: 2px 2px 5px gray;
            }
        </style>
    </head>
    <body>
        <?php include './Header.php';?>
        <main>
            <?php
            session_start();
                $msg="";
                if(isset($_POST['signin'])){
                    $uname=$_POST['username'];
                    $pwd=$_POST['pwd'];
                    $conn= mysqli_connect("localhost","root","","eshopdb");
                    $result = mysqli_query($conn,"select * from usermaster where user_email='$uname'and user_pwd='$pwd'" );
                    if(mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_array($result);
                        if(isset($_POST['rememberme']))
                        {
                            setcookie("cookie1",$uname,time()+60*60*24);
                            setcookie("cookie2",$uname,time()+60*60*24);
                        }
                        $_SESSION['uid']=$row[0];
                        $_SESSION['uname']=$row[1];
                        $_SESSION['role']=$row[7];
                        header("location:Index1.php");
                    }
                    else{
                        $msg="<font color='red'>Invalid Username or Password!!";
                    }
                    mysqli_close($conn);
                }
            ?>
            <div class="signintable">
                <form method="post">
                    <table cellspacing="15">
                        <tr>
                            <td style="text-align: center; color: maroon;" colspan="2">
                                <h2>User Login</h2>
                                <div style="background-color: maroon; height: 4px;"></div>
                            </td>
                        <tr>
                            <td>
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Enter Username" value="<?php
                                if(isset($_COOKIE['cookie1'])){
                                    echo $_COOKIE['cookie1'];
                                }
                                ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Password</label>
                                <input style="margin-left: 30px;" type="password" name="pwd" placeholder="Enter Password" value="<?php
                                if(isset($_COOKIE['cookie2'])){
                                    echo $_COOKIE['cookie2'];
                                }
                                ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input style="margin: 0px; width: 30px;" type="checkbox" name="rememberme">
                                <label>Remember Me!</label>
                            </td>   
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input  style="width: 470px; ; margin: 0px; background-color: turquoise; color: white; " type="submit" name="signin" value="Sign In">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a style="text-decoration: none; color: maroon;" href="#">
                                    Forgot Password Click Here!!
                                </a>
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
        </main>
        <?php include './Footer.php';?>
    </body>
</html>
