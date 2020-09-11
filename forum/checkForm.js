// Priya Patel IS 448 June 20, 2020 HW 4 Number 2
// Prompts a user to enter a string
// String is modified and ALL white spaces are replaced with nothing 
// Based on weather or not the string matches the regex pattern, 
// The appropriate response is displayed. 

// Prompts to enter string
var userInput = prompt ("Enter a string: ");

// Replaces all occurances whitespaces with nothing to its one long character string
// This is necessary becuase without this statement, the code would consider each 
// word to match the pattern. So if a two words had a capital letter, the code would 
// return true. To avoid this, eliminating white spaces was the quickest option 
userInput = userInput.replace(/\s/g,'');

// Pattern is first is capital letter; one occurance 
// All rest must be lowercase letters till end of string 
// Will consider all digits invalid 
var rgxPattern = /^[A-Z]{1}[a-z]+$/; 

// Checks if user input matches the pattern 
// Matches = true, not matches = false
var checkInput = rgxPattern.test(userInput);


// stmt function will display the appropriate statement based on the checkInout result
function stmt(userInput){
    // If false, the input is invalid 
    if (checkInput == false){
        document.write("Invalid input! Pattern match: ");
        return false; 
    }
    // If true it is correct
    else {
        document.write("Valid input! Pattern match: ");
        return true; 
    }
}

// Calls function to determine weather or not the user input matches the form 
// Displays the result of the function
document.write(stmt(userInput))

