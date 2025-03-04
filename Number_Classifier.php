<?php 
while (1) {
      try {
        echo "Enter a number: ";
        $input = readline(); 
        (!is_numeric($input)) ? throw new Exception("Invalid input! Please enter a number.") : null;
         $input = (int)$input;
        if($input == 0)
        {
            echo "zero";
        }
        else if($input> 0)
        {
            echo "positive";
        }
        else
        {
            echo "negative";
        }
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

