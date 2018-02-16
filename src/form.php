<?php

$pdo = new PDO(
  'mysql:host=localhost;dbname=cinema_booking','root', 'rootroot'
);


if (count($_POST) >0)
{
  $seatNumber = filter_input(INPUT_POST, 'seatNumber', FILTER_VALIDATE_INT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // is the given value a email?


}




var_dump($_POST);

?>

<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputId">ID</label>
      <input type="text" name="id" class="form-control" id="inputId" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputName">Name</label>
      <input type="text" name="name" class="form-control" id="inputName" placeholder="First and last name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Seat number</label>
    <input type="text" name="seatNumber" class="form-control" id="inputSeatNumber" placeholder="Seat Number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>