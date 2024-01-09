document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("validationForm");

    form.addEventListener("submit", function (event) {
        // Prevent the form from submitting by default
        event.preventDefault();

        // Validate email and password
        const emailInput = document.getElementById("email");
        const passwordInput = document.getElementById("password");

        if (!validateEmail(emailInput.value)) {
            alert("Invalid email address");
            return;
        }

        if (!validatePassword(passwordInput.value)) {
            alert("Invalid password");
            return;
        }

        // If validation passes, you can submit the form or perform other actions
        alert("Form submitted successfully");
    });

    // Email validation function
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Password validation function
    function validatePassword(password) {
        const passwordRegex = /^[A-Z-a-z-0-9-!@#$%^&*()]{8,}$/;
        return passwordRegex.test(password);
    }
});