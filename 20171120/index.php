<?php
	$data=array(
		array("Volvo",22,18),
		array("BMW",15,13),
		array("Saab",5,2),
		array("Land Rover",17,15)
	)
?>
<html>
	<head>
		<title>20171120</title>
	</head>
	<body>
		<table border=1>
			<caption>for loop</caption>
			<tr>
				<td>Name</td>
				<td>Stock</td>
				<td>Sold</td>
			</tr>
			<?php 
				for($i=0;$i<count($data);$i++){
					echo "<tr>";
					for($j=0;$j<count($data[$i]);$j++)
						echo "<td>".$data[$i][$j]."</td>";
					echo "</tr>";
				}
			?>
		</table>
		<table border=1>
			<caption>foreach</caption>
			<tr>
				<td>Name</td>
				<td>Stock</td>
				<td>Sold</td>
			</tr>
			<?php
				foreach($data as $row){
					echo "<tr>";
					foreach($row as $value)
						echo "<td>".$value."</td>";
					echo "</tr>";
				}
			?>
		</table>
		<table border=1>
			<caption>array_map+join</caption>
			<tr>
				<td>Name</td>
				<td>Stock</td>
				<td>Sold</td>
			</tr>
			<?php
				function Arraymap_join($data){
					return join("</td><td>",$data);
				}
				foreach(array_map("Arraymap_join",$data) as $data1)
					echo "<tr><td>".$data1."</td></tr>";
			?>
		</table>
	</body>
</html>
