<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
</body>
<div class="container">
        <div class="form-header">
            <div class="logo">DOLLAR SIGN</div>
            <div class="form-tabs">
                <div class="form-tab active" data-tab="login">Login</div>
                <div class="form-tab" data-tab="register">Register</div>
            </div>
        </div>
        
        <div class="form-content">
            <!-- Login Form -->
            <form class="form-section active" id="login-form">
                <div class="input-group">
                    <label for="login-email">Email</label>
                    <div class="input-field">
                        <input type="email" id="login-email" placeholder="Enter your email" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="login-password">Password</label>
                    <div class="input-field">
                        <input type="password" id="login-password" placeholder="Enter your password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                
                <div class="remember-forgot">
                    <div class="remember">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div>
                
                <button type="submit" class="btn">Login</button>
                
                <div class="social-login">
                    <h3>Or login with</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-apple"></i>
                        </a>
                    </div>
                </div>
                
                <div class="register-link">
                    Don't have an account? <a href="#" class="switch-form" data-form="register">Register now</a><br><br>

                    <a href="">Continue as a Guest</a>
                </div>
            </form>
            
            <!-- Registration Form -->
            <form class="form-section" id="register-form">
                <div class="input-group">
                    <label for="register-name">Full Name</label>
                    <div class="input-field">
                        <input type="text" id="register-name" placeholder="Enter your full name" required>
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="register-email">Email</label>
                    <div class="input-field">
                        <input type="email" id="register-email" placeholder="Enter your email" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="register-password">Password</label>
                    <div class="input-field">
                        <input type="password" id="register-password" placeholder="Create a password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                
                <div class="input-group">
                    <label for="register-confirm">Confirm Password</label>
                    <div class="input-field">
                        <input type="password" id="register-confirm" placeholder="Confirm your password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                
                <div class="remember">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">I agree to the Terms and Conditions</label>
                </div>
                
                <button type="submit" class="btn" style="margin-top: 25px;">Create Account</button>
                
                <div class="social-login">
                    <h3>Or register with</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-apple"></i>
                        </a>
                    </div>
                </div>
                
                <div class="login-link">
                    Already have an account? <a href="#" class="switch-form" data-form="login">Login</a>
                </div>
            </form>
        </div>
    </div>
    
    <script src="index.js"></script>
</html>