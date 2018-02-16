

<table>
<?php
$statement = $pdo->query("SELECT * FROM bookings");
foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
    echo "<tr><td>" . join('</td><td>', $row) . '</td>';
    echo '<td><a href="?name=editItem&id=' . $row['ID'] . '">Edit</a></td>';
    echo '<td><a href="?name=deleteItem&id=' . $row['ID'] . '">Delete</a></td>';
    echo'</tr>';
}

?>
</table>

<?php
// the delete button
// When clicking on a button the href will be changed with the id of the line
//From the href -> $_POST will be created automatically

// Read fromt the $_POST to know if it's delete or editItem

// delete
    // read from $_POST
    if ($_GET['name'] == 'deleteItem'){
        //read the seats number from the selected booking

        //An array of all the seats that were unbooked in bookings:
        $myNumber = $_GET['id'];
        $unbookedseat = 0;

        // read from the Bookings table to have a number of the unbooked seat
        //SELECT bookings.SeatNumber FROM `bookings` WHERE bookings.ID = $_POST['id']

        $statement = $pdo->query("SELECT bookings.SeatNumber FROM `bookings` WHERE bookings.ID = $myNumber");
        $unbookedseat = $statement->fetchColumn();



        //update the seats table

        $statement = $pdo->prepare("UPDATE `seats` SET `token`= 0 WHERE id = ?");
        $result = $statement->execute([$unbookedseat]);



        //use the id to locate the line in the database and delete it
        //DELETE FROM `bookings` WHERE id=2
        $statement = $pdo->prepare("DELETE FROM `bookings` WHERE id=?");
        $result = $statement->execute([$_GET['id']]);

    }