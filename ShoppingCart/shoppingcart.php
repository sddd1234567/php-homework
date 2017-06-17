<?php

$flag = "";
$total = 0;

echo "<table>";
		while (list($arr, $value) = each($_COOKIE)) 
		{
			if (isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])) 
			{
				if ($flag) 
				{
					$flag = false;
					$color = "#FF99CC";
				}
				else
				{
					$flag = true;
					$color = "#99FFC";
				}

				echo "<tr bgcolor='" . $color . "'><td>";
				echo "<a href='delete.php?Id=" . $arr . "'>";
				echo "刪除</a></td>";

				$price = 0;
				$quantity = 0;

				while (list($name, $value) = each($_COOKIE[$arr])){
					echo "<td>" . $value . "</td>";
					if ($name == "price")
						$price = $value;				

					else if ($name == "quantity")			
						$quantity = $value;
				}

				$total += $price * $quantity;
				
				echo "</tr>";
			}
				
		}	

		echo "</table>";
		echo "<br/><br/><br/>";

		echo "total = ".$total;


		echo "<br/><br/><br/>";
		echo "<a href = 'shopping.php'>回到商品清單</a>";