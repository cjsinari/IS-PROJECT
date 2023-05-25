function validateSignUpForm(){

  removeAllErrorMessages();

  var emailaddress = document.getElementById("emailaddress").value;
  var password = document.getElementById("password").value;
  var passwordConfirm = document.getElementById("passwordConfirm").value;
  




  var emailValidationMessage;
  var passwordValidationMessage;
  var passwordConfirmValidationMessage;
  



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

return true;

}




function validPassword(password){

  const minLength = 8;
  const maxLength = 32;

  const letterNumberRegexSpecialChar = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,32}$/;

  if (password == ""){
    return "Please fill in this field";
  }

 if (password.length < minLength || password.length > maxLength){
    return "Password length should be 8 characters minimum and 32 characters maximum.";
  }

  if (letterNumberRegexSpecialChar.test(password) == false){
      return "Password should contain alphabetic, numeric and special characters.";
  }

 return "Valid";
}


function validEmail(emailaddress){

 const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


 if (emailaddress == ""){
  return "Please include an '@' in the email address. 'emailaddress' is missing an '@'"
 }

 if (emailRegex.test(emailaddress) == false){
  return "This is not a valid email.";
 }

  return "Valid";
}




function removeAllErrorMessages(){
  var allErrorField = document.getElementsByClassName("error-input");
  var allErrorMessage = document.getElementsByClassName("error-message");
  var x;

  for(x = (allErrorField.length - 1); x>=0; x--){
      allErrorField[x].classList.remove("error-input");
  }

  for(x = (allErrorMessage.length - 1); x>=0; x--){
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

