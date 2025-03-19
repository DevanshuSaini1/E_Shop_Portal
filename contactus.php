<?php
    session_start();
    $msg="";
    if(isset($_POST['feedback'])){
            $name=$_POST['username'];
            $email=$_POST['email'];
            $mobile=$_POST['pnumber'];
            $query=$_POST['query'];
            $date= date("Y-m-d");
            
            $conn= mysqli_connect("localhost","root","","eshopdb");
            $qry = "insert into contactus(name,email,phoneno,message,date) values('$name','$email','$mobile','$query','$date')";
        mysqli_query($conn, $qry);
        if(mysqli_affected_rows($conn)>0)
            $msg = "Query Sent Successfully !!";
        else
            $msg = "Query Not Sent!!";
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
                
                
                mobile=document.getElementById("t3").value;
                ob=document.getElementById("a3");
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
            .contactus{
                display: flex;
            }
            input{
                margin: 0px;
            }
            .query{
                padding: 5px;
            }
            #a1,#a2,#a3{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php include './Header.php';?>
        <main>
            <div class="contactus">
                <form method="post" onsubmit="return Validate()">
                    <table cellspacing="20" style="margin-left: 50px; margin-top: 60px; border: 1px solid black; box-shadow: 2px 2px 5px gray; height: 487px;">
                        <tr>
                            <td style="text-align: center; color: maroon;" colspan="2">
                                <h2>Query/Feedback Form</h2>
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
                                <label>Phone Number</label>
                            </td>
                            <td>
                                <input type="number" name="pnumber" placeholder="Enter Phone Number" id="t3">
                            </td>
                            <td><label id="a3"></label></td>
                        </tr>
                        <tr>
                            <td>
                                <label>Query/Feedback</label>
                            </td>
                            <td>
                                <textarea class="query" required id="query" name="query" rows="8" cols="40"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input  style="width: 550px; ; margin: 0px; background-color: turquoise; color: white; " type="submit" name="feedback" value="Send">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo $msg; ?>
                            </td>
                        </tr>
                    </table>
                </form>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28561.936379176917!2d80.21230063476561!3d26.512338799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c3701c4a8be71%3A0x3afbe880abc38436!2sIndian%20Institute%20of%20Technology%20Kanpur!5e0!3m2!1sen!2sin!4v1688901918947!5m2!1sen!2sin" width="750" height="350" style="border:1; margin-left: 70px; margin-top: 60px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div>
                        <table style="border: 1px hidden; box-shadow: 1px 1px 4px gray; margin-left: 70px; margin-top: 20px; padding: 5px; width: 752px;">
                            <tr>
                                <th style=" float: left;">
                                    Organization Name: IIT Kanpur
                                </th>
                            </tr>
                            <tr>
                                <th style=" float: left;">
                                    Web Site: <a style="text-decoration: none;" href="https://www.iitk.ac.in/" target="_blank">https://www.iitk.ac.in/</a>
                                </th>
                            </tr>
                            <tr>
                                <th style=" float: left;">
                                    Visit Us:
                                </th>
                            </tr>
                            <tr>
                                <th style=" float: left;">
                                    IIT Kanpur
                                </th>
                            </tr>
                            <tr>
                                <th style=" float: left;">
                                    G66M+W5J, Kalyanpur, Kanpur, Uttar Pradesh 208016
                                </th>
                            </tr>
                        </table>
<!--                        Organisation Name: IIT Kanpur <br>
                        Web Site: <a href="https://www.iitk.ac.in/" target="_blank">https://www.iitk.ac.in/</a><br>
                        Visit Us:<br>
                        IIT Kanpur<br>
                        G66M+W5J, Kalyanpur, Kanpur, Uttar Pradesh 208016-->
                    </div>
                </div>
            </div>
        </main>
        <?php include './Footer.php';?>
    </body>
</html>
