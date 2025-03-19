<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .logoutbtn:hover{
                font-family: Georgia, 'Times New Roman', Times, serif;
                background-color: black;
                border: hidden;
                box-shadow: 2px 2px 5px white;
                color: white;
                width: 70px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="subcotainer">
                <ul style="margin-top: 7px;">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li style="color: white; font-weight: bold;"><?php
                            if(isset($_SESSION['uname'])){
                                echo "(Welcome $_SESSION[uname])";
                            }
                    ?></li>
                </ul>
                
            </div>
            <div class="container1">
            <div class="subcontainer1">
                <h2 style="margin-top: 10px;">E-Shop</h2>
                
            </div>
            <div class="subcontainer2">
                <ul style="margin-top: 15px;">
                    <li><a href="Index1.php">Home</a></li>
                    <li><a href="Television.php">Television</a></li>
                    <li><a href="Mobile.php">Mobile</a></li>
                    <?php
                        if(!isset($_SESSION['uname'])){
                            echo "<li><a href='Signin.php'>Sign In</a></li>";
                        }
                    ?>
                    <li><a href="Signup.php">Sign Up</a></li>
                    <li><a href="Cart.php">Cart <?php
                    if(isset($_COOKIE['cart']))
                    {
                        $data=$_COOKIE['cart'];
                        $arr= explode(",",$data);
                        echo "<div style='width:50px; color:black; background-color:yellow;border-radius:5px; display:inline;'>".count($arr)."</div>";
                    }
                    ?></a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <?php
                        if(isset($_SESSION['role'])){
                            if($_SESSION['role']=='Admin'){
                                echo "<li><a href='Admin.php'>Admin</a></li>";
                            }
                        }
                    ?>
                    <?php
                        if(isset($_SESSION['uname'])){
                            echo "<li><a class='logoutbtn' href='logout.php'>Logout</a></li>";
                        }
                    ?>
                </ul>
            </div>
            </div>
            
        </div>
    </body>
</html>
