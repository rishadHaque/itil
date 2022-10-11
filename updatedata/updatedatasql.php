<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  echo $_POST["name"];?></title>

    <style>
        *{
            background-color: aliceblue;
            font-family: Calibri;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .userinfo{
            /*background-color: crimson;*/
            width: 414px;
            height: 200px;
            margin: 200px 300px 300px 550px;
        }
        th{
            border-radius: 5px 5px;
        }

        table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
        }
        th, td {
            background-color: #96D4D4;
        }
    </style>
</head>
<body>
<div class="userinfo">

    <img src="../img/information.png" style="width:150px;" class="center">


    <?php
    include '../dbconnect.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $icomment = $_POST['icomment'];
    $sql = "UPDATE uinfo SET name='$name',email='$email',phone='$phone',address='$address',icomment='$icomment'  WHERE id='$id'";
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error());
    }
    echo "<h1 style='margin-left: 40px'>Data Updated Successfully</h1>";
    mysqli_close($con)
    ?>

    <script>
        window.setTimeout(function() {
            window.location = '../readdata/readdata.php';
        }, 3000);
    </script>


</div>



</body>
</html>