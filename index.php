<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2023 Honda Motorcycle</title>
    <style>
        body{
            background-image: url("https://cdn.motor1.com/images/mgl/pbjBQv/s3/2023-kawasaki-ninja-zx-4rr---right-side-2.jpg");
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #form{
            background-color: transparent;
            width:50%;
            border-radius: 4px;
            margin: 250px auto;
            padding:50px;
        }

        @media screen and (max-width: 570px) {
            #form {
            width: 65%;
            margin-left:none;
            padding:40px;
            }
        }
        table{
            border: 1;
            width: 90%;
        }
        td{
            text-align: center;
            vertical-align: center;
        }
        img{
            max-width: 200px;
        }
        
    </style>
</head>
<body>
    <div id="form">
        <center><h1 style = "color : white; font-family : times; font-size : 50px">The 2023 Honda Motorcycle Lineup</h1></center>
        <form name="form" action="add.php" onsubmit="return isvalid()" method="POST">
            <a href="add.php" ><button style = "font-size : 18px; background-color: #C7AD7F ">Add</button></a><br><br>
            <center><table style = "font-size : 20px; font-family : Calibri" border="1" width="">
            <tr align = "center" bgcolor = "#CC9767" >
                <td style="width: 30%" ><b>Photo</td>
                <td><b>Model</td>
                <td><b>Price</td>
                <td><b>CC</td>
                <td style="width:25%" colspan="2"><b>Action</td>
            </tr>
            <?php
            $data = $db->retrieve("film");
            $data = json_decode($data, 1);
            
            if(is_array($data)){
                foreach($data as $id => $film){
                    echo "<tr style = 'color : darkgrey'>
                    <td><img src='{$film['thumbnail']}'></td>
                    <td>{$film['title']}</td>
                    <td>{$film['year']}</td>
                    <td>{$film['rating']}</td>
                    <td><a href='edit.php?id=$id' class='btn btn-primary' role='button' >Edit</a></td>
                    <td><a href='delete.php?id=$id' class='btn btn-primary' role='button'>Delete</a></td>
                </tr>";
                }
            }
            ?>
            </table>
        </center>
        </form>
    </div>
</body>
</html>