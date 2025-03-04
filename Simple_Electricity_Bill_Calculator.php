<?php
     
     while(1)
     {
        try
        {
                echo "Enter the number of units: ";
                $units = readline();
                (!is_numeric($units)) ? throw new Exception("Invalid input! Please enter a number.") : null;
                $units = (int)$units;
                $bill = 0;
                  
               if($units<=100)
                {
                    $bill = $units*5;
                }
                else if($units>100 && $units<=200)
                {
                    $bill = ($units -100) *10 + 100*5;
                }
                else
                {
                    $bill = ($units - 200) * 15 + 100*10 + 100*5;
                }

             /*   $bill = ($units<=100) ? $units*5 : (($units>100 && $units<=200) ?  ($units -100) *10 + 100*5 : ($units - 200) * 15 + 100*10 + 100*5);*/
                echo "Electricity Bill: ". $bill;
                echo "\n";
                echo "Do you want to continue? (y/n):";
                $continue = readline();
                ($continue == "y") ? null : (($continue == "n") ? exit(): throw new Exception ("Please enter a valid input") );
                echo "\n";
            
        }
        catch (Exception $e)
        {
           echo "ERROR: ". $e->getMessage();
           echo "\n";
        }
     }

?>
