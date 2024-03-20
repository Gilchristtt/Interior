document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        var email = document.getElementById('email').value.trim();
        var password = document.getElementById('password').value.trim();

        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../actions/login_actions.php', true); // Adjusted server endpoint URL
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // If login is successful, redirect the user
                        if (response.user_role == 1) {
                            window.location.href = '../view/booking/booking.php?success=Login successful!';
                        } else if (response.user_role != 1) {
                            window.location.href = '../admin/adminpanel.php';
                        } else {
                            // Handle other user roles or unexpected responses
                            alert('Unknown user role');
                        }
                    } else {
                        // If login fails, display error message
                        alert(response.message);
                    }
                } else {
                    // Handle other HTTP statuses
                    alert('Error: ' + xhr.statusText);
                }
            }
        };
        xhr.send("email=" + email + "&password=" + password);
    });
});

