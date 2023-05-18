<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <style>
        body{
            background-image: url("https://young-machine.com/main/wp-content/uploads/2019/10/000a-11.jpg");
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
    </style>
</head>
<body>
    <div id="form">
        <center><h1 style = "font-family : times; font-size : 50px">Coffee</h1></center>
         <a href="index.php"><button style = "font-size : 18px; background-color: #C7AD7F">Back</button></a><br><br>
   
         <form method="post" action="action_add.php">

               <center><table style = "font-size : 22px; font-family : Calibri" border="0" width="200">
               <tr>
                  <td style = "color : #39FF14">Model</td>
                  <td>:</td>
                  <td><input style = "font-size : 18px; font-family : Calibri" type="text" name="title"></td>
               </tr>
               <tr>
                  <td style = "color : #39FF14">Photo</td>
                  <td>:</td>
                  <td><input style = "font-size : 18px; font-family : Calibri" type="text" name="thumbnail"></td>
               </tr>
               <tr>
                  <td style = "color : #39FF14">Price</td>
                  <td>:</td>
                  <td><input style = "font-size : 18px; font-family : Calibri" type="text" name="year"></td>
               </tr>
               <tr>
                  <td style = "color : #39FF14">CC</td>
                  <td>:</td>
                  <td><input style = "font-size : 18px; font-family : Calibri" type="text" name="rating"></td>
               </tr>
            </table><br><br>
            <center><input style = "font-size : 18px; background-color: #C7AD7F" type="submit" value="Save"></center>
         </form>
    </div>
</body>
</html>