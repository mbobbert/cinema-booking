<?php

//Display the seats
// Read from the database
// Change the class according to the database

?>
<html>
 <body>
        <div id="seat-area">

        <table>
<?php
$seats = [];
$statement = $pdo->query("SELECT token FROM seats");
while (false !== ($token = $statement->fetchColumn())) {
    $seats[]= $token;
}
var_dump($seats);


?>
</table>

        <!-- <img src="img/seat.png" alt="">
        <div class="occupied"></div>
        <img src="img/seat.png" alt="">
        <div class="available"></div>
        <img src="img/seat.png" alt="">
        <div class="occupied"></div>
        <img src="img/seat.png" alt="">
        <div class="available"></div>
        <img src="img/seat.png" alt="">
        <div class="available"></div>
        <img src="img/seat.png" alt="">
        <div class="available"></div>
        <img src="img/seat.png" alt="">
        <div class="occupied"></div>
        <img src="img/seat.png" alt="">
        <div class="available"></div> -->
        </div>
 </body>
</html>