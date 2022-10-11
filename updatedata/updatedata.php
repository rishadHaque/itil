<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Information</title>

    <style>
        *{
            /*background: radial-gradient(circle, rgba(23, 46, 45, 1) 0%, rgba(51, 25, 51, 1) 72%);*/
            font-family: Calibri;
            /*background: radial-gradient(circle, rgba(23, 46, 45, 1) 0%, rgba(51, 25, 51, 1) 72%);*/
            background-color: #C7E4EE;
        }
        a{
            outline:none;
        }

        .bg-color{
            background-color: #C7E4EE !important;
        }

        label{
            color: #dddddd;
        }
        .topnav {
            position: relative;
            overflow: hidden;
            /*background-color: #333;*/
        }

        .topnav a {
            float: left;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            /*background-color: #333;*/
        }

        .topnav a:hover {
            color: lightgreen;
        }

        .topnav a.active {
            color: royalblue;
        }

        .topnav-right {
            float: right;
        }
        .three {

            width: 19%;
            height: 390px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 25px;
            color: white;
            font-family: Calibri;
        }
        input{
            background-color: white;
            width: 95%;margin: 5px;box-sizing: border-box;padding: 10px 10px;border-radius: 5px;
        }

        input[type=text]:focus {
            /*background-color: white;*/
            border: 1px solid cornflowerblue;
        }

        button{
            background: white;
            border-radius: 6px;
        }
        .buttonx {
            height: 50px;
            position: relative;
        }



        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        #x, #y, #z, #zx {
            display: inline-block;
            width: 90%;
            text-align: center;
        }


    </style>
</head>
<body>
<!--    --><?php
//    $con = mysqli_connect("localhost","root","");
//    if (!$con)
//    {
//        die('Could not connect: ' . mysqli_error());
//    }
//    mysqli_select_db( $con,"itil");
//    $sql = "SELECT * FROM '$_GET[íd]'";
//    $result = mysqli_query($con,$sql);
//
//    ?>

    <?php
    include '../dbconnect.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM uinfo where id='$id'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    ?>

    <div class="bg-color">
    <div class="topnav">

        <div class="topnav-centered">
            <a href="../infinityresponsiveness.php" class="active">Home</a>
        </div>

        <a href="../contact/contact.php">Contact</a>

        <div class="topnav-right">
            <button id="buttonnav" style="border-radius: 6px;background-color: black"><a href="../readdata/readdata.php">View Information</a></button>
        </div>

    </div>


    <h1 class="bg-color" style="margin-top:20px;margin-left: 530px;color: darkkhaki;margin-top: 50px;font-family: Calibri">UPDATE EMPLOYEE INFORMATION</h1>
        <div class="three bg-color">
            <form action="updatedatasql.php" method="post">

                <input type="hidden" id="id" name="id" value="<?php echo $row['id'];?>"><br>
                <label id="x" for="name" style="margin: 0;padding: 0;">Name</label><br>
                <input type="text" id="name" name="name" value="<?php echo $row['name'];?>"><br>
                <label id="y" for="email">Email</label><br>
                <input type="text" id="email" name="email" value="<?php echo $row['email'];?>"><br>
                <label id="z" for="phone">Phone</label><br>
                <input type="text" id="phone" name="phone" value="<?php echo $row['phone'];?>"><br>
                <label id="zx" for="address">Address</label><br>
                <input type="text" id="address" name="address" value="<?php echo $row['address'];?>"><br>
                <label id="z" for="phone">Designation</label><br>
                <input type="text" id="phone" name="icomment" value="<?php echo $row['icomment'];?>"><br>
                <div class="buttonx">
                    <div class="center">
                        <button class="x" style="margin-right: 5px;">Submit</button>
                    </div>
                </div>
            </form>
            <div class="buttonx">
                <div class="center">
                    <a href="../readdata/readdata.php"><button>Cancel</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>