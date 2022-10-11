
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registered Information</title>

    <style>
        *{
            font-family: Calibri;
        }

        a{
            outline:none;
        }

        .topnav {
            position: relative;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            color: greenyellow;
        }



        .topnav a.active {
            color: white;
        }

        .topnav-right {
            float: right;
        }

        .userinfo{
            margin-right: 50px;
            margin-left: 100px;
       }

        .cv {
            color: black;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            /*margin: 4px 2px;*/
            cursor: pointer;
            border-radius: 4px;
            margin-left: 6px;
        }

        .cardsx{
            transition: transform .2s;
        }
        .cardsx:hover {
            transform: scale(1.3);
        }

    </style>
</head>
<body style="background-color: #333333">

<div class="topnav">

    <div class="topnav-centered">
        <a href="../infinityresponsiveness.php" class="active">Home</a>
    </div>

    <a href="../contact/contact.php">Contact</a>

    <div class="topnav-right">
        <button id="buttonnav" style="border-radius: 6px;background-color: black"><a href="readdata.php">View Employee Information</a></button>

    </div>

</div>
<h1 style="margin-left: 550px;color: darkkhaki;margin-top: 50px">LIST OF EMPLOYEE INFORMATION</h1>
<div class="userinfo">


    <?php
    $con = mysqli_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db( $con,"itil");
    $sql = "SELECT * FROM uinfo";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
    {
    ?>
    <div class="cardsx" style="float: left">
        <div class="cards" style="margin-left: 15px;width: 200px;height: 240px;background: radial-gradient(circle, rgba(23,46,45,1) 0%, rgba(51,25,51,1) 72%);box-shadow: 4px 6px 16px gray;border-radius: 11px;">
            <div style="text-align: center;margin-top: 10px;">
                <img style="margin-top: 6px;width: 100px;height: 100px;border-radius: 50px;" src="../<?php echo $row['image']?>">
<!--                <p style="margin-top: 0;margin-bottom: 0;color: white">ID: --><?php //echo $row['id'] ?><!--</p>-->
                <h5 style="margin-top: 0;margin-bottom: 0;color: white"><?php echo $row['name'] ?></h5>
                <h6 style="margin-top: 0;margin-bottom: 0;color: white"><?php echo $row['icomment'] ?></h6>
                <h6 style="margin-top: 0;margin-bottom: 0;color: white"><?php echo $row['phone'] ?></h6>
                <h6 style="margin-top: 0;margin-bottom: 0;color: white"><?php echo $row['email'] ?></h6>
                <h6 style="margin-top: 0;margin-bottom: 0;color: white"><?php echo $row['address'] ?></h6>
                <p></p>
                <?php
                    echo      "<button class='cv'><a style='text-decoration: none;' href='../updatedata/updatedata.php?id=".$row["id"]."'>Edit</a></button>";
                    echo      "<button class='cv'><a style='text-decoration: none;' href='../deletedata/deletedata.php?id=".$row["id"]."'>Delete</a></button>";
                ?>
            </div>
        </div>
    </div>


    <?php
        }
    mysqli_close($con);
    ?>

</div>
</body>
</html>





