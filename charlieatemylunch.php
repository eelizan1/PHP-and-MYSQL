<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
    <?php
    
    print("<h1>Charlie Ate My Lunch</h1> <br />"); 
    
    function isBitten() {
        
        $val = rand(0, 100); 
        
        if ($val > 50) 
			 return "charlie ate my lunch";
		     else 
			 return "charlie did not eat my lunch";
            
    }
         /* Calling a PHP Function */
          $msg = isBitten(); 
        
        print "<h1>$msg</h1>"
    ?>
    
</body>
</html>
