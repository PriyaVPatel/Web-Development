
<?php
    // Priya Patel 
    // IS 448 HW 2 php code June 4, 2020
    // Takes the user inputs from studentID and reads the input to 
    // make sure it is according to the regular format 

    // Creates name obj to store user input from student.HTML form 
    $name= $_POST["name"];
    // Creates ID number obj to store user input from student.HTML form 
    $id=$_POST["id"];

    // Sets number and letter counting to 0 so for loops can verify the input
    $num = 0;

    // Changes num to count the last four digits
    for($j = 2; $j < strlen($id); $j++) {
        if (is_numeric($id[$j])) {
            $num++;
        }
    }

    // Sets number and letter counting to 0 so for loops can verify the input
    $letter = 0;

    // Changes letter to count the first two letters
    for($i = 0; $i < 2; $i++) {
        if(ctype_alpha($id[$i])) {
            $letter++;
        }
    }

    // Sets length to 0 
    $lengthOfID = 0; 

    // Changes length to the length of ID inout
    for($k = 0; $k < strlen($id); $k++) {
            $lengthOfID++;
    }

    // If there is tow letters and 4 numbers following, prvide the respective statement
    // Else instruct user to return to main page and try again 
    if ($letter == 2 && $num == 4 && $lengthOfID == 6 ) {
        echo "<h1> Congrats! Campus ID is valid. </h1>";
        echo "<br/>";
        echo '<a href="studentID.html"> Go back to enter another valid ID request. </a>';
    }
    else {
        echo "<h1> Input is not a valid ID. </h1>";
        echo "<br/>";
        echo '<a href="studentID.html"> Go back to enter a valid ID. </a>';
    }

?>