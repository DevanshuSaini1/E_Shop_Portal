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
            body{
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            .content{
                display: flex;
                flex-direction: row;
            }
            .image{
                margin-left: 0px;
            }
            .highlights{
                flex-direction: column;
            }
            .addtocart{
                background-color: lightgreen;
                width: 100px;
                height: 26px;
                padding: 3px;
            }
        </style>
    </head>
    <body>
        <?php include './Header.php';?>
        <?php
        $pid=$_GET['pid'];
        $conn = mysqli_connect("localhost","root","","eshopdb");
        $qry1="select * from productmaster where pid=$pid";
        $qry2="select * from tvspecification where pid=$pid";
        $result1= mysqli_query($conn,$qry1);
        $result2= mysqli_query($conn,$qry2);
        $row1= mysqli_fetch_array($result1);
        $row2= mysqli_fetch_array($result2);
        echo"<div class='content'>";
        echo"<div>";
        echo"<div class='image'><img src='$row1[4]' width='px' height='px'></div>";
        echo"<div><div><h3>$row1[1]</h3></div></div>";
        echo"</div>";
        echo"<div>";
        echo"<div><div><h2 style='text-decoration:underline'>$row1[1]</h2></div></div>";
        echo"<div><div><b>Price : $row1[2]</b></div></div>";
        echo"<br>";
        echo"<div><div><b>Color : </b>$row2[2],<b> Display : </b>$row2[3], <b>HD Technology and Resolution :</b> $row2[5]</div></div>";
        echo"<div><div><b>Launch Year : </b>$row2[11]</div></div>";
        echo"<br>";
        echo"<div><div class='addtocart'><a style= 'margin-left:5px; text-decoration: none; color:white; font-family: cursive;' href='mycart.php?pid=$row1[0]&type=$row1[3]'>Add to Cart</a></div></div>";
        echo"</div>";
        echo"</div>";
        echo"<div class='highlights'>";
        echo"<div><div><h2>Specification:-</h2></div></div>";
        echo"<table cellspacing='10' width='100%'>";
        echo "<tr><td><b>In The Box</b></td>
            <td>$row2[1]</td>
            </tr>";
        echo "<tr><td><b>Color</b></td>
            <td>$row2[2]</td>
            </tr>";
        echo "<tr><td><b>Display Size</b></td>
            <td>$row2[3]</td>
            </tr>";
        echo "<tr><td><b>Screen Type</b></td>
            <td>$row2[4]</td>
            </tr>";
        echo "<tr><td><b>HD Technology and Resolution</b></td>
            <td>$row2[5]</td>
            </tr>";
        echo "<tr><td><b>Smart TV</b></td><td>";
        if($row2[6]==0)
            echo "Yes";
        else
            echo "No";
        echo "</td></tr>";
        echo "<tr><td><b>Motion Sensor</b></td><td>";
        if($row2[7]==0)
            echo "No";
        else
            echo "Yes";
        echo "</td></tr>";
        echo "<tr><td><b>HDMI</b></td>
            <td>$row2[8]</td>
            </tr>";
        echo "<tr><td><b>USB</b></td>
            <td>$row2[9]</td>
            </tr>";
        echo "<tr><td><b>Built in WI-FI</b></td><td>";
        if($row2[10]==0)
            echo "No";
        else
            echo "Yes";
        echo "</td></tr>";
        echo "<tr><td><b>Launch Year</b></td>
            <td>$row2[11]</td>
            </tr>";
        echo"</table>";
        echo"</div>";
             
        ?>
        <?php include './Footer.php';?>
    </body>
</html>
