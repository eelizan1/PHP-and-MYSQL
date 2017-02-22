<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>

		<pre>
            <?php
            print_r($_POST);
            ?>
        </pre>
        
        <pre>
            <?php

            
            if(isset($_POST['submit'])) {
                echo "form submitted"; 
            
                if(isset($_POST["username"])) {  
                    //variable names holding post values 
                    $username = $_POST["username"];   
                    
                } else {
                    $username = "invalid username"; 
                }  
                if (isset($_POST["password"])) {  
                    //variable names holding post values 
                    $password = $_POST["password"]; 
                } else {
                    $password = "invalid password"; 
                }
                
            } else {
                    
                $username = "invalid username"; 
                $password = "invalid password"; 
            } 

            ?>
            
            <?php 
             //need {} when accessing an array with string     
             echo "{$username}: {$password}";
            ?>
        </pre>

	</body>
</html>
