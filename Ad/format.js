/* Priya Patel IS 448 HW 5 June 30, 2020 
This code is the validator page. 
It checks for specified inputs according to the assignment. 
*/

function required() {
  
        // Takes HTML-form info and store in vars
        var name = document.forms["myForm"]["usrname"].value;
        var addy = document.forms["myForm"]["address"].value;
        var st = document.forms["myForm"]["state"].value;
        var em = document.forms["myForm"]["email"].value;
        var phone = document.forms["myForm"]["phone"].value;
        
        var test = false; 

        // IF any parameters are false, then the appropriate alert is executed
        if (test) {
                ////////////////////EMPTY ENTRIES////////////////
                // No blank entries
                if (name == "") {
                        alert("Fill Name!");
                        return false; 
                }

                // No blank entries
                if (addy == "") {
                        alert("Fill Address!");
                        return false; 
                }

                // No blank entries
                if (st == "") {
                        alert("Fill State!");
                        return false; 
                }

                // No blank entries
                if (em == "") {
                        alert("Fill Email Address!");
                        return false; 
                }

                // No blank entries
                if (phone == "") {
                        alert("Fill Phone Number!");
                        return false; 
                }
                /////////////////////////////////////////////////////

                ////////////////////STATE VALIDATION////////////////
                // If the state has more than two characters 
                // or is not the specific states, then return false
                if(st.length!=2){ 
                        alert("Enter valid State!");
                        return(false);}
                else {
                        if(st!="DC" || st!="MD" || st!="PA" || st!="NJ" || st!="NY") {
                                alert("Enter valid State!");
                                return(false); }
                }
                /////////////////////////////////////////////////////

                ////////////////////EMAIL VALIDATION////////////////
                // If there is no @ 
                // If there is no . between @ and com
                // If there is no "com" at the end
                // If email is not according to this pattern, then it will be false
                var emailpattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[c][o][m]$/
                
                if(!(em.match(emailpattern))) {
                        alert("Enter valid Email Address!");
                        return false; }
                /////////////////////////////// //////////////////////

                ////////////////////PHONE VALIDATION////////////////
                // Checks the length of the number
                // Checks if it matches the pattern 
                if(phone.length!=12) {
                        alert("Enter valid Phone Number!");
                        return(false); }
                else {
                        var phonepattern= /^\(?([0-9]{3})\)?[-]?([0-9]{3})[-]?([0-9]{4})$/;
                        
                        if(!(phone.match(phonepattern))) {
                                alert("Enter valid Phone Number!");
                                return(false);}
                }
                ///////////////////////////////////////////////////////
        }

        // If nothing is false, it will be true
        else {
                return true; 
        }

}