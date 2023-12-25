function validateText(text) {
    if (/^[a-zA-Z]+$/.test(text)) {
        return true;
    } else {
        alert("Please enter text only.");
        return false;
    }
}
function validatePassword(pass) {
    // At least 3 characters, at least one number, and at least one special character
    if (/^(?=.*[A-Za-z]{3,})(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/.test(pass)) {
        return true;
    } else {
        alert("Please enter a valid password.");
        return false;
    }
}
function validateEmail(email) {
    //3 character after ' @ ' and 2 character after ' . '
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]{3,}\.[a-zA-Z0-9-]{2,}(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
        return true;
    } else {
        alert("Please enter a valid email address.");
        return false;
    }
}