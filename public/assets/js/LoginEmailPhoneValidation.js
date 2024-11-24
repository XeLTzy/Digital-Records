function validateLoginForm() {
    const emailphoneLogin = document.getElementById('emailphoneLogin').value.trim();
    const emailErrorLogin = document.getElementById('emailErrorLogin');

    emailErrorLogin.textContent = '';

    let isValid = true;

    const emailPatternLogin = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const regexLogin = /^[0-9]{11}$/;

    if (!emailPatternLogin.test(emailphoneLogin) && !regexLogin.test(emailphoneLogin)) {
        emailErrorLogin.textContent = 'Invalid email or phone number format';
        isValid = false;
    }

    return isValid;
}