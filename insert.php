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

    <img src="img/information.png" style="width:150px;" class="center">



    <?php

    if (isset($_POST['submit'])){
        $file = $_FILES['image'];
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];
         $fileExt = explode('.',$fileName);

        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png','pdf');

        if (in_array($fileActualExt,$allowed)) {
            if ($fileError == 0){
                if ($fileSize < 1000000 ) {
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination ='uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    $con = mysqli_connect("localhost","root","");
                    if (!$con)
                    {
                        die('Could not connect: ' . mysqli_error());
                    }
                    mysqli_select_db( $con,"itil");
                    $sql="INSERT INTO uinfo (name, email, phone,address,icomment,image) VALUES('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[address]','$_POST[icomment]','$fileDestination')";

                    if (!mysqli_query($con,$sql))
                    {
                        die('Error: ' . mysqli_error());
                    }
                    //print_r($_POST);
                    echo "<h1>New record added Successfully</h1>";
                    mysqli_close($con);
                }else {
                    echo "Your file is too big";
                }

            }else {
                echo " There was an error uploading this file";
            }
        }else{
            echo "You cannot upload files of ".$fileActualExt." type";
        }

    }
    ?>

    <script>
        window.setTimeout(function() {
            window.location = 'infinityresponsiveness.php';
        }, 3000);
    </script>


</div>



</body>
</html>