<?php
     const name="Anik";
     const pass="12345";
     while(1)
     {
        try
        {
              echo "Enter your username: ";
              $username = readline();
              echo "Enter your password: ";
              $password = readline();
             if (!($username == name && $password == pass)) 
             {
             throw new Exception("Invalid username or password");
             }
             else
             {
                echo "Welcome, ". $username;
                echo "\n";
                echo "Do you want to continue? (y/n):";
                $continue = readline();
                ($continue == "y") ? null : (($continue == "n") ? exit(): throw new Exception ("Please enter a valid input") );
                echo "\n";
             }
                 
        }
        catch (Exception $e)
        {
           echo "ERROR: ". $e->getMessage();
           echo "\n";
        }
     }

?>
