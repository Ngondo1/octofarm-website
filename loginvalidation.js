const loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit', async (event) => {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // 1. Client-Side Validation (Basic)
    if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return;
    }
    if (!validatePassword(password)) {
        alert("Password must be at least 8 characters and include uppercase, lowercase, numbers, and symbols.");
        return;
    }

    // 2. Server-Side Validation (Replace with your actual implementation)
    const isValid = await checkCredentialsWithDatabase(email, password); 

    if (isValid) {
        // Redirect to home page or perform other actions
        window.location.href = "home.html"; 
    } else {
        alert("Invalid credentials. Please try again.");
    }
});

// Email validation (basic check)
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

// Password validation (basic check)
function validatePassword(password) {
    // Check for at least 8 characters, uppercase, lowercase, numbers, and symbols
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    return re.test(String(password));
}

// Placeholder function for database interaction
async function checkCredentialsWithDatabase(email, password) {
    // Replace this with your actual database call (using AJAX or similar)
    // For this example, we'll use a hardcoded user for demonstration

    const validUser = {
        email: "user@example.com",
        password: "Password123!" // Example of a strong password
    };

    // Simulate a delay for a more realistic feel
    await new Promise(resolve => setTimeout(resolve, 1000)); 

    return email === validUser.email && password === validUser.password;
}
