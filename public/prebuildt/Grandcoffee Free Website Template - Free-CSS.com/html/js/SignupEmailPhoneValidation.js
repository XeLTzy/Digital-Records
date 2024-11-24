function validateSignupForm() {
    const email = document.getElementById('emailphoneSignup').value.trim();
    const password1 = document.getElementById('passwordSignup1').value.trim();
    const password2 = document.getElementById('passwordSignup1').value.trim();
    const emailError = document.getElementById('emailErrorSignup');
    const passwordError = document.getElementById('passwordErrorSignup1');
    const confirmPasswordError = document.getElementById('confirmPasswordErrorSignup2');

    emailError.textContent = '';
    passwordError.textContent = '';
    confirmPasswordError.textContent = '';

    let isValid = true;

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const regex = /^[0-9]{11}$/;

    if (!emailPattern.test(email) && !regex.test(email)) {
        emailError.textContent = 'Invalid email or phone number format';
        isValid = false;
    }

    if (password1 !== password2) {
        passwordError.textContent = 'Passwords do not match';
        confirmPasswordError.textContent = 'Passwords do not match';
        isValid = false;
    }

    if (password1.length < 8 || password2.length < 8) {
        passwordError.textContent = 'Passwords must have at least eight characters';
        confirmPasswordError.textContent = 'Passwords must have at least eight characters';
        isValid = false;
    }

    return isValid;
}