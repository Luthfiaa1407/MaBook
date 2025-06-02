<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator | MaBook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Dark Academia Color Palette */
            --dark-1: #1A120B; /* Dark Brown */
            --dark-2: #3C2A21; /* Medium Brown */
            --dark-3: #5C3D2E; /* Light Brown */
            --accent-1: #B85C38; /* Rust */
            --accent-2: #E0C097; /* Cream */
            --text-light: #F5F5F5;
            --paper: #F0E4D4; /* Vintage Paper */
            --error: #D32F2F;
            --success: #388E3C;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Crimson Text', serif;
            background-color: var(--dark-1);
            color: var(--text-light);
            background-image: url('https://www.transparenttextures.com/patterns/black-paper.png');
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .login-container {
            width: 100%;
            max-width: 1000px;
            display: flex;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
            border-radius: 12px;
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out;
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

        .login-form {
            width: 50%;
            padding: 3rem;
            background: var(--dark-2);
            position: relative;
            z-index: 1;
        }

        .login-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://www.transparenttextures.com/patterns/black-paper.png');
            opacity: 0.1;
            z-index: -1;
        }

        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .login-header h1 {
            font-size: 2.8rem;
            color: var(--accent-2);
            margin-bottom: 0.5rem;
            font-family: 'UnifrakturMaguntia', cursive;
            letter-spacing: 3px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .login-header p {
            color: var(--accent-2);
            opacity: 0.9;
            font-style: italic;
            position: relative;
            display: inline-block;
            font-size: 1.1rem;
        }

        .login-header p::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-1), transparent);
        }

        .form-group {
            margin-bottom: 1.8rem;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            color: var(--accent-2);
            font-size: 0.95rem;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .input-wrapper {
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 1rem 1.2rem;
            padding-right: 3rem;
            background-color: var(--dark-3);
            border: 2px solid var(--dark-3);
            color: var(--accent-2);
            font-family: inherit;
            font-size: 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--accent-1);
            box-shadow: 0 0 0 3px rgba(184, 92, 56, 0.2);
            background-color: rgba(92, 61, 46, 0.8);
        }

        .form-group input::placeholder {
            color: var(--accent-2);
            opacity: 0.6;
        }

        .input-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--accent-2);
            opacity: 0.6;
            font-size: 1.1rem;
        }

        .password-toggle {
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .password-toggle:hover {
            opacity: 1;
        }

        .login-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, var(--accent-1), #9c4b2a);
            color: var(--text-light);
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1.5rem;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .login-btn:hover {
            background: linear-gradient(135deg, #9c4b2a, var(--accent-1));
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(184, 92, 56, 0.4);
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:active {
            transform: translateY(-1px);
        }

        .login-image {
            width: 50%;
            background-image: url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80');
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .login-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(26, 18, 11, 0.6), rgba(60, 42, 33, 0.4));
        }

        .image-overlay {
            position: absolute;
            bottom: 2rem;
            left: 2rem;
            right: 2rem;
            color: var(--text-light);
            z-index: 2;
        }

        .image-overlay h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            font-family: 'UnifrakturMaguntia', cursive;
        }

        .image-overlay p {
            opacity: 0.9;
            font-style: italic;
            line-height: 1.4;
        }

        .forgot-password {
            text-align: center;
            margin-top: 1.5rem;
        }

        .forgot-password a {
            color: var(--accent-2);
            text-decoration: none;
            font-size: 0.9rem;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .forgot-password a:hover {
            opacity: 1;
            text-decoration: underline;
        }

        .error-message {
            background-color: rgba(211, 47, 47, 0.1);
            border: 1px solid var(--error);
            color: var(--error);
            padding: 0.8rem;
            border-radius: 6px;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .loading .login-btn {
            background: #666;
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                max-width: 500px;
            }
            
            .login-form,
            .login-image {
                width: 100%;
            }
            
            .login-image {
                height: 250px;
                order: -1;
            }

            .login-form {
                padding: 2rem;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 0.5rem;
            }

            .login-form {
                padding: 1.5rem;
            }
            
            .login-header h1 {
                font-size: 2.2rem;
                letter-spacing: 2px;
            }

            .login-image {
                height: 200px;
            }
        }

        @media (max-width: 480px) {
            .login-header h1 {
                font-size: 2rem;
            }

            .form-group input {
                padding: 0.8rem 1rem;
                padding-right: 2.5rem;
            }

            .input-icon {
                right: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <div class="login-header">
                <h1>MaBooK</h1>
                <p>Administrator Access</p>
            </div>
            
            <form id="loginForm" method="POST" novalidate>
                <div id="errorMessage" class="error-message" style="display: none;">
                    Username atau password tidak valid!
                </div>

                <div class="form-group">
                    <label for="username">USERNAME / EMAIL</label>
                    <div class="input-wrapper">
                        <input 
                            type="text" 
                            id="username" 
                            name="username"
                            placeholder="username@mabook.com"
                            required
                            autocomplete="username"
                        >
                        <i class="fas fa-user input-icon"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">PASSWORD</label>
                    <div class="input-wrapper">
                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            placeholder="••••••••••••"
                            required
                            autocomplete="current-password"
                        >
                        <i class="fas fa-eye password-toggle input-icon" id="togglePassword"></i>
                    </div>
                </div>
                
                <button type="submit" class="login-btn" id="loginBtn">
                    <span class="btn-text">MASUK</span>
                    <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i>
                </button>

                <div class="forgot-password">
                    <a href="#" onclick="alert('Hubungi administrator untuk reset password')">Lupa password?</a>
                </div>
            </form>
        </div>
        
        <div class="login-image">
            <div class="image-overlay">
                <h3>Knowledge Hub</h3>
                <p>Akses sistem manajemen untuk administrator</p>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        const loginForm = document.getElementById('loginForm');
        const errorMessage = document.getElementById('errorMessage');
        const loginBtn = document.getElementById('loginBtn');

        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value;

            errorMessage.style.display = 'none';

            if (!username || !password) {
                showError('Harap isi semua field yang diperlukan!');
                return;
            }

            showLoading(true);

            setTimeout(() => {
                // Demo credentials
                if (username === 'admin@mabook.com' && password === 'admin123') {
                    alert('Login berhasil! Mengarahkan ke dashboard...');
                    window.location.href = 'dashboard.php';
                } else {
                    showError('Username atau password tidak valid!');
                    showLoading(false);
                }
            }, 1500);
        });

        function showError(message) {
            errorMessage.textContent = message;
            errorMessage.style.display = 'block';
        }

        function showLoading(loading) {
            if (loading) {
                loginBtn.disabled = true;
                document.querySelector('.btn-text').textContent = 'MEMPROSES...';
                document.body.classList.add('loading');
            } else {
                loginBtn.disabled = false;
                document.querySelector('.btn-text').textContent = 'MASUK';
                document.body.classList.remove('loading');
            }
        }

        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.parentElement.style.transform = 'translateX(5px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.parentElement.style.transform = 'translateX(0)';
            });
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && document.activeElement.tagName !== 'BUTTON') {
                loginForm.dispatchEvent(new Event('submit'));
            }
        });
    </script>
</body>
</html>