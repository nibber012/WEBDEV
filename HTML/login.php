
<div class="interface-container">
    <div class="login-interface">
        <h1>Welcome to Data Breach</h1>
        <p class="tw">Please login to continue.</p>
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        
        <p>Don't have an account? <a href="#" id="show-register">Register here</a></p>

    </div>
    <div class="register-interface hidden">
        <h2>Register</h2>
        <form action="db.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Re-enter password:</label>
            <input type="re-enter-password" id="re-enter-password" name="re-enter-rpassword" required>
            <p id="password-error" class="error-message"></p>

            <button type="submit">Register</button>
        </form>
        
        <p>Already have an account? <a href="#" id="show-login">Login here</a></p>

    </div>
</div>
    <div class="login-page-overlay" id="login-overlay"></div>