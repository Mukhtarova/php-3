<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    function drawTable($cols, $rows, $color){
      echo "<table border = '1' width='500' text-align:center>";
	for ($tr = 1; $tr <= $rows; $tr++) { 
	    echo "<tr>"; 
	        for ($td = 1; $td <= $cols; $td++) { 
	            if ($tr == 1 || $td == 1) {
	               echo "<th style = 'background : {$background}'>" . $tr * $td . "</th>"; 
	            } else
	            echo "<td>" . $tr * $td . "</td>"; 
	        	}
	        }
	    echo "</tr>";
	 echo "</table>";
    }

    drawTable(10,10,yellow)
  ?>


</body>
</html>