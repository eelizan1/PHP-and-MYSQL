<html>
    
    <body>
    
    <?php
        
        print("<h1>Arrays and Functions</h1> <br />"); 
        
        $months = array ('January', 'February', 'March', 'April',
                     'May', 'June', 'July', 'August',
                     'September', 'October', 'November', 'December');  
        
        //non alphabetical order 
        print("<h3>Non Alphabetical Order</h3> <br />"); 
        $mlength0 = count($months);
        for($y = 0; $y < $mlength0; $y++) {
            echo $months[$y];
            echo "<br>";
        }
        
        print("<br />"); 
        
        //sorts in alphabetical order 
        sort($months);

        //prints in alphabetical order 
         print("<h3>Sorted: Alphabetical Order</h3><br />"); 
        $mlength = count($months);
        for($x = 0; $x < $mlength; $x++) {
            echo $months[$x];
            echo "<br>";
        }
        
        print("<br />");     
        
        ?>
     
        <?php  $months = array ('January', 'February', 'March', 'April',
                     'May', 'June', 'July', 'August',
                     'September', 'October', 'November', 'December');  
        
        //prints array woth foreach
         print("<h3>Non Alphabetical Order with foreach</h3> <br />"); 
        foreach($months as $value){ 
        
            echo "$value <br />";
        }
        
        print("<br />"); 
        
        sort($months);
        
         print("<h3>Sorted: Alphabetical Order with foreach</h3> <br />"); 
        foreach($months as $value){ 
        echo "$value <br />";
        
        }
        
     ?>
    
    </body>
    
</html>