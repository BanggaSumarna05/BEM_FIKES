<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="icon" type="image/x-icon" href="{{ asset('public/assets/favicon.ico') }}" />

    <title>BEM-FIKES</title>
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Inter:400,500,600,700" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        :root {
            /* Light Mode Colors */
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --text-muted: #94a3b8;
            --border-color: rgba(148, 163, 184, 0.2);
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --accent-color: #3b82f6;
            --accent-hover: #2563eb;
            --success-color: #10b981;
            --navbar-bg: rgba(255, 255, 255, 0.95);
            --dropdown-bg: #ffffff;
        }

        [data-theme="dark"] {
            /* Dark Mode Colors */
            --bg-primary: #0f172a;
            --bg-secondary: #1e293b;
            --text-primary: #f1f5f9;
            --text-secondary: #cbd5e1;
            --text-muted: #94a3b8;
            --border-color: rgba(148, 163, 184, 0.1);
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.3);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.4);
            --accent-color: #60a5fa;
            --accent-hover: #3b82f6;
            --success-color: #34d399;
            --navbar-bg: rgba(15, 23, 42, 0.95);
            --dropdown-bg: #1e293b;
        }

        * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            margin: 0;
        }

        /* Enhanced Navbar Styles */
        .navbar-custom {
            background: var(--navbar-bg) !important;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 700 !important;
            font-size: 1.5rem !important;
            background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none !important;
        }

        .navbar-brand:hover {
            opacity: 0.8;
        }

        .nav-link {
            color: var(--text-secondary) !important;
            font-weight: 500 !important;
            font-size: 0.95rem !important;
            padding: 0.5rem 1rem !important;
            border-radius: 8px !important;
            transition: all 0.3s ease !important;
            position: relative;
        }

        .nav-link:hover {
            color: var(--accent-color) !important;
            background-color: rgba(59, 130, 246, 0.1) !important;
        }

        .nav-link.active {
            color: var(--accent-color) !important;
            background-color: rgba(59, 130, 246, 0.15) !important;
        }

        /* Theme Toggle in Navbar */
        .theme-toggle-nav {
            margin-left: 1rem;
            display: flex;
            align-items: center;
        }

        .toggle-switch-nav {
            position: relative;
            width: 50px;
            height: 24px;
            background: var(--bg-secondary);
            border-radius: 20px;
            border: 1px solid var(--border-color);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .toggle-switch-nav::before {
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            width: 18px;
            height: 18px;
            background: var(--accent-color);
            border-radius: 50%;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .toggle-switch-nav.dark::before {
            transform: translateX(24px);
            background: var(--accent-hover);
        }

        .toggle-icons-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 0 4px;
            pointer-events: none;
            font-size: 10px;
        }

        /* Dropdown Styles */
        .dropdown-menu {
            background: var(--dropdown-bg) !important;
            border: 1px solid var(--border-color) !important;
            border-radius: 12px !important;
            box-shadow: var(--shadow-md) !important;
            padding: 0.5rem !important;
            margin-top: 0.5rem !important;
            backdrop-filter: blur(10px);
        }

        .dropdown-item {
            color: var(--text-secondary) !important;
            border-radius: 8px !important;
            padding: 0.5rem 1rem !important;
            font-weight: 500 !important;
            transition: all 0.3s ease !important;
        }

        .dropdown-item:hover {
            background-color: rgba(59, 130, 246, 0.1) !important;
            color: var(--accent-color) !important;
        }

        .dropdown-toggle::after {
            margin-left: 0.5rem;
            vertical-align: 0.125em;
            transition: transform 0.3s ease;
        }

        .dropdown-toggle[aria-expanded="true"]::after {
            transform: rotate(180deg);
        }

        /* Navbar Toggler */
        .navbar-toggler {
            border: 1px solid var(--border-color) !important;
            border-radius: 8px !important;
            padding: 0.5rem !important;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2) !important;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='#{$text-secondary}' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }

        /* Main Content */
        main {
            min-height: calc(100vh - 80px);
            background: var(--bg-secondary);
        }

        /* User Avatar */
        .user-avatar {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
            margin-right: 0.5rem;
        }

        /* Enhanced responsive design */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.3rem !important;
            }

            .theme-toggle-nav {
                margin-left: 0;
                margin-top: 1rem;
                justify-content: center;
            }

            .navbar-collapse {
                padding-top: 1rem;
                border-top: 1px solid var(--border-color);
                margin-top: 1rem;
            }
        }

        /* Loading animation for navigation */
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }
    </style>
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-custom">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   BEM FIKES
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Add navigation items here if needed -->
                          <!-- Theme Toggle -->
                        <div class="theme-toggle">
                            <div class="toggle-switch" id="themeToggle">
                                <div class="toggle-icons">
                                    <span>☀️</span>
                                    <span>🌙</span>
                                </div>
                            </div>
                        </div>

                    </ul>

                      </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Theme Toggle Functionality
            const themeToggleNav = document.getElementById('themeToggleNav');
            const html = document.documentElement;

            // Check for saved theme preference or default to light mode
            const savedTheme = localStorage.getItem('theme') || 'light';
            html.setAttribute('data-theme', savedTheme);

            if (savedTheme === 'dark') {
                themeToggleNav.classList.add('dark');
            }

            themeToggleNav.addEventListener('click', function() {
                const currentTheme = html.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

                html.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);

                if (newTheme === 'dark') {
                    themeToggleNav.classList.add('dark');
                } else {
                    themeToggleNav.classList.remove('dark');
                }
            });

            // Enhanced dropdown animation
            const dropdownToggle = document.getElementById('navbarDropdown');
            if (dropdownToggle) {
                dropdownToggle.addEventListener('click', function() {
                    const isExpanded = this.getAttribute('aria-expanded') === 'true';
                    if (isExpanded) {
                        this.classList.add('show');
                    } else {
                        this.classList.remove('show');
                    }
                });
            }

            // Add active class to current page nav link
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
