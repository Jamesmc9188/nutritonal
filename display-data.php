<?php
$server = "server";
$username = "test";
$password = "test";
$dbname = "nutritional";

//create connection
$conn = new mysqli($server, $username, $password, $dbname);
//check connection
if ($conn->connect_error) 
			{
			die("connection failed: " . $conn->connect_error);
			}
$sql = "SELECT name, ingredients, image FROM products";
$result = $conn->query($sql);


if ($result->num_rows > 0)
				{
				echo "<table><tr><th>Name</th><th>Ingredients</th><th>Image</th></tr>";	
				//output data of each row
				while($row = $result->fetch_assoc())
								{
								echo "<tr><td>".$row["name"]."</td><td>".$row["ingredients"]."</td><td><img src="		 							    .$row["image"]." height=300 width=300></img></td><td><span class="clickable" - 		 								onclick="edititem()"> edit</span></td></tr>";
								//echo "name: " . $row["name"]. " -ingredients: " . $row["ingredients"]. "<br>";
								}
				echo "</table>";				
				}
else {
     echo "0 results";
	 }
				
$conn->close();				


?>