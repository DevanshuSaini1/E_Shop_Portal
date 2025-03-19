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
    if(isset($_POST['adduser'])){
            $name=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['pwd'];
            $gender=$_POST['gender'];
            $mobile=$_POST['number'];
            $dob=$_POST['dob'];
            $role=$_POST['role'];
            
            $conn= mysqli_connect("localhost","root","","eshopdb");
            $qry = "insert into usermaster(user_name,user_email,user_pwd,user_gender,user_mobile,user_dob,role) values('$name','$email','$password','$gender',$mobile,'$dob','$role')";
        mysqli_query($conn, $qry);
        if(mysqli_affected_rows($conn)>0)
            $msg = "User Added Successfully !!";
        else
            $msg = "User Not Added !!";
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
                
                
                email=document.getElementById("t2").value;
                ob=document.getElementById("a2");
                if(isEmpty(email,ob)){
                    if(!validateEmail(email,ob))
                        flag=false;
                }
                else
                    flag=false;
                
                
                pwd=document.getElementById("t3").value;
                ob=document.getElementById("a3");
                if(isEmpty(pwd,ob)){
                    if(!validatePassword(pwd,ob))
                    flag=false;
                }
                else
                    flag=false;
                
                cpwd=document.getElementById("t4").value;
                ob=document.getElementById("a4");
                if(!isEmpty(cpwd,ob))
                    flag=false;
                if(pwd.length>0 && cpwd.length>0){
                    if(!comparePassword(pwd,cpwd,ob))
                        flag=false;
                }
                
                
                mobile=document.getElementById("t5").value;
                ob=document.getElementById("a5");
                if(isEmpty(mobile,ob)){
                    if(!validateNumber(mobile,ob))
                        flag=false;
                }
                else{
                    flag=false;
                }
                        return flag;
                    }
                    
        </script>
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
            .addnewuser{
                flex: 6;
            }
            .admintable{
                background-color: white;
                margin: 5px 5px 5px 5px;
            }
            #a1,#a2,#a3,#a4,#a5{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php include './Header.php';?>
        <main>
        <div class="admin">
            <div class="adminarea">
                <table  class="admintable" cellspacing="3">
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
            <div class="addnewuser">
                <form method="post" onsubmit="return Validate()">
                    <table cellspacing="20" style="margin-left: 300px; margin-top: 25px; border: 1px hidden; box-shadow: 2px 2px 5px gray;">
                        <tr>
                            <td style="text-align: center; color: maroon;" colspan="2">
                                <h2>Add New User</h2>
                                <div style="background-color: maroon; height: 4px;"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" name="username" placeholder="Enter Username" id="t1">
                            </td>
                            <td><label id="a1"></label></td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email Id</label>
                            </td>
                            <td>
                                <input type="email" name="email" placeholder="Enter Email Id" id="t2">
                            </td>
                            <td><label id="a2"></label></td>
                        </tr>
                        <tr>
                            <td>
                                <label>Password</label>
                            </td>
                            <td>
                                <input type="password" name="pwd" placeholder="Enter Password" id="t3">
                            </td>
                            <td><label id="a3"></label></td>
                        </tr>
                        <tr>
                            <td>
                                <label>Confirm Password</label>
                            </td>
                            <td>
                                <input type="password" name="conirmpwd" placeholder="Confirm Password" id="t4">
                            </td>
                            <td><label id="a4"></label></td>
                        </tr>
                        <tr>
                            <td>
                                <label>Gender</label>
                            </td>
                            <td>
                                <select required name="gender" style="margin-left: 25px; width: 363px; height: 32px;">
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Mobile Number</label>
                            </td>
                            <td>
                                <input type="number" name="number" placeholder="Enter Mobile Number" id="t5">
                            </td>
                            <td><label id="a5"></label></td>
                        </tr>
                        <tr>
                            <td>
                                <label>Date of Birth</label>
                            </td>
                            <td>
                                <input type="date" name="dob" min="1945-07-31" max="2005-07-31" required >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>User Type (Role)</label>
                            </td>
                            <td>
                                <select required name="role" style="margin-left: 25px; width: 363px; height: 32px;">
                                    <option></option>
                                    <option>Admin</option>
                                    <option>Client</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input  style="width: 550px; ; margin: 0px; background-color: turquoise; color: white; " type="submit" name="adduser" value="Add User">
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
