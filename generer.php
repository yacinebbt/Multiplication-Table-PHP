<!DOCTYPE html>
<html>
<head>
	<title> Multiplication Generated Successfully!!</title>
	<style type="text/css">
		.pair{
			background-color: lightblue;
		}
		.impair{
			background-color: darkblue;
			color: white;
		}
		.hd{
			background-color: orange;
			color: #55A8F6;
			font-weight: bold;
		}
		.diag{
			background-color: darkgreen;
			color: white;
		}
		table{
			border: 2px solid black;
			text-align: center;
			font-size: 40px;
			font-family: verdana;
		}

	</style>
</head>
<body>
	<p align="center">Multiplication Table Generated Successfully!!</p>
	<?php 
		$nl = $_GET["nl"];
		$nc = $_GET["nc"];

		echo "<table align=\"center\">";
		for ($i=1; $i <=$nl ; $i++) { 
			echo "<tr>";
			for ($j=1; $j <=$nc ; $j++) { 
				echo "<td";
				if ($i==1 || $j==1) {
					echo " class=\"hd\">";
				}
				elseif ($i%2==0) {
					if ($i==$j) {
							echo " class=\"diag\">";
						}else{
							echo " class=\"pair\">";						
						}
					}else{
						if ($i==$j) {
							echo " class=\"diag\">";
						}else{
							echo " class=\"impair\">";
						}
				}
				echo $i*$j."</td>";;
				
			}
			echo "</tr>";
		}

		echo "</table>";
	?>
</body>
</html>