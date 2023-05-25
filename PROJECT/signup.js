
/*

function showFields(category){
   var lawyerFields = document.getElementById('lawyerFields');
   var clientFields = document.getElementById('clientFields');

   if(category === 'lawyer'){
     lawyerFields.style.display = 'block';
     clientFields.style.display = 'none';
   } 
   else if(category === 'client'){
    lawyerFields.style.display = 'none';
    clientFields.style.display = 'block';
   }

}

*/

function validateSignUpForm(){
   /*
   //check if user has selected either the lawyer or client radio button
   var lawyer = document.getElementById('lawyerFields');
   var client = document.getElementById('clientFields');

   if (!lawyer.checked && !client.checked){
    alert ("Please select either Lawyer Registration or Client Registration");
    return false;
   }
   */

    //remove all error messages

    removeAllErrorMessages();

    var lawyerId = document.getElementById("lawyerId").value;
    var firmName = document.getElementById("firmName").value;
    var firmNumber = document.getElementById("firmNumber").value;
    var lawyerName = document.getElementById("lawyerName").value; 
    var mobilenumber = document.getElementById("mobilenumber").value;    
    var emailaddress = document.getElementById("emailaddress").value;
    var password = document.getElementById("password").value;
    var passwordConfirm = document.getElementById("passwordConfirm").value;

    //client credentials
    var firstName = document.getElementById("firstName").value; 
    var lastName = document.getElementById("lastName").value; 
    var idNumber = document.getElementById("idNumber").value; 
   // var dateofbirth = document.getElementById("dateOfBirth").value; 
    var gender = document.getElementById('gender').value;
    //var otherGender = document.getElementById('otherGender').value;
    //var personswithdisabilities = document.getElementById('personsWithDisabilities').value;
   // var mobilenumber = document.getElementById('mobilenumber').value;
    //var emailaddress = document.getElementById('emailaddress').value;
    //var password = document.getElementById('password').value;
    //var passwordConfirm = document.getElementById("passwordConfirm").value;


    //lawyer validation messages
    var lawyerIdValidationMessage;
    var firmNameValidationMessage;
    var firmNumberValidationMessage;
    var lawyerNameValidationMessage; 
    
    //client credential validation message variables
    var firstNameValidationMessage;
    var lastNameValidationMessage;
    var idNumberValidationMessage;
    //var dateOfBirthValidationMessage;
    var genderValidationMessage;
    //var personsWithDisabilitiesValidationMessage;
     
    //common credential validation message variables
    var mobileNumberValidationMessage;
    var passwordValidationMessage;
    var passwordConfirmValidationMessage;   
    var emailValidationMessage;
    var idNumberValidationMessage;

    emailValidationMessage = validEmail(emailaddress);
    if (emailValidationMessage != "Valid"){
        showErrorMessage("emailaddress",emailValidationMessage);
        return false;
    }

    passwordValidationMessage = validPassword(password);
    if (passwordValidationMessage != "Valid"){
        showErrorMessage("password",passwordValidationMessage);
        return false;
    }

    passwordConfirmValidationMessage = validPassword(passwordConfirm);
    if (passwordConfirmValidationMessage != "Valid"){
        showErrorMessage("passwordConfirm",passwordConfirmValidationMessage);
        return false;
    }

    mobileNumberValidationMessage = validMobileNumber(mobilenumber);
    if (mobileNumberValidationMessage != "Valid"){
       showErrorMessage("mobilenumber",mobileNumberValidationMessage);
       return false;
    }

    idNumberValidationMessage = validIdNumber(idNumber);
    if (idNumberValidationMessage != "Valid"){
        showErrorMessage("idNumber",idNumberValidationMessage);
        return false;
    }

    lawyerIdValidationMessage = validLawyerId(lawyerId);
    if (lawyerIdValidationMessage != "Valid"){
        showErrorMessage("lawyerId",lawyerIdValidationMessage);
        return false;
    }

    firmNameValidationMessage = validFirmName(firmName);
    if (firmNameValidationMessage != "Valid"){
        showErrorMessage("firmName",firmNameValidationMessage);
        return false;
    }

    firmNumberValidationMessage = validFirmNumber(firmNumber);
    if (firmNumberValidationMessage != "Valid"){
        showErrorMessage("firmNumber",firmNumberValidationMessage);
        return false;
    }

    lawyerNameValidationMessage = validLawyerName(lawyerName);
    if (lawyerNameValidationMessage != "Valid"){
        showErrorMessage("lawyerName",lawyerNameValidationMessage);
        return false;
    }

    firstNameValidationMessage = validFirstName(firstName);
    if (firstNameValidationMessage != "Valid"){
        showErrorMessage("firstName",firstNameValidationMessage);
        return false;
    }
    
    lastNameValidationMessage = validLastName(lastName);
    if (lastNameValidationMessage != "Valid"){
        showErrorMessage("lastName",lastNameValidationMessage);
        return false;
    }

    genderValidationMessage = validGender(gender);
    if (genderValidationMessage != "Valid"){
        showErrorMessage("gender",genderValidationMessage);
        return false;
    }



return true;
    
}   


    //lawyer and client validation codes
    //lawyerId validation code
  function validLawyerId(lawyerId){
       
        const lawyerId = "ABCD1234";
        const regex = /^[A-Za-z0-9]+$/;
        const maxLength = 8;

        if (lawyerId == ""){
          return "Please fill in this field"
        }

        if (regex.test(lawyerId) == false) {
          return "This is not a valid ID Number";
        } 
          
        if (lawyerId.length < maxLength || lawyerId.length > maxLength){
          return "Invalid ID number";
        } 
        
            return "Valid";
         
    }

    //firm name validation
    function validFirmName(firmName){

        const firmName = "Olivia Pope & Associates";
        const regex = /^[A-Za-z&\\s]+$/;
        const maxLength = 60;

        if (firmName == ""){
          return "Please fill in this field"
        }

        if (regex.test(firmName) == false){
          return "This is not a valid firm name";
        }
        
        if (firmName.length < maxLength || firmName.length > maxLength){
          return "Invalid firm name";
        }

        return "Valid";

    }

    // firm number validation
    function validFirmNumber(firmNumber){
       
        const firmNumber = "ABCD1234";
        const regex = /^[A-Za-z0-9]+$/;
        const maxLength = 12;

        if (firmNumber == ""){
          return "Please fill in this field"
        }

        if (regex.test(firmNumber) == false) {
          return "This is not a valid ID Number";
        } 
          
        if (firmNumber.length < maxLength || firmNumber.length > maxLength){
          return "Invalid firm number";
        } 
        
            return "Valid";
         
    }
     
    //lawyer name validation code
    function validLawyerName(lawyerName){

        const lawyerName = "John Doe";
        const regex = /^[A-Za-z ]+$/;
        const maxLength = 60;

        if (lawyerName == ""){
          return "Please fill in this field"
        }

        if (regex.test(lawyerName) == false){
          return "This is not a valid name";
        }
        
        if (lawyerName.length < maxLength || lawyerName.length > maxLength){
          return "Invalid name";
        }

        return "Valid";

    }



    //email validation code
    function validEmail(emailaddress){

        const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
     
     
        if (emailaddress == ""){
         return "Please fill in this field"
        }
     
        if (emailRegex.test(emailaddress) == false){
         return "This is not a valid email.";
        }
     
         return "Valid";
     }

     //mobile number validation code
     function validMobileNumber(mobilenumber){
        const maxLength = 10;
     
        const mobileRegex = /^\+\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
        
        if (mobilenumber == ""){
         return "Please fill in this field"
        }
     
        if (mobileRegex.test(mobilenumber) == false){
         return "This is not a valid mobile number."
        }
     
        if (number.length < maxLength || number.length > maxLength){
         return "Invalid mobile number";
        } 
     
         return "Valid";
     
     }

     //password validation code
     function validPassword(password){

        const minLength = 8;
        const maxLength = 32;
       
        const letterNumberRegexSpecialChar = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,32}$/;
    
        if (password == ""){
           return "Please fill in this field"
        }
    
        if (password.length < minLength || password.length > maxLength){
            return "Password length should be 8 characters minimum and 32 characters maximum.";
        }
      
         if (letterNumberRegexSpecialChar.test(password) == false){
            return "Password should contain alphabetic, numeric and special characters.";
        }
      
        return "Valid";
    
    }
    


    function firstName(firstName){

        const firstName = "Olivia";
        const regex = /^[A-Za-z]+$/;
        const maxLength = 16;

        if (firstName == ""){
          return "Please fill in this field"
        }

        if (regex.test(firstName) == false){
          return "This is not a valid firm name";
        }
        
        if (firstName.length < maxLength || firstName.length > maxLength){
          return "Invalid firm name";
        }

        return "Valid";
    }

    function lastName(lastName){

        const lastName = "Grant";
        const regex = /^[A-Za-z]+$/;
        const maxLength = 16;
    
        if (lastName == ""){
          return "Please fill in this field"
        }
    
        if (regex.test(lastName) == false){
          return "This is not a valid firm name";
        }
            
        if (lastName.length < maxLength || lastName.length > maxLength){
          return "Invalid firm name";
        }
    
         return "Valid";

    }
    
    function validIdNumber(idNumber){
       
        const idNumber = "1234567890";
        const regex = /^[0-9]+$/;
        const maxLength = 8;

        if (idNumber == ""){
          return "Please fill in this field"
        }

        if (regex.test(idNumber) == false) {
          return "This is not a valid ID Number";
        } 
          
        if (idNumber.length < maxLength || idNumber.length > maxLength){
          return "Invalid ID number";
        } 
        
            return "Valid";
         
    }

    /*
    function validateDate(dateOfBirth) {
        const dateOfBirthInput = document.getElementById("dateOfBirth");
        const dateOfBirthValue = dateOfBirthInput.value;
        
        // Check if the entered date is in valid format according to the "date" input type
        if (isValidDate(dateOfBirthValue) == false) {
          
      }

      */


      function validGender(gender) {
        const gender = document.getElementById("gender");
        const selectedOption = gender.value;
        
        // Check if a valid option is selected
        if (selectedOption == "") {
          return "Select from the options below: "
        }

        return "Valid";


    }

    function validMobileNumber(mobilenumber){
        const maxLength = 10;
     
        const mobileRegex = /^\+\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
        
        if (mobilenumber == ""){
         return "Please fill in this field"
        }
     
        if (mobileRegex.test(mobilenumber) == false){
         return "This is not a valid mobile number."
        }
     
        if (number.length < maxLength || number.length > maxLength){
         return "Invalid mobile number";
        } 
     
         return "Valid";
     
     }


function removeAllErrorMessages(){
    var allErrorField = document.getElementsByClassName("error-input");
    var allErrorMessage = document.getElementsByClassName("error-message");
    var x;

    for(x = (allErrorField.length - 1); x >= 0; x--){
        allErrorField[x].classList.remove("error-input");
    }
  
    for(x = (allErrorMessage.length - 1); x >= 0; x--){
        allErrorMessage[x].remove();
    }

}


function showErrorMessage(inputBoxID, Message) {
    var inputBox = document.getElementById(inputBoxID);

    inputBox.classList.add("error-input");

    var errorMessageElement = document.createElement("p");
    errorMessageElement.classList.add("error-message");
    errorMessageElement.innerHTML = Message;

    inputBox.parentNode.insertBefore(errorMessageElement,inputBox.nextSibling);


}

