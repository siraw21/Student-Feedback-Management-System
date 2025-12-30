function validateRegister(event) {
    const passwordField = document.getElementsByName("password")[0];
    const passwordValue = passwordField.value;

    const oldMessage = document.getElementById("pw-error");
    if (oldMessage) {
        oldMessage.remove();
    }
    
    if (passwordValue.length < 6) {
        event.preventDefault(); 
        let errorMsg = document.createElement("p");
        errorMsg.id = "pw-error";
        errorMsg.innerText = "Password must be 6+ characters.";
        errorMsg.style.color = "red";
        errorMsg.style.fontSize = "13px";
        errorMsg.style.marginBottom = "5px";

        passwordField.parentNode.insertBefore(errorMsg, passwordField);
        passwordField.style.border = "2px solid red";
    } else {
        passwordField.style.border = "1px solid #ccc";
    }
}