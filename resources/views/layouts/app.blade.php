<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'sbarron.com')</title>

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#6b5b73">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/03fa4a3daf.js" crossorigin="anonymous"></script>

    @livewireStyles

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-blueprint);
            background: #fefefe;
            min-height: 100vh;
            color: var(--text-primary);
        }

        :root {
            /* Color System */
            --text-primary: #2d3436;
            --text-secondary: #636e72;
            --text-muted: #8b7c7b;
            --line-primary: #6b5b73;
            --line-secondary: #7eb3d3;
            --line-success: #22c55e;
            --line-weight: 1px;
            --line-weight-bold: 3px;

            /* Typography */
            --font-blueprint: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
            --font-technical: 'SF Mono', 'Monaco', 'Menlo', 'Consolas', monospace;

            /* Layout */
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --blueprint-bg: #faf9f8;
            --blueprint-paper: #fef8f3;
            --blueprint-dark: #1a1a1a;

            /* Graph Paper Background */
            --graph-size: 20px;
            --graph-color: rgba(107, 91, 115, 0.1);

            /* Legacy aliases for compatibility */
            --primary: #7eb3d3;
            --primary-dark: #6b95b3;
            --border: #e2e8f0;
        }

        /* AOS Override */
        [data-aos] {
            pointer-events: auto;
        }

        /* Navigation */
        .navbar-blueprint {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(248, 250, 252, 0.98);
            backdrop-filter: blur(12px);
            border-bottom: 2px solid var(--line-primary);
            border-radius: 0;
        }

        .navbar-blueprint .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 12px 40px;
        }

        .navbar-blueprint .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-blueprint .brand {
            display: flex;
            align-items: center;
        }

        .navbar-blueprint .brand-name {
            font-family: var(--font-technical);
            font-weight: 700;
            font-size: 18px;
            color: var(--text-primary);
        }

        .navbar-blueprint .brand-name a {
            color: inherit;
            text-decoration: none;
        }

        .navbar-blueprint .brand-tagline {
            color: var(--text-secondary);
            font-size: 10px;
            font-weight: 600;
            font-family: var(--font-technical);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .navbar-blueprint .nav-links {
            display: flex;
            gap: 48px;
            align-items: center;
        }

        .navbar-blueprint .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-family: var(--font-technical);
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 12px 0;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
            border-bottom: 2px solid transparent;
        }

        .navbar-blueprint .nav-links a:hover {
            color: var(--line-primary);
            border-bottom-color: var(--line-primary);
        }

        /* Dropdown Menu */
        .navbar-blueprint .nav-item {
            position: relative;
        }

        .navbar-blueprint .dropdown-menu {
            display: none;
            position: absolute;
            top: calc(100% - 8px);
            left: 0;
            background: #f3eee8;
            backdrop-filter: blur(12px);
            border: var(--line-weight-bold) solid var(--line-primary);
            border-radius: 8px;
            min-width: 220px;
            padding: 8px 0;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            z-index: 1001;
        }

        .navbar-blueprint .nav-item:hover .dropdown-menu {
            display: block;
        }

        .navbar-blueprint .dropdown-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            color: var(--text-secondary);
            text-decoration: none;
            font-family: var(--font-technical);
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition);
            border-bottom: none;
            white-space: nowrap;
        }

        .navbar-blueprint .dropdown-menu a:hover {
            background: rgba(107, 91, 115, 0.1);
            color: var(--line-primary);
            padding-left: 24px;
        }

        .navbar-blueprint .dropdown-menu a i {
            font-size: 14px;
            width: 16px;
        }

        .navbar-blueprint .nav-links a.btn-contact {
            background: var(--line-primary);
            color: white;
            padding: 14px 28px;
            border-radius: 8px;
            border-bottom: none;
        }

        .navbar-blueprint .nav-links a.btn-contact:hover {
            background: var(--line-primary);
            transform: translateY(-2px);
            opacity: 0.9;
        }

        /* Mobile Menu Toggle */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--text-primary);
            font-size: 20px;
            cursor: pointer;
            padding: 8px;
        }

        .mobile-menu {
            display: none;
            position: fixed;
            top: 70px;
            left: 0;
            right: 0;
            background: rgba(248, 250, 252, 0.98);
            backdrop-filter: blur(12px);
            border-bottom: 2px solid var(--line-primary);
            z-index: 999;
            padding: 20px 0;
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-menu a {
            display: block;
            padding: 16px 40px;
            color: var(--text-secondary);
            text-decoration: none;
            font-family: var(--font-technical);
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 1px solid rgba(107, 91, 115, 0.1);
            transition: var(--transition);
        }

        .mobile-menu a:hover {
            background: rgba(107, 91, 115, 0.05);
            color: var(--text-primary);
        }

        .mobile-menu a.hire-me {
            background: var(--line-primary);
            color: white;
            margin: 16px 40px 0;
            border-radius: 8px;
            text-align: center;
            border-bottom: none;
        }

        /* Mobile Responsive Design */
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }

            .navbar-blueprint .nav-links {
                display: none;
            }

            .navbar-blueprint .brand-name {
                font-size: 16px !important;
            }

            .navbar-blueprint .brand-tagline {
                font-size: 9px !important;
            }
        }

        /* Add padding to body to account for fixed nav */
        body {
            padding-top: 70px;
        }

        /* Footer */
        footer {
            background: rgba(248, 250, 252, 0.98);
            color: var(--text-secondary);
            text-align: center;
            padding: 60px 0 40px 0;
            border-top: 2px solid var(--line-primary);
            position: relative;
            backdrop-filter: blur(12px);
            margin-top: 100px;
        }

        footer .decorative-line {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: var(--line-weight-bold);
            background: var(--line-primary);
        }

        footer .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }

        footer .sponsors-section {
            margin-bottom: 40px;
            padding-bottom: 40px;
            border-bottom: 1px solid rgba(107, 91, 115, 0.2);
        }

        footer .sponsors-header {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        footer .sponsors-title {
            font-family: var(--font-technical);
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0;
            color: var(--text-primary);
        }

        footer .sponsors-description {
            font-family: var(--font-technical);
            font-size: 13px;
            color: var(--text-secondary);
            margin: 0 0 16px 0;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        footer .sponsor-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #24292e;
            color: white;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-family: var(--font-technical);
            font-weight: 600;
            font-size: 13px;
            transition: var(--transition);
        }

        footer .sponsor-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(36, 41, 46, 0.3);
        }

        footer .copyright {
            font-family: var(--font-technical);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0;
        }

        footer .tagline {
            font-family: var(--font-technical);
            font-size: 11px;
            color: var(--text-muted);
            margin: 8px 0 0 0;
        }

        footer .built-with {
            font-family: var(--font-technical);
            font-size: 10px;
            color: var(--text-secondary);
            margin: 16px 0 0 0;
            opacity: 0.8;
        }

        footer .footer-links {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid rgba(107, 91, 115, 0.2);
        }

        footer .footer-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-family: var(--font-technical);
            font-size: 11px;
            margin-right: 20px;
            transition: var(--transition);
        }

        footer .footer-links a:hover {
            color: var(--line-primary);
        }
    </style>

    @yield('styles')
    @yield('welcome-styles')
</head>
<body id="@yield('body-id', 'default')" style="@yield('body-style')">
    @if(!isset($hideNav) || $hideNav !== true)
    <!-- Navigation -->
    <nav class="navbar-blueprint" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1000; background: #f3eee8; backdrop-filter: blur(12px); border-bottom: 2px solid #6b5b73; border-radius: 0;">
        <div style="max-width: 1400px; margin: 0 auto; padding: 12px 40px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <!-- Brand Identity -->
                <a href="/" style="display: flex; align-items: center; gap: 16px; text-decoration: none;">
                    <img src="/images/metrix.webp" alt="Shane Barron" style="width: 48px; height: 48px; border-radius: 50%; object-fit: cover; background: rgba(255, 255, 255, 0.5); padding: 2px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
                    <div>
                        <div style="font-family: var(--font-blueprint); font-weight: 700; font-size: 18px; color: var(--text-primary);">
                            Shane Barron
                        </div>
                        <div style="color: var(--text-secondary); font-size: 10px; font-weight: 600; font-family: var(--font-technical); text-transform: uppercase; letter-spacing: 1px; line-height: 1.4;">
                            Strategic Technology<br>Architect
                        </div>
                    </div>
                </a>
                <!-- Navigation Links -->
                <div style="display: flex; gap: 48px; align-items: center;">
                    <!-- Consulting Services Dropdown -->
                    <div class="nav-item">
                        <a href="/#services" style="color: var(--text-secondary); text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; padding: 12px 0; transition: var(--transition); display: flex; align-items: center; gap: 8px; border-bottom: 2px solid transparent; cursor: pointer;">
                            <i class="fa-duotone fa-thin fa-briefcase" style="font-size: 16px;"></i>
                            Consulting
                            <i class="fa-duotone fa-thin fa-chevron-down" style="font-size: 10px; margin-left: 4px;"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="/#services" onclick="this.closest('.nav-item').style.pointerEvents='none'; setTimeout(() => this.closest('.nav-item').style.pointerEvents='auto', 100);">
                                <i class="fa-duotone fa-thin fa-chess-king"></i>
                                Strategic Consulting
                            </a>
                            <a href="/#services" onclick="this.closest('.nav-item').style.pointerEvents='none'; setTimeout(() => this.closest('.nav-item').style.pointerEvents='auto', 100);">
                                <i class="fa-duotone fa-thin fa-code"></i>
                                Development Services
                            </a>
                            <a href="/#approach" onclick="this.closest('.nav-item').style.pointerEvents='none'; setTimeout(() => this.closest('.nav-item').style.pointerEvents='auto', 100);">
                                <i class="fa-duotone fa-thin fa-lightbulb"></i>
                                My Approach
                            </a>
                            <a href="/#timeline" onclick="this.closest('.nav-item').style.pointerEvents='none'; setTimeout(() => this.closest('.nav-item').style.pointerEvents='auto', 100);">
                                <i class="fa-duotone fa-thin fa-clock"></i>
                                40 Years Experience
                            </a>
                        </div>
                    </div>

                    <!-- Services Dropdown -->
                    <div class="nav-item" style="display: none;">
                        <a href="#" style="color: var(--text-secondary); text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; padding: 12px 0; transition: var(--transition); display: flex; align-items: center; gap: 8px; border-bottom: 2px solid transparent; cursor: pointer;">
                            <i class="fa-duotone fa-thin fa-layer-group" style="font-size: 16px;"></i>
                            Services
                            <i class="fa-duotone fa-thin fa-chevron-down" style="font-size: 10px; margin-left: 4px;"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="/domains/search" onclick="this.closest('.nav-item').style.pointerEvents='none'; setTimeout(() => this.closest('.nav-item').style.pointerEvents='auto', 100);">
                                <i class="fa-duotone fa-thin fa-globe"></i>
                                Domain Registration
                            </a>
                            <a href="/hosting" onclick="this.closest('.nav-item').style.pointerEvents='none'; setTimeout(() => this.closest('.nav-item').style.pointerEvents='auto', 100);">
                                <i class="fa-duotone fa-thin fa-server"></i>
                                Managed Hosting
                            </a>
                        </div>
                    </div>

                    <!-- Portfolio -->
                    <a href="/#portfolio" style="color: var(--text-secondary); text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; padding: 12px 0; transition: var(--transition); display: flex; align-items: center; gap: 8px; border-bottom: 2px solid transparent;">
                        <i class="fa-duotone fa-thin fa-laptop" style="font-size: 16px;"></i>
                        Portfolio
                    </a>

                    <!-- Laravel Components -->
                    <a href="/components" style="color: var(--text-secondary); text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; padding: 12px 0; transition: var(--transition); display: none; align-items: center; gap: 8px; border-bottom: 2px solid transparent;">
                        <i class="fa-duotone fa-thin fa-box" style="font-size: 16px;"></i>
                        Components
                    </a>

                    @auth
                    <!-- Dashboard Link (Logged In Users) -->
                    <a href="/dashboard" style="color: var(--text-secondary); text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; padding: 12px 0; transition: var(--transition); display: flex; align-items: center; gap: 8px; border-bottom: 2px solid transparent;">
                        <i class="fa-duotone fa-thin fa-grid-2" style="font-size: 16px;"></i>
                        Dashboard
                    </a>

                    <!-- Logout Button -->
                    <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                        @csrf
                        <button type="submit" style="color: var(--text-secondary); background: none; border: none; cursor: pointer; font-family: var(--font-technical); font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; padding: 12px 0; transition: var(--transition); display: flex; align-items: center; gap: 8px; border-bottom: 2px solid transparent;">
                            <i class="fa-duotone fa-thin fa-right-from-bracket" style="font-size: 16px;"></i>
                            Logout
                        </button>
                    </form>
                    @endauth

                    @guest
                    <!-- Hire Me CTA -->
                    <a href="/#contact" class="rounded-lg" style="background: var(--line-primary); color: white; padding: 14px 28px; text-decoration: none; font-family: var(--font-technical); font-weight: 700; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; transition: var(--transition); display: flex; align-items: center; gap: 8px;">
                        <i class="fa-duotone fa-thin fa-rocket-launch" style="font-size: 14px;"></i>
                        Hire Me
                    </a>
                    @endguest
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
                    <i class="fa-duotone fa-thin fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="/#services" onclick="closeMobileMenu()">
            <i class="fa-duotone fa-thin fa-chess-king" style="font-size: 16px; margin-right: 12px;"></i>
            Strategic Consulting
        </a>
        <a href="/#services" onclick="closeMobileMenu()">
            <i class="fa-duotone fa-thin fa-code" style="font-size: 16px; margin-right: 12px;"></i>
            Development Services
        </a>
        <a href="/#approach" onclick="closeMobileMenu()">
            <i class="fa-duotone fa-thin fa-lightbulb" style="font-size: 16px; margin-right: 12px;"></i>
            My Approach
        </a>
        <a href="/#timeline" onclick="closeMobileMenu()">
            <i class="fa-duotone fa-thin fa-clock" style="font-size: 16px; margin-right: 12px;"></i>
            40 Years Experience
        </a>
        <a href="/domains/search" onclick="closeMobileMenu()">
            <i class="fa-duotone fa-thin fa-globe" style="font-size: 16px; margin-right: 12px;"></i>
            Domain Services
        </a>
        <a href="/#portfolio" onclick="closeMobileMenu()">
            <i class="fa-duotone fa-thin fa-laptop" style="font-size: 16px; margin-right: 12px;"></i>
            Portfolio
        </a>
        @auth
        <a href="/dashboard" onclick="closeMobileMenu()">
            <i class="fa-duotone fa-thin fa-grid-2" style="font-size: 16px; margin-right: 12px;"></i>
            Dashboard
        </a>
        @endauth
        <a href="/#contact" class="hire-me" onclick="closeMobileMenu()">
            <i class="fa-duotone fa-thin fa-rocket-launch" style="font-size: 14px; margin-right: 8px;"></i>
            Hire Me
        </a>
    </div>
    @endif

    <!-- Matrix Digital Rain Effect -->
    <canvas id="matrixCanvas" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: -1; opacity: 0.6;"></canvas>

    <!-- Main Content -->
    @yield('prepend-content')
    @yield('content')

    @if(!isset($hideFooter) || $hideFooter !== true)
    <!-- Footer -->
    <footer>
        <div class="decorative-line"></div>
        <div class="container">
            <!-- GitHub Sponsors Section -->
            <div class="sponsors-section">
                <div class="sponsors-header">
                    <i class="fa-duotone fa-thin fa-code-branch" style="font-size: 20px; color: var(--text-primary);"></i>
                    <h3 class="sponsors-title">Support Open Source Laravel Plugins</h3>
                </div>
                <p class="sponsors-description">
                    Production-grade Laravel packages on sbarron.com - built with 40 years of expertise, maintained with enterprise rigor. Your sponsorship keeps them free and growing.
                </p>
                <a href="https://github.com/sponsors/mrshanebarron" target="_blank" rel="noopener" class="sponsor-button">
                    <i class="fa-duotone fa-thin fa-heart" style="color: #ea4aaa;"></i>
                    Sponsor on GitHub
                </a>
            </div>

            <p class="copyright">
                © {{ date('Y') }} Shane Barron. Strategic Technology Consulting.
            </p>
            <p class="tagline">
                40 Years of Systematic Problem-Solving
            </p>
            <p class="built-with">
                Built with AI-powered DevOps automation and strategic AI agent foresight
            </p>
            <div class="footer-links">
                <a href="/privacy">Privacy Policy</a>
                <a href="/terms.html">Terms of Service</a>
            </div>
        </div>
    </footer>
    @endif

    <!-- Back to Top Button -->
    <button id="backToTop" style="position: fixed; bottom: 32px; right: 32px; width: 56px; height: 56px; background: var(--line-primary); color: white; border: none; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2); z-index: 1000; opacity: 0; transform: translateY(20px); transition: all 0.3s ease; backdrop-filter: blur(8px);">
        <i class="fa-duotone fa-thin fa-arrow-up" style="font-size: 20px;"></i>
    </button>

    @livewireScripts

    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Mobile menu functions
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('active');
        }

        function closeMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.remove('active');
        }

        // Back to Top Button
        const backToTopButton = document.getElementById("backToTop");
        if (backToTopButton) {
            window.addEventListener("scroll", () => {
                if (window.pageYOffset > 300) {
                    backToTopButton.style.opacity = "1";
                    backToTopButton.style.transform = "translateY(0)";
                } else {
                    backToTopButton.style.opacity = "0";
                    backToTopButton.style.transform = "translateY(20px)";
                }
            });

            backToTopButton.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        }

        // Matrix Digital Rain Effect
        const canvas = document.getElementById("matrixCanvas");
        if (canvas) {
            const ctx = canvas.getContext("2d");

            // Set canvas size
            function resizeCanvas() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }
            resizeCanvas();
            window.addEventListener("resize", resizeCanvas);

            // Matrix characters - 1s and 0s only
            const matrixChars = "10";
            const fontSize = 14;
            const columns = canvas.width / fontSize;
            const trailLength = 80;

            // Initialize columns
            const matrixColumns = [];
            for (let x = 0; x < columns; x++) {
                matrixColumns[x] = {
                    y: Math.floor(Math.random() * canvas.height / fontSize),
                    trail: []
                };
            }

            function drawMatrix() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.font = fontSize + "px monospace";

                for (let i = 0; i < matrixColumns.length; i++) {
                    const column = matrixColumns[i];

                    column.trail.unshift({
                        char: matrixChars[Math.floor(Math.random() * matrixChars.length)],
                        y: column.y
                    });

                    if (column.trail.length > trailLength) {
                        column.trail.pop();
                    }

                    for (let j = 0; j < column.trail.length; j++) {
                        const trailChar = column.trail[j];
                        const opacity = (trailLength - j) / trailLength * 0.9;
                        ctx.fillStyle = `rgba(180, 165, 187, ${opacity * 0.65})`;
                        ctx.fillText(trailChar.char, i * fontSize, trailChar.y * fontSize);
                    }

                    column.y++;

                    if (column.y * fontSize > canvas.height + trailLength * fontSize) {
                        column.y = -trailLength;
                        column.trail = [];
                    }
                }
            }

            setInterval(drawMatrix, 50);
        }
    </script>

    @yield('scripts')
    @yield('welcome-scripts')
</body>
</html>
