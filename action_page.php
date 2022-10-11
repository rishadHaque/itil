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
            width: 400px;
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

            <img src="man.png" style="width:150px;" class="center">


        <table style="width: 100%;text-align: center;border-radius: 5px;">
            <tr>
                <th style="width: 100%;" colspan="2"><?php  echo $_POST["name"];?> Information</th>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php  echo $_POST["name"];?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php  echo $_POST["email"];?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php  echo $_POST["phone"];?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php  echo $_POST["address"];?></td>
            </tr>
            <tr>
                <th style="width: 100%;" colspan="2"><a style="text-decoration: none;background-color: #96D4D4;" class="center" href="infinityresponsiveness.php">Back To Home</a></th>
            </tr>
        </table>


    </div>



</body>
</html>