<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viewing Data</title>
</head>
<body>
    <?php
        $con = mysqli_connect("localhost","root","");
        if (!$con)
        {
        die('Could not connect: ' . mysqli_error());
        }
        mysqli_select_db( $con,"itil");
        $sql = "SELECT * FROM imginfo";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)){
            echo  "<img src=".$row['imgname'].">";
        }
        mysqli_close($con);

    ?>
</body>
</html>