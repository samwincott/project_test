<!DOCTYPE = html>

<html>
<head>
		<link rel="stylesheet" type="text/css" href="scripts/css.css">
</head>
<body>
<?php

//establishing link to database
$db = new SQLite3('scripts/testing.db') or die('Unable to open database');

//determining which services to show
$sql = "SELECT * FROM services WHERE status <> 1";
$result = $db->query($sql);

//output page table
echo "<table>"; 
echo "<tr>
		<th>Service</th>
			<th>Status</th>
			<th>Description</th>
			<th>Updated</th>
		</tr>";  
while($row = $result->fetchArray()){
    $service     = $row['name'];
    $status    = $row['status'];
    $description     = $row['description'];
    $updated = $row['updated'];
    echo "<tr>
    		<td>".$service."</td>
    		<td>".$status."</td>
    		<td>".$description."</td>
    		<td>".$updated."</td>
    	</tr>";
    echo "<br>";
}
echo "</table>";

?>

		<div id="footer">
		<a href="Login.php">Admin Login</a>
		</div>
</body>
</html>


