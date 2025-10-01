<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'sbarron.com')</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

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
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, rgba(126, 179, 211, 0.05) 0%, rgba(248, 250, 252, 1) 100%);
            min-height: 100vh;
        }

        :root {
            --primary: #7eb3d3;
            --primary-dark: #6b95b3;
            --text-primary: #1a202c;
            --text-secondary: #4a5568;
            --border: #e2e8f0;
            --line-primary: #7eb3d3;
            --font-technical: 'Space Grotesk', -apple-system, sans-serif;
            --transition: all 0.2s ease;
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

        .navbar-blueprint .nav-links a.btn-contact {
            background: var(--line-primary);
            color: white;
            padding: 14px 28px;
            border-radius: 8px;
            border-bottom: none;
        }

        .navbar-blueprint .nav-links a.btn-contact:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* Add padding to body to account for fixed nav */
        body {
            padding-top: 70px;
        }

        /* Footer */
        footer {
            background: white;
            border-top: 1px solid var(--border);
            margin-top: 100px;
            padding: 40px 0 20px;
        }

        footer .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        footer .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        footer .footer-links {
            display: flex;
            gap: 24px;
            list-style: none;
        }

        footer .footer-links a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.2s;
        }

        footer .footer-links a:hover {
            color: var(--primary);
        }

        footer .copyright {
            color: var(--text-secondary);
            font-size: 14px;
        }
    </style>

    @yield('styles')
</head>
<body>
    @if(!isset($hideNav) || $hideNav !== true)
    <!-- Navigation -->
    <nav class="navbar-blueprint">
        <div class="container">
            <div class="nav-content">
                <!-- Brand Identity -->
                <div class="brand">
                    <div>
                        <div class="brand-name">
                            <a href="/">Shane Barron</a>
                        </div>
                        <div class="brand-tagline">Strategic Technology Architect</div>
                    </div>
                </div>
                <!-- Navigation Links -->
                <div class="nav-links">
                    <a href="/#services">
                        <i class="fa-duotone fa-thin fa-briefcase-blank" style="font-size: 16px;"></i>
                        Services
                    </a>
                    <a href="/domains/search">
                        <i class="fa-duotone fa-thin fa-globe" style="font-size: 16px;"></i>
                        Domains
                    </a>
                    <a href="/#portfolio">
                        <i class="fa-duotone fa-thin fa-laptop" style="font-size: 16px;"></i>
                        Portfolio
                    </a>
                    <a href="/#contact" class="btn-contact">
                        <i class="fa-duotone fa-thin fa-envelope" style="font-size: 14px;"></i>
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @endif

    <!-- Main Content -->
    @yield('content')

    @if(!isset($hideFooter) || $hideFooter !== true)
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <p class="copyright">© {{ date('Y') }} Shane Barron. All rights reserved.</p>
                <ul class="footer-links">
                    <li><a href="#privacy">Privacy Policy</a></li>
                    <li><a href="#terms">Terms of Service</a></li>
                    <li><a href="https://github.com/sponsors/mrshanebarron" target="_blank">
                        <i class="fa-solid fa-heart" style="color: #ea4aaa;"></i>
                        Sponsor
                    </a></li>
                </ul>
            </div>
        </div>
    </footer>
    @endif

    @livewireScripts

    @yield('scripts')
</body>
</html>
