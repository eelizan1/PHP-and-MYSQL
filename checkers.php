<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset = "utf-8">
	<title>checkerboard</title>
</head>

<style type="text/css">

	td{
        border-spacing: 1px; 
    }
    
    tbody {
        width: 300px; 
    }
    
	.black{
        border: 1px; 
        padding: 1px; 
		background-color: red;
		width: 35px;
		height: 35px;
	}
	.red{
        border: 1px; 
        padding: 1px; 
		background-color: black;
		width: 35px;
		height: 35px;
	}

</style>
<body>
    
	<table>
        <tbody>
		<?php
            
            print("<h1>Arrays and Functions</h1> <br />"); 
            
            for($x=1; $x<=8; $x++){
				echo "<tr>";
				for($y=1; $y<=4; $y++){
				
					if($x % 2 == 0){
						echo '<td class="black"></td>';
						echo '<td class="red"></td>';
                    } else {
						echo '<td class="red"></td>';
						echo '<td class="black"></td>';
					}
				}
                echo "</tr>";
            }
?>
</tbody>
</table>
    </body>
</html>