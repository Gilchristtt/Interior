// Password regular expression
const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;

// Email regular expression
const emailRegex = /^(?!\.)[a-zA-Z0-9._%+-]+@(?!-)(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/;

function validateForm() {
    var fname = document.getElementById('fname').value.trim();
    var lname = document.getElementById('lname').value.trim();
    var contact = document.getElementById('contact').value.trim();
    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value.trim();
    var retype_password = document.getElementById('Retype_Password').value.trim();
    var country = document.getElementById('client_country').value.trim();
    var city = document.getElementById('client_city').value.trim();

    if (fname === '') {
        alert('Please enter a first name');
        return false;
    }

    if (lname === '') {
        alert('Please enter a last name');
        return false;
    }

    if (!password.match(passwordRegex)) {
        alert('Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character');
        return false;
    }

    if (password === '') {
        alert('Please enter a password');
        return false;
    }

    if (retype_password === '') {
        alert('Please retype the password');
        return false;
    }

    if (password !== retype_password) {
        alert('Passwords do not match');
        return false;
    }

    if (country === '') {
        alert('Please select a country');
        return false;
    }

    if (city === '') {
        alert('Please enter a city');
        return false;
    }

    if (contact === '') {
        alert('Please enter a phone number');
        return false;
    }

    if (email === '') {
        alert('Please enter an email address');
        return false;
    }

    if (!email.match(emailRegex)) {
        alert('Please enter a valid email address');
        return false;
    }

    // All validations passed
    return true;
}

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission
        if (validateForm()) {
            // If form is valid, proceed with AJAX request
            var formData = new FormData(form);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '../actions/register_client_actions.php', true); // Changed server endpoint URL
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Successful response
                    alert('Signup successful!');
                    window.location.href = '../Interior/index.php'; // Redirect to success page
                } else {
                    // Handle error response
                    alert('Error: ' + xhr.statusText);
                }
            };
            xhr.onerror = function () {
                // Handle connection error
                alert('Error: Connection failed');
            };
            xhr.send(formData);
        }
    });
});
