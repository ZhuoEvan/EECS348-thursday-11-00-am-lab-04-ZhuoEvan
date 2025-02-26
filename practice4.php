<?php
	$size = $_POST["size"];
	function multiplyNums($num1, $num2) {
		$result = $num1 * $num2;
		return $result;
	}
	echo "<table border = '1'>";
		for ($i = 1; $i <= $size; $i++) {
			echo "<tr>";
			for ($j = 1; $j <= $size; $j++) {
				$product = multiplyNums($i, $j);
				echo "<td>" . $product . "</td>";
			}
			echo "</tr>";
		}
	echo "</table>";
?>