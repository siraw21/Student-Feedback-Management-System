function validateRegister() {
    let pw = document.getElementsByName("password")[0].value;
    if (pw.length < 6) {
        alert("Password must be at least 6 characters.");
        return false;
    }
    return true;
}