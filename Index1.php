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
            .tvdesc{
                text-decoration: none;
            }
            .mobiledesc{
                text-decoration: none;
            }
        </style>
        <script>
           var i=0;
            var arr=["Images/a.jpg","Images/b.jpg","Images/c.jpg","Images/d.jpg","Images/e.jpg","Images/j.jpg"];
            function changeimage(){
                if(i<6){
                    document.images[0].src=arr[i];
                    i++;
                }
                else
                    i=0;
            };
            function startslider(){
                setInterval(changeimage,2000);
            };
        </script>
    </head>
    <body onload="startslider()">
        <?php include './Header.php';?>
        <main>
            <div>
                <img style="width: 100%; height: 300px;" src="Images/j.jpg">
            </div>
            <h2>Television:-</h2>
            <?php
            $conn = mysqli_connect("localhost","root","","eshopdb");
            $qry = "select * from productmaster where ptype='TV' and pid in (15014,15016,15018,15015) ";
            $result = mysqli_query($conn, $qry);
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
                                    echo "<div class='datacolumn'><a class='tvdesc' href='tvspec.php?pid=$r[pid]'><img src='$r[pimage]' width='200px' height='130px' /></a></div>";
                                echo "</div>";
                                echo"<div class='row1'>";
                                    echo "<div class='datacolumn'><a class='tvdesc' href='tvspec.php?pid=$r[pid]'>$r[pname]</a></div>";
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
                mysqli_close($conn)
            ?>
            <h2>Mobile:-</h2>
            <?php
            $con = mysqli_connect("localhost","root","","eshopdb");
            $qry = "select * from productmaster where ptype='Mobile' and pid in (15001,15005,15008,15010)";
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
                mysqli_close($con)
            ?>
        </main>
        <?php include './Footer.php';?>
    </body> 
</html>
