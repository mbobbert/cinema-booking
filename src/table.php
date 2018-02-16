

<table>
<?php
$statement = $pdo->query("SELECT * FROM bookings");
foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
	echo "<tr><td>" . join('</td><td>', $row) . '</td></tr>';
}

?>
</table>