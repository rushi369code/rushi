<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Cake Delight</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            animation: fadeIn 1s ease-out;
        }

        .container {
            background-color: white;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            opacity: 0;
            animation: fadeInUp 1s forwards;
        }

        h1 {
            text-align: center;
            color: #ff7f50;
            margin-bottom: 20px;
            font-size: 28px;
            opacity: 0;
            animation: fadeInUp 1s 0.3s forwards;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 16px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], 
        input[type="email"], 
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus, 
        input[type="email"]:focus, 
        input[type="password"]:focus {
            border-color: #ff7f50;
            box-shadow: 0 0 5px rgba(255, 127, 80, 0.5);
            transform: scale(1.05);
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ff7f50;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e67e22;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            color: #ff7f50;
            text-decoration: none;
            font-weight: bold;
        }

        /* Fade In and Slide Up Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Create an Account</h1>
        
        <form id="signupForm">
            <!-- Name -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
                <div class="error" id="nameError"></div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
                <div class="error" id="emailError"></div>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <div class="error" id="passwordError"></div>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <div class="error" id="confirmPasswordError"></div>
            </div>

            <!-- Submit Button -->
            <button type="submit">Sign Up</button>
        </form>

        <div class="footer">
            <p>Already have an account? <a href="#">Log In</a></p>
        </div>
    </div>

    <script>
        const form = document.getElementById('signupForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Clear previous errors
            document.getElementById('nameError').textContent = '';
            document.getElementById('emailError').textContent = '';
            document.getElementById('passwordError').textContent = '';
            document.getElementById('confirmPasswordError').textContent = '';

            // Get form values
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();

            let isValid = true;

            // Name validation
            if (name === '') {
                document.getElementById('nameError').textContent = 'Name is required.';
                isValid = false;
            }

            // Email validation
            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (email === '') {
                document.getElementById('emailError').textContent = 'Email is required.';
                isValid = false;
            } else if (!emailRegex.test(email)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email address.';
                isValid = false;
            }

            // Password validation
            if (password === '') {
                document.getElementById('passwordError').textContent = 'Password is required.';
                isValid = false;
            } else if (password.length < 6) {
                document.getElementById('passwordError').textContent = 'Password must be at least 6 characters long.';
                isValid = false;
            }

            // Confirm Password validation
            if (confirmPassword === '') {
                document.getElementById('confirmPasswordError').textContent = 'Please confirm your password.';
                isValid = false;
            } else if (confirmPassword !== password) {
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match.';
                isValid = false;
            }

            // If all validations pass, submit the form
            if (isValid) {
                alert('Sign-up successful!');
            }
        });
    </script>

</body>
</html>
