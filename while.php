while($row = $result->fetch_assoc())
				{
				echo "<tr><td>".$row["name"]."</td><td>".$row["ingredients"]."</td><td><img src="
             		        .$row["image"]." height=300 width=300></img></td><td><span class="clickable" - 	
	 			onclick="edititem()"> edit</span></td></tr>";
				//echo "name: " . $row["name"]. " -ingredients: " . $row["ingredients"]. "<br>";
				}