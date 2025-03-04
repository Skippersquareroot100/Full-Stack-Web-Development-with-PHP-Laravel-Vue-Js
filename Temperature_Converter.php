<?php
const c_to_f = 9/5;
const f_to_c = 5/9;
const offset = 32;
while(true) {
    try {
        echo "Which conversion do you want to perform?" . "\n" . "1. Celsius to Fahrenheit" . "\n" . "2. Fahrenheit to Celsius";
        echo "\n";
        echo "Enter your choice: ";
        $conversion = readline();
        ($conversion != "1" && $conversion != "2") ? throw new Exception("Invalid input! Please enter 1 or 2.") : null;

        echo "Enter the temperature: ";
        $temp = readline();
        (!is_numeric($temp)) ? throw new Exception("Invalid input! Please enter a number.") : null;
        $temp = (float) $temp;


        switch($conversion) {
            case "1":
                $result = ($temp * c_to_f) + offset;
                echo "Temperature in Fahrenheit: " . $result;
                break;
            case "2":
                $result = ($temp - offset) * f_to_c;
                echo "Temperature in Celsius: " . $result;
                break;
        }


        echo "\nDo you want to continue? (y/n): ";
        $continue = readline();
        ($continue == "y") ? null : (($continue == "n") ? exit() : throw new Exception("Please enter a valid input"));
        echo "\n";
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
        echo "\n";
    }
}
?>
