function validateForm() {
    const fname = document.getElementById('fname').value;
    const lname = document.getElementById('lname').value;
    const password = document.getElementById('password').value;
    const passwordRetype = document.getElementById("Password-Retype").value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('contact').value;
    const country = document.getElementById('client_country').value;
    const city = document.getElementById('client_city').value;



    // Password regular expression

    // Email regular expression
    const emailRegex = /^(?!\.)[a-zA-Z0-9._%+-]+@(?!-)(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/;

    if (fname.trim() === '') {
        alert('Please enter a First Name');
        return false;
    }

    if (lname.trim() === '') {
        alert('Please enter Last Name');
        return false;
    }
    if (!password.match(passwordRegex)) {
        alert('Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character');
        return false;
    }


    if (password.trim() === '') {
        alert('Please enter a password');
        return false;
    }

    if (passwordRetype.trim() === '') {
        alert('Please retype the password');
        return false;
    }

    if (password !== passwordRetype) {
        alert('Passwords do not match');
        return false;
    }


    if (phone.trim() === '') {
        alert('Please enter a phone number');
        return false;
    }

    if (country.trim() === '') {
        alert('Please enter a country');
        return false;
    }
    if (city.trim() === '') {
        alert('Please enter a city');
        return false;
    }
    if (email.trim() === '') {
        alert('Please enter an email address');
        return false;
    }

    if (!email.match(emailRegex)) {
        alert('Please enter a valid email address');
        return false;
    }

    // If all conditions are met, signup successful
    alert('Signup successful!');
    return true;    
}

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const passwordInput = document.getElementById('password');
    const passwordRetypeInput = document.getElementById("password-retype");
    const emailInput = document.getElementById('email');
    
    passwordInput.addEventListener('input', function () {
        if (!passwordInput.value.match(passwordRegex)) {
            passwordInput.setCustomValidity('Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character');
            passwordInput.reportValidity();
        } else {
            passwordInput.setCustomValidity('');
        }
    });

    passwordRetypeInput.addEventListener('input', function () {
        if (passwordInput.value !== passwordRetypeInput.value) {
            passwordRetypeInput.setCustomValidity('Passwords do not match');
            passwordRetypeInput.reportValidity();
        } else {
            passwordRetypeInput.setCustomValidity('');
        }
    });

    emailInput.addEventListener('input', function () {
        if (!emailInput.value.match(emailRegex)) {
            emailInput.setCustomValidity('Please enter a valid email address');
            emailInput.reportValidity();
        } else {
            emailInput.setCustomValidity('');
        }
    });

    form.addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });
});

function validateForm() {
    // Your existing validation code...
    // Ensure this function returns true or false based on the validation
}

// Add similar input event listeners for other fields as needed, following the pattern used for password and email.




