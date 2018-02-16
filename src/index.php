
<?php
// This is gonna be the awesome cinema booking made by Mireille Eva and Tam
//(eventhough it's a bit suspicious what the catch is. :D )

//handling the form
//add to database

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cinema Booking </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body{
        background-color: black;
        color: white;
    }
    img {
        width: 40px;
        height: 40px;
    }

    #seat-area {
        margin-left: 50vw;
        margin-right: 20vw;
        display: flex;
        flex-wrap: wrap;
    }

    .available{
        border-radius: 50%;
        width: 10px;
        height: 10px;
        background-color: green;
    }
    .occupied{
        border-radius: 50%;
        width: 10px;
        height: 10px;
        background-color: red;
    }
    </style>
</head>
<body>

<!-- include the form from Mireille -->
<?php include 'form.php'?>
<!-- include the table.php -->
<?php include 'table.php'?>
<?php include 'seats.php'?>

</body>
</html>
