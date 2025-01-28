<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <style>
    /* Basic Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    body {
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* Form Container */
    .signup-form {
      width: 100%;
      max-width: 450px;
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .signup-form h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #333;
    }

    /* Form Group */
    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      color: #555;
      margin-bottom: 8px;
      text-align: left;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 6px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      background-color: #f9f9f9;
    }

    .form-group input:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    /* Button */
    .submit-btn {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .submit-btn:hover {
      background-color: #0056b3;
      transform: scale(1.05);
    }

    /* Links */
    .signup-link {
      margin-top: 10px;
      font-size: 14px;
      color: #555;
    }

    .signup-link a {
      color: #007bff;
      text-decoration: none;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 600px) {
      .signup-form {
        width: 90%;
        padding: 20px;
      }

      .signup-form h2 {
        font-size: 24px;
      }

      .form-group input, .submit-btn {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <form class="signup-form">
    <h2>Create an Account</h2>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
    </div>
    
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    
    <div class="form-group">
      <label for="confirm_password">Confirm Password</label>
      <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
    </div>
    
    <button type="submit" class="submit-btn">Sign Up</button>

    <div class="signup-link">
      Already have an account? <a href="login.php">Log In</a>
    </div>
  </form>

</body>
</html>
s