<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-container button:hover {
            background-color: #4cae4c;
        }
    </style>
    <script>
        function validate() {
            // Predefined username and password
            const uname = "Arya";
            const pass = "1234";

            // Get the values entered by the user
            const euname = document.getElementById("username").value;
            const epass = document.getElementById("password").value;

            // Validate username and password
            if (euname === uname && epass === pass) {
                alert("Login successful!");
                window.location.href = "home.html";  // Redirect to home page
            } else {
                alert("Invalid username or password");
            }

            return false;  // Prevent form submission
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Login Page</h2>
        <form onsubmit="return validate();">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
