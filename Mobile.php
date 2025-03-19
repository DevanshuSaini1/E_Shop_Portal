<?php
    session_start();
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
            .row{
                display: flex;
                flex-direction: row;
                height: 250px;
                margin-top: 5px;
            }
            .column{
                width: 25%;
                min-height: 250px;
            }
            .row1{
                display: flex;
                flex-direction: column;
                min-height: 50px;
            }
            .datacolumn{
                width: 100%;
            }
            .product:hover{
                border: 1px solid black;
                box-shadow: 5px 5px 4px gray;
            }
            .mobiledesc{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php include './Header.php';?>
        <main>
            <?php
            $con = mysqli_connect("localhost","root","","eshopdb");
            $qry = "select * from productmaster where ptype='Mobile'";
            $result = mysqli_query($con, $qry);
            if(mysqli_num_rows($result)>0)
            {
                $count = 0;
                while($r = mysqli_fetch_assoc($result)){
                    if($count==0)
                        echo "<div class='row'>";
                        $count++;
                        echo "<div class='column' align='center'>";
                            echo "<div class='product'>";
                                echo "<div class='row1'>";
                                    echo "<div class='datacolumn'><a class='mobiledesc' href='mobspec.php?pid=$r[pid]'><img src='$r[pimage]' width='80px' height='130px' /></a></div>";
                                echo "</div>";
                                echo"<div class='row1'>";
                                    echo "<div class='datacolumn'><a class='mobiledesc' href='mobspec.php?pid=$r[pid]'>$r[pname]</a></div>";
                                echo "</div>";
                                echo"<div class='row1'>";
                                    echo "<div class='datacolumn'>Rs. $r[pprice]</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        
                        if($count==4){
                            echo "</div>";
                            $count=0;
                        }
                    }
                }
                else{
                    echo "<h2>No Product Found!!!</h2>";
                }
                mysqli_close($con)
            ?>
        </main>
        <?php include './Footer.php';?>
    </body>
</html>
