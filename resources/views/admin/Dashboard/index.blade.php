@extends('admin.layouts.index')

@section('container')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .welcome-section {
        font-family: 'Inter', sans-serif;
        background: #ffffff;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .container {
        text-align: center;
        position: relative;
        z-index: 2;
        max-width: 800px;
        padding: 2rem;
    }

    .welcome-text {
        font-size: clamp(2.5rem, 8vw, 5rem);
        font-weight: 800;
        color: #1e3a8a;
        margin-bottom: 1rem;
        position: relative;
        animation: fadeInUp 1s ease-out;
        text-shadow: 0 4px 20px rgba(30, 58, 138, 0.2);
    }

    .welcome-text::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, #2563eb, #3b82f6);
        border-radius: 2px;
        animation: slideIn 1.5s ease-out 0.5s both;
    }

    .user-greeting {
        font-size: clamp(1.2rem, 4vw, 2rem);
        font-weight: 500;
        color: #2563eb;
        margin-bottom: 0.5rem;
        animation: fadeInUp 1s ease-out 0.3s both;
    }

    .dashboard-subtitle {
        font-size: clamp(1rem, 3vw, 1.5rem);
        font-weight: 400;
        color: #3b82f6;
        margin-bottom: 2rem;
        animation: fadeInUp 1s ease-out 0.6s both;
    }

    .nawadikti-brand {
        font-size: clamp(0.9rem, 2.5vw, 1.2rem);
        font-weight: 600;
        color: #1e40af;
        letter-spacing: 2px;
        text-transform: uppercase;
        animation: fadeInUp 1s ease-out 0.9s both;
    }

    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .floating-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(37, 99, 235, 0.08);
        animation: float 6s ease-in-out infinite;
    }

    .circle-1 {
        width: 80px;
        height: 80px;
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .circle-2 {
        width: 120px;
        height: 120px;
        top: 60%;
        right: 15%;
        animation-delay: -2s;
    }

    .circle-3 {
        width: 60px;
        height: 60px;
        bottom: 20%;
        left: 20%;
        animation-delay: -4s;
    }

    .circle-4 {
        width: 100px;
        height: 100px;
        top: 30%;
        right: 30%;
        animation-delay: -1s;
    }

    .welcome-text:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
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

    @keyframes slideIn {
        from {
            width: 0;
        }
        to {
            width: 100px;
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        33% {
            transform: translateY(-20px) rotate(120deg);
        }
        66% {
            transform: translateY(10px) rotate(240deg);
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 1rem;
        }
        .welcome-text::after {
            width: 60px;
        }
    }

    .glass-card {
        background: rgba(37, 99, 235, 0.05);
        backdrop-filter: blur(12px);
        border-radius: 20px;
        border: 1px solid rgba(30, 64, 175, 0.15);
        padding: 3rem 2rem;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
        animation: fadeIn 1.2s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
</style>

<div class="welcome-section">
    <div class="floating-elements">
        <div class="floating-circle circle-1"></div>
        <div class="floating-circle circle-2"></div>
        <div class="floating-circle circle-3"></div>
        <div class="floating-circle circle-4"></div>
    </div>

    <div class="container">
        <div class="glass-card">
              <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="200"  class="me-2">

            <h1 class="welcome-text">SELAMAT DATANG</h1>
            <div class="nawadikti-brand">Sistem Informasi BEM FIKES</div>


        </div>
    </div>
</div>

<script>
    document.querySelector('.welcome-text').addEventListener('mouseenter', function () {
        this.style.textShadow = '0 6px 25px rgba(37, 99, 235, 0.4)';
    });

    document.querySelector('.welcome-text').addEventListener('mouseleave', function () {
        this.style.textShadow = '0 4px 20px rgba(30, 58, 138, 0.2)';
    });

    function updateGreeting() {
        const hour = new Date().getHours();



        if (hour < 10) {
            userGreeting.textContent = 'Selamat Pagi, Admin';
        } else if (hour < 15) {
            userGreeting.textContent = 'Selamat Siang, Admin';
        } else if (hour < 18) {
            userGreeting.textContent = 'Selamat Sore, Admin';
        } else {
            userGreeting.textContent = 'Selamat Malam, Admin';
        }
    }

    updateGreeting();
</script>

@endsection
