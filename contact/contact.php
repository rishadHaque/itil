<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Information</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Calibri;
            /*background: radial-gradient(circle, rgba(23, 46, 45, 1) 0%, rgba(51, 25, 51, 1) 72%);*/
        }

        a{
            outline:none;
        }

        /*Navbar Design*/

        .topnav {
            position: relative;
            overflow: hidden;
            /*background-color: #333;*/
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
            /*background-color: #ddd;*/
            color: greenyellow;
        }

        .topnav a.active {
            /*background-color: #04AA6D;*/
            color: white;
        }

        .topnav-right {
            float: right;
        }

        /* Responsive navigation menu (for mobile devices) */
        @media screen and (max-width: 600px) {
            .topnav a, .topnav-right {
                float: none;
                display: block;
            }
        }

        /*Navbar Design*/


        @media only screen and (max-width: 620px) {
            .one, .two, .three {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body style="background: radial-gradient(circle, rgba(23,46,45,1) 0%, rgba(51,25,51,1) 72%)">
<div class="topnav" >

    <div class="topnav-centered">
        <a href="../infinityresponsiveness.php" class="active">Home</a>
    </div>

    <a href="../contact/contact.php">Contact</a>

    <div class="topnav-right">
        <button id="buttonnav" style="border-radius: 6px;background-color: black"><a href="../readdata/readdata.php">View Employee Information</a></button>

    </div>

</div>

<div style="margin-top:200px;text-align: center;padding: 2px;color: white;background: rgb(23,46,45);
                background: radial-gradient(circle, rgba(23,46,45,1) 0%, rgba(51,25,51,1) 72%);">
    <h3>Contact Information</h3>
    <p>Address: Shamsuddin Mansion | Mobile: 01717607343</p>
    <p style="padding-left: 15px;padding-right:15px;text-align: justify;text-justify: inter-word;margin-left: 380px">
        Note: Every information is justified by our dedicated team members. We will reponse to you as early as
        possbile.
    </p>
</div>



</body>
</html>
