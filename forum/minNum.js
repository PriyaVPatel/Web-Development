// Priya Patel IS 448 June 20, 2020 HW 4 Number 1
// Propts user to enter three values 
// Uses findMin function which uses math.min to 
// find the lowest number and display that using 
// doc write

// Propts for three numbers 
var x1 = prompt ("Enter first number: ");
var x2 = prompt ("Enter second number: ");
var x3 = prompt ("Enter third number: ");

// Function findmin uses math.min to find the lowest number
function findmin(x1, x2, x3) {
    return Math.min(x1, x2, x3); 
}

// minnum is defined by function findmin 
// Stores the min value found in this variable 
var minNum = findmin(x1, x2, x3);

// Displayes the approriate lowest number by calling varial name which uses the function findmin
document.write("Smallest Number is: " + minNum); 