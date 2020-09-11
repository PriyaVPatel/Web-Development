<?php
    // Priya Patel 
    // IS 448 HW 2 php code June 4, 2020
    // Opens the txt file and reads the contents using the fread function 
    // Echos a re5direct link 
    // Then closes the document

    // DEFINES TXT location 
    $txt="/afs/umbc.edu/users/p/a/papri1/pub/text-files/listOfSongs.txt";
    // Opens txt file with this line
    // If unable to open, end the executition with the kill like indicating it wa sunable to open the text file
    $txtFile = fopen($txt, "r") or die("Unable to open file!");

    // Read the file
    $read = fread($txtFile,filesize($txt));
    // Redirect link to the main page
    $redirect = '<a href="favsong.html">Go back to enter songs details. </a>';

    //Print this after file is displayed
    echo $read;
    echo $redirect;
   
    // Close txt file
    fclose($txtFile);

?>
