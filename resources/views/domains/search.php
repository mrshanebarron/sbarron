<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Search - sbarron.com</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
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
        }

        /* Navigation */
        nav {
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
        }

        nav .nav-links {
            display: flex;
            gap: 32px;
            list-style: none;
        }

        nav .nav-links a {
            text-decoration: none;
            color: var(--text-secondary);
            font-weight: 500;
            transition: color 0.2s;
        }

        nav .nav-links a:hover {
            color: var(--primary);
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
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <a href="/" class="logo">sbarron.com</a>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/domains/search">Domains</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Domain Search Component -->
    @livewire('domain-search')

    <!-- Shopping Cart -->
    @livewire('shopping-cart')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <p class="copyright">© <?php echo date('Y'); ?> Shane Barron. All rights reserved.</p>
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

    @livewireScripts
</body>
</html>
