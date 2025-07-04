@extends('layouts.app')

@section('content')
<style>
    :root {
        /* Light Mode Colors */
        --bg-primary: #f8fafc;
        --bg-secondary: #ffffff;
        --bg-card: rgba(255, 255, 255, 0.95);
        --text-primary: #1e293b;
        --text-secondary: #64748b;
        --text-muted: #94a3b8;
        --border-color: rgba(148, 163, 184, 0.3);
        --shadow-light: rgba(255, 255, 255, 0.7);
        --shadow-dark: rgba(148, 163, 184, 0.4);
        --accent-color: #3b82f6;
        --accent-hover: #2563eb;
        --error-bg: #fef2f2;
        --error-border: #fecaca;
        --error-text: #dc2626;
        --success-color: #10b981;
        --gradient-start: #667eea;
        --gradient-end: #764ba2;
    }

    [data-theme="dark"] {
        /* Dark Mode Colors */
        --bg-primary: #0f172a;
        --bg-secondary: #1e293b;
        --bg-card: rgba(30, 41, 59, 0.95);
        --text-primary: #f1f5f9;
        --text-secondary: #cbd5e1;
        --text-muted: #94a3b8;
        --border-color: rgba(148, 163, 184, 0.2);
        --shadow-light: rgba(255, 255, 255, 0.1);
        --shadow-dark: rgba(0, 0, 0, 0.5);
        --accent-color: #60a5fa;
        --accent-hover: #3b82f6;
        --error-bg: #1f2937;
        --error-border: #374151;
        --error-text: #f87171;
        --success-color: #34d399;
        --gradient-start: #1e293b;
        --gradient-end: #334155;
    }

    * {
        box-sizing: border-box;
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    }

    body {
        margin: 0;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    .login-wrapper {
        min-height: 100vh;
        background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        position: relative;
    }

    .theme-toggle {
        position: absolute;
        top: 30px;
        right: 30px;
        z-index: 1000;
    }

    .toggle-switch {
        position: relative;
        width: 60px;
        height: 30px;
        background: var(--bg-secondary);
        border-radius: 25px;
        border: 2px solid var(--border-color);
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow:
            4px 4px 8px var(--shadow-dark),
            -4px -4px 8px var(--shadow-light);
    }

    .toggle-switch::before {
        content: '';
        position: absolute;
        top: 2px;
        left: 2px;
        width: 22px;
        height: 22px;
        background: var(--accent-color);
        border-radius: 50%;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }

    .toggle-switch.dark::before {
        transform: translateX(28px);
        background: var(--accent-hover);
    }

    .toggle-icons {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 0 6px;
        pointer-events: none;
    }

    .toggle-icons span {
        font-size: 12px;
        opacity: 0.7;
    }

    .login-container {
        background: var(--bg-card);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        border: 1px solid var(--border-color);
        box-shadow:
            0 25px 50px rgba(0, 0, 0, 0.15),
            0 0 0 1px rgba(255, 255, 255, 0.1);
        padding: 48px 40px;
        width: 100%;
        max-width: 480px;
        animation: slideInUp 0.6s ease-out;
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .login-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .login-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 8px;
        background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .login-subtitle {
        color: var(--text-secondary);
        font-size: 1rem;
        font-weight: 400;
    }

    .form-group {
        margin-bottom: 24px;
        position: relative;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: var(--text-primary);
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-input {
        width: 100%;
        padding: 16px 20px;
        border: 2px solid var(--border-color);
        border-radius: 12px;
        background: var(--bg-secondary);
        color: var(--text-primary);
        font-size: 1rem;
        transition: all 0.3s ease;
        outline: none;
    }

    .form-input:focus {
        border-color: var(--accent-color);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        background: var(--bg-card);
    }

    .form-input::placeholder {
        color: var(--text-muted);
    }

    .checkbox-container {
        display: flex;
        align-items: center;
        margin: 24px 0;
        gap: 12px;
    }

    .custom-checkbox {
        position: relative;
        cursor: pointer;
    }

    .custom-checkbox input[type="checkbox"] {
        opacity: 0;
        position: absolute;
    }

    .checkmark {
        width: 20px;
        height: 20px;
        background: var(--bg-secondary);
        border: 2px solid var(--border-color);
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .custom-checkbox input[type="checkbox"]:checked + .checkmark {
        background: var(--accent-color);
        border-color: var(--accent-color);
    }

    .custom-checkbox input[type="checkbox"]:checked + .checkmark::after {
        content: '✓';
        color: white;
        font-weight: bold;
        font-size: 12px;
    }

    .checkbox-label {
        color: var(--text-secondary);
        font-weight: 500;
        cursor: pointer;
        user-select: none;
    }

    .btn-login {
        width: 100%;
        padding: 16px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
        color: white;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
        margin-top: 8px;
        position: relative;
        overflow: hidden;
    }

    .btn-login::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 35px rgba(59, 130, 246, 0.4);
    }

    .btn-login:hover::before {
        left: 100%;
    }

    .btn-login:active {
        transform: translateY(0);
    }

    .forgot-link {
        text-align: center;
        margin-top: 24px;
    }

    .forgot-link a {
        color: var(--accent-color);
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
    }

    .forgot-link a::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--accent-color);
        transition: width 0.3s ease;
    }

    .forgot-link a:hover::after {
        width: 100%;
    }

    .error-message {
        background: var(--error-bg);
        border: 1px solid var(--error-border);
        color: var(--error-text);
        border-radius: 8px;
        padding: 12px 16px;
        margin-top: 8px;
        font-size: 0.9rem;
        animation: shake 0.5s ease-in-out;
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }

    .loading-spinner {
        display: none;
        width: 20px;
        height: 20px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        border-top-color: white;
        animation: spin 1s ease-in-out infinite;
        margin-right: 8px;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    .btn-login.loading .loading-spinner {
        display: inline-block;
    }

    @media (max-width: 480px) {
        .login-container {
            padding: 32px 24px;
            margin: 16px;
        }

        .theme-toggle {
            top: 20px;
            right: 20px;
        }

        .login-title {
            font-size: 2rem;
        }
    }
</style>

<div class="login-wrapper">
    <!-- Theme Toggle -->
    {{-- <div class="theme-toggle">
        <div class="toggle-switch" id="themeToggle">
            <div class="toggle-icons">
                <span>☀️</span>
                <span>🌙</span>
            </div>
        </div>
    </div> --}}

    <div class="login-container">
        <div class="login-header">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="100">
            <h1 class="login-title">Welcome Back</h1>
            <p class="login-subtitle">Sign in to your account to continue</p>
        </div>

        <form method="POST" action="{{ route('login') }}" id="loginForm">
            @csrf

            <div class="form-group">
                <label for="email">{{ __('Email Address') }}</label>
                <input type="email"
                       class="form-input @error('email') is-invalid @enderror"
                       id="email"
                       name="email"
                       placeholder="Enter your email address"
                       value="{{ old('email') }}"
                       required
                       autocomplete="email"
                       autofocus>

                @error('email')
                    <div class="error-message">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input type="password"
                       class="form-input @error('password') is-invalid @enderror"
                       id="password"
                       name="password"
                       placeholder="Enter your password"
                       required
                       autocomplete="current-password">

                @error('password')
                    <div class="error-message">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="checkbox-container">
                <div class="custom-checkbox">
                    <input type="checkbox"
                           name="remember"
                           id="remember"
                           {{ old('remember') ? 'checked' : '' }}>
                    <span class="checkmark"></span>
                </div>
                <label for="remember" class="checkbox-label">{{ __('Remember me for 30 days') }}</label>
            </div>

            <button type="submit" class="btn-login" id="loginBtn">
                <span class="loading-spinner"></span>
                <span class="btn-text">{{ __('Sign In') }}</span>
            </button>

            @if (Route::has('password.request'))
                <div class="forgot-link">
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            @endif
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Theme Toggle Functionality
    const themeToggle = document.getElementById('themeToggle');
    const html = document.documentElement;

    // Check for saved theme preference or default to light mode
    const savedTheme = localStorage.getItem('theme') || 'light';
    html.setAttribute('data-theme', savedTheme);

    if (savedTheme === 'dark') {
        themeToggle.classList.add('dark');
    }

    themeToggle.addEventListener('click', function() {
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);

        if (newTheme === 'dark') {
            themeToggle.classList.add('dark');
        } else {
            themeToggle.classList.remove('dark');
        }
    });

    // Form Loading State
    const loginForm = document.getElementById('loginForm');
    const loginBtn = document.getElementById('loginBtn');

    loginForm.addEventListener('submit', function() {
        loginBtn.classList.add('loading');
        loginBtn.disabled = true;

        // Reset after 3 seconds (in case of no redirect)
        setTimeout(() => {
            loginBtn.classList.remove('loading');
            loginBtn.disabled = false;
        }, 3000);
    });

    // Input focus effects
    const inputs = document.querySelectorAll('.form-input');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });

        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
});
</script>
@endsection
