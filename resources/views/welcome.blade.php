@extends('layouts.app')

@section('title', 'Shane Barron - Strategic Technology Architect | AI-Integrated Enterprise Systems | 40 Years Experience')

@section('body-id', 'top')
@section('body-style', 'color: var(--text-primary); font-family: var(--font-blueprint); scroll-padding-top: 90px; scroll-behavior: smooth;')

@section('welcome-styles')
<style>
        /* Technical styling */
        .blueprint-code {
            font-family: var(--font-technical);
            font-size: 0.9em;
            color: var(--line-secondary);
            font-weight: 600;
        }

        .section-title-blueprint::before {
            content: "[" attr(data-section) "] ";
            font-family: var(--font-technical);
            font-size: 0.4em;
            color: var(--line-secondary);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .story-highlight {
            padding: 20px;
            margin: 24px 0;
            background: rgba(126, 179, 211, 0.15);
            border-left: 4px solid rgba(126, 179, 211, 0.6);
        }

        .technical-list-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--text-secondary);
            font-family: var(--font-technical);
            font-size: 0.9rem;
        }

        .technical-list-item i {
            color: var(--line-primary);
            font-size: 14px;
            width: 16px;
        }

        /* Remove border radius from navbar */
        .navbar-blueprint {
            border-radius: 0 !important;
        }


        /* Mobile Navigation */
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
            body {
                scroll-padding-top: 90px;
            }

            /* Show mobile menu toggle, hide desktop nav */
            .mobile-menu-toggle {
                display: block;
            }

            .navbar-blueprint div > div:last-child {
                display: none;
            }

            /* Services grid to single column on mobile */
            #services > div > div:nth-of-type(2) {
                grid-template-columns: 1fr !important;
            }

            /* Adjust brand on mobile */
            .navbar-blueprint div > div:first-child > div:first-child {
                width: 36px !important;
                height: 36px !important;
            }

            .navbar-blueprint div > div:first-child > div:last-child > div:first-child {
                font-size: 16px !important;
            }

            .navbar-blueprint div > div:first-child > div:last-child > div:last-child {
                font-size: 9px !important;
            }

            /* Mobile Hero Section */
            .hero-section {
                padding-top: 140px !important;
                min-height: 90vh !important;
            }

            .hero-content {
                padding: 0 20px !important;
            }

            .hero-title-blueprint {
                font-size: clamp(2rem, 8vw, 3rem) !important;
                margin-bottom: 24px !important;
            }

            /* Mobile Sections */
            section {
                padding: 60px 0 !important;
            }

            section > div {
                padding: 0 20px !important;
                max-width: 100% !important;
            }

            /* Mobile Grid Layouts */
            .three-column-grid {
                grid-template-columns: 1fr !important;
                gap: 24px !important;
            }

            .two-column-grid {
                grid-template-columns: 1fr !important;
                gap: 32px !important;
            }

            /* Mobile Component Cards */
            .vision-component-blueprint,
            .comparison-card-before,
            .comparison-card-after,
            .contact-form-blueprint {
                padding: 24px !important;
                margin: 0 !important;
            }

            /* Mobile Typography */
            .section-title-blueprint {
                font-size: clamp(1.5rem, 6vw, 2.5rem) !important;
                margin-bottom: 12px !important;
            }

            .section-title-blueprint::before {
                font-size: 0.3em !important;
            }

            /* Mobile Timeline */
            .story-era {
                padding: 20px !important;
            }

            .story-title {
                font-size: 1.2rem !important;
            }

            .story-period {
                font-size: 0.8rem !important;
            }

            /* Mobile Back to Top Button */
            #backToTop {
                bottom: 20px !important;
                right: 20px !important;
                width: 48px !important;
                height: 48px !important;
            }

            #backToTop i {
                font-size: 18px !important;
            }

            /* Mobile Left Border Elements */
            section div[style*="padding-left: 80px"] {
                padding-left: 40px !important;
            }

            /* Mobile Graph Paper */
            body {
                background-size: 15px 15px !important;
            }

            /* Mobile Contact Form Grid */
            #contact > div > div:nth-of-type(2) {
                grid-template-columns: 1fr !important;
            }
        }

        @media (max-width: 480px) {
            .navbar-blueprint div {
                padding: 6px 16px !important;
            }

            .hero-section {
                padding-top: 120px !important;
            }

            .hero-content {
                padding: 0 16px !important;
            }

            section > div {
                padding: 0 16px !important;
            }

            .vision-component-blueprint,
            .comparison-card-before,
            .comparison-card-after,
            .contact-form-blueprint {
                padding: 20px !important;
            }

            #backToTop {
                bottom: 16px !important;
                right: 16px !important;
                width: 44px !important;
                height: 44px !important;
            }

            /* Smaller graph paper on very small screens */
            body {
                background-size: 12px 12px !important;
            }
        }

        /* Timeline Styles */
        .timeline-container {
            position: relative;
            padding: 40px 0;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-spine {
            position: absolute;
            left: 50px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, var(--line-secondary) 0%, var(--line-primary) 100%);
        }

        .timeline-era {
            display: flex;
            gap: 40px;
            margin-bottom: 60px;
            align-items: flex-start;
            opacity: 0.3;
            transform: translateY(20px);
            transition: all 0.6s ease;
            position: relative;
        }

        .timeline-era.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .timeline-milestone {
            width: 100px;
            height: 100px;
            background: var(--text-primary);
            border: 3px solid var(--blueprint-paper);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-technical);
            font-weight: 700;
            font-size: 18px;
            color: white;
            position: relative;
            z-index: 2;
            flex-shrink: 0;
            box-shadow: 0 0 0 8px var(--blueprint-bg);
        }

        .timeline-connector {
            display: none;
        }

        .timeline-story {
            background: var(--blueprint-paper);
            border: 2px solid var(--line-secondary);
            border-radius: 12px;
            padding: 32px;
            position: relative;
            flex: 1;
        }

        .story-title {
            font-family: var(--font-technical);
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 8px;
            text-transform: none;
            letter-spacing: normal;
        }

        .story-period {
            font-family: var(--font-technical);
            font-size: 0.75rem;
            color: var(--text-secondary);
            margin-bottom: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .story-narrative {
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: 16px;
            font-size: 0.95rem;
        }

        .tech-evolution {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 16px;
        }

        .tech-badge {
            background: rgba(126, 179, 211, 0.15);
            color: var(--line-primary);
            padding: 6px 14px;
            border-radius: 20px;
            font-family: var(--font-technical);
            font-size: 0.75rem;
            font-weight: 600;
            border: 1px solid rgba(126, 179, 211, 0.3);
        }

        @media (max-width: 768px) {
            .timeline-container {
                padding-left: 20px;
            }

            .timeline-spine {
                left: 30px;
            }

            .timeline-era {
                gap: 20px;
            }

            .timeline-milestone {
                width: 60px;
                height: 60px;
                font-size: 14px;
            }

            .timeline-story {
                padding: 20px;
            }
        }
    </style>
</head>

</style>
@endsection


@section('content')
    <!-- Hero Section - Technical Drawing Style -->
    <section class="hero-section" style="min-height: 100vh; display: flex; align-items: center; position: relative; padding-top: 120px;">

        <div class="hero-content" style="max-width: 1200px; margin: 0 auto; padding: 0 40px; position: relative; z-index: 1; display: grid; grid-template-columns: 1fr auto; gap: 60px; align-items: center;">
            <div style="max-width: 700px;">
                <h1 class="hero-title-blueprint" data-aos="fade-up" data-aos-delay="200" style="font-size: clamp(3rem, 6vw, 5rem); font-weight: 300; line-height: 1.1; margin-bottom: 32px; color: var(--text-primary);">
                    AI Speed.<br>Expert Validation.<br>Production Results.
                </h1>
                <p class="hero-subtitle-blueprint" data-aos="fade-up" data-aos-delay="400" style="font-size: 1.2rem; margin-bottom: 32px; line-height: 1.6; max-width: 700px;">
                    Most developers using AI can't debug what they build. I close that gap with 40 years of pattern recognition.
                </p>
                <div class="story-highlight" data-aos="fade-up" data-aos-delay="500" style="max-width: 700px; margin-bottom: 32px; background: rgba(126, 179, 211, 0.1); border-left: 4px solid rgba(126, 179, 211, 0.6); padding: 20px; border-radius: 8px;">
                    <p style="font-size: 1.1rem; font-weight: 600; color: var(--text-primary); margin: 0; font-family: var(--font-technical);">
                        <i class="fa-duotone fa-thin fa-code-branch" style="color: var(--line-secondary); margin-right: 12px;"></i>
                        The Gap: Fast code generation without validation capability
                    </p>
                </div>
                <div class="story-highlight" data-aos="fade-up" data-aos-delay="600" style="max-width: 700px; margin-bottom: 48px; background: rgba(34, 197, 94, 0.1); border-left: 4px solid #22c55e; padding: 20px; border-radius: 8px;">
                    <p style="font-size: 1.1rem; font-weight: 600; color: var(--text-primary); margin: 0; font-family: var(--font-technical);">
                        <i class="fa-duotone fa-thin fa-shield-check" style="color: #22c55e; margin-right: 12px;"></i>
                        The Bridge: AI acceleration + expert validation = production-ready systems
                    </p>
                </div>
                <a href="#contact" class="rounded-lg" data-aos="fade-up" data-aos-delay="800" style="display: inline-flex; align-items: center; gap: 12px; background: var(--line-primary); color: white; padding: 16px 32px; border: none; text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px; transition: var(--transition); position: relative;">
                    <span style="position: absolute; top: -8px; right: -8px; width: 16px; height: 16px; border-top: var(--line-weight-bold) solid var(--line-primary); border-right: var(--line-weight-bold) solid var(--line-primary);"></span>
                    <i class="fa-duotone fa-thin fa-rocket-launch" style="font-size: 18px;"></i>
                    Hire Me for Your Project
                </a>
            </div>

            <!-- Metrix Photo -->
            <div class="hero-image" data-aos="fade-left" data-aos-delay="400" style="position: relative; text-align: center;">
                <img src="/images/metrix.webp" alt="Shane Barron - Metrix" style="width: 300px; height: 300px; object-fit: cover; border-radius: 50%; display: block; margin: 0 auto 20px auto; background: rgba(255, 255, 255, 0.5); padding: 8px; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);">
                <div style="text-align: center;">
                    <div style="font-family: var(--font-blueprint); font-weight: 700; font-size: 24px; color: var(--text-primary); margin-bottom: 8px;">Shane Barron</div>
                    <div style="color: var(--text-secondary); font-size: 14px; font-weight: 600; font-family: var(--font-technical); text-transform: uppercase; letter-spacing: 1px;">Strategic Technology Architect</div>
                </div>
            </div>
        </div>

        <!-- Mobile responsive adjustments -->
        <style>
            @media (max-width: 768px) {
                .hero-content {
                    grid-template-columns: 1fr !important;
                    gap: 40px !important;
                    text-align: center;
                }
                .hero-image {
                    order: -1;
                }
                .hero-image img {
                    width: 200px !important;
                    height: 200px !important;
                }
            }
        </style>
    </section>

    <!-- Complete Services Section -->
    <section id="services" style="padding: 100px 0; background: linear-gradient(135deg, rgba(126, 179, 211, 0.05) 0%, rgba(248, 250, 252, 1) 100%); position: relative;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px;">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 class="section-title-blueprint" data-aos="fade-up" style="font-size: clamp(2rem, 5vw, 3rem); font-weight: 400; color: var(--text-primary); margin-bottom: 20px;">
                    Everything Your Project Needs
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" style="font-family: var(--font-technical); font-size: 1.2rem; color: var(--text-secondary); max-width: 800px; margin: 0 auto; line-height: 1.6;">
                    One partner for your entire digital presence. From domain to deployment to ongoing support.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
                <!-- Domain Registration -->
                <div data-aos="fade-up" data-aos-delay="200" class="service-card" style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-secondary); padding: 40px; position: relative; transition: var(--transition);">
                    <div style="position: absolute; top: -12px; left: 20px; background: var(--blueprint-paper); padding: 0 12px;">
                        <i class="fa-duotone fa-thin fa-globe" style="font-size: 28px; color: var(--line-primary);"></i>
                    </div>
                    <h3 style="font-family: var(--font-technical); font-size: 1.3rem; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Domain Registration
                    </h3>
                    <p style="color: var(--text-secondary); line-height: 1.6; margin-bottom: 20px; font-size: 0.95rem;">
                        Fast DNS propagation through Name.com. Competitive pricing with expert management included.
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 20px 0;">
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-bolt-lightning" style="color: var(--line-primary); font-size: 18px;"></i>
                            Lightning-fast DNS updates
                        </li>
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-sliders" style="color: var(--line-primary); font-size: 18px;"></i>
                            Full DNS management
                        </li>
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-shield-check" style="color: var(--line-primary); font-size: 18px;"></i>
                            Privacy protection included
                        </li>
                    </ul>
                </div>

                <!-- Laravel Hosting -->
                <div data-aos="fade-up" data-aos-delay="300" class="service-card" style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-secondary); padding: 40px; position: relative; transition: var(--transition);">
                    <div style="position: absolute; top: -12px; left: 20px; background: var(--blueprint-paper); padding: 0 12px;">
                        <i class="fa-duotone fa-thin fa-server" style="font-size: 28px; color: var(--line-primary);"></i>
                    </div>
                    <h3 style="font-family: var(--font-technical); font-size: 1.3rem; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Managed Hosting
                    </h3>
                    <p style="color: var(--text-secondary); line-height: 1.6; margin-bottom: 20px; font-size: 0.95rem;">
                        Production-ready Laravel hosting on optimized infrastructure. No DevOps headaches.
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 20px 0;">
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-layer-group" style="color: var(--line-primary); font-size: 18px;"></i>
                            LEMP stack optimized for Laravel
                        </li>
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-lock-keyhole" style="color: var(--line-primary); font-size: 18px;"></i>
                            Free SSL certificates
                        </li>
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-arrows-rotate" style="color: var(--line-primary); font-size: 18px;"></i>
                            Automated deployments
                        </li>
                    </ul>
                </div>

                <!-- Custom Development -->
                <div data-aos="fade-up" data-aos-delay="400" class="service-card" style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-primary); padding: 40px; position: relative; transition: var(--transition); box-shadow: 0 4px 20px rgba(126, 179, 211, 0.15);">
                    <div style="position: absolute; top: -12px; left: 20px; background: var(--blueprint-paper); padding: 0 12px;">
                        <i class="fa-duotone fa-thin fa-code" style="font-size: 28px; color: var(--line-primary);"></i>
                    </div>
                    <div style="position: absolute; top: 10px; right: 10px; background: var(--line-primary); color: white; padding: 4px 12px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        Core Service
                    </div>
                    <h3 style="font-family: var(--font-technical); font-size: 1.3rem; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Custom Development
                    </h3>
                    <p style="color: var(--text-secondary); line-height: 1.6; margin-bottom: 20px; font-size: 0.95rem;">
                        AI-accelerated development with 40 years of validation expertise. Production-ready, every time.
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-books" style="color: var(--line-primary); font-size: 18px;"></i>
                            Laravel + TALL stack expertise
                        </li>
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-grid-2" style="color: var(--line-primary); font-size: 18px;"></i>
                            Filament admin panels
                        </li>
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-eye" style="color: var(--line-primary); font-size: 18px;"></i>
                            Working demos before you hire
                        </li>
                    </ul>
                </div>

                <!-- Ongoing Support -->
                <div data-aos="fade-up" data-aos-delay="500" class="service-card" style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-secondary); padding: 40px; position: relative; transition: var(--transition);">
                    <div style="position: absolute; top: -12px; left: 20px; background: var(--blueprint-paper); padding: 0 12px;">
                        <i class="fa-duotone fa-thin fa-headset" style="font-size: 28px; color: var(--line-primary);"></i>
                    </div>
                    <h3 style="font-family: var(--font-technical); font-size: 1.3rem; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Ongoing Support
                    </h3>
                    <p style="color: var(--text-secondary); line-height: 1.6; margin-bottom: 20px; font-size: 0.95rem;">
                        One person to call for everything. DNS changes, bug fixes, feature updates—all handled.
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-screwdriver-wrench" style="color: var(--line-primary); font-size: 18px;"></i>
                            Server & DNS management
                        </li>
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-bug" style="color: var(--line-primary); font-size: 18px;"></i>
                            Bug fixes & updates
                        </li>
                        <li style="padding: 8px 0; color: var(--text-secondary); font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
                            <i class="fa-duotone fa-thin fa-clock" style="color: var(--line-primary); font-size: 18px;"></i>
                            Priority response times
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Value Proposition -->
            <div data-aos="fade-up" data-aos-delay="600" style="margin-top: 60px; text-align: center; background: rgba(126, 179, 211, 0.1); border: 2px solid rgba(126, 179, 211, 0.3); padding: 40px; border-radius: 12px;">
                <h3 style="font-family: var(--font-technical); font-size: 1.5rem; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; text-transform: uppercase; letter-spacing: 1px;">
                    <i class="fa-duotone fa-thin fa-shield-check" style="color: var(--line-primary); margin-right: 12px;"></i>
                    The Complete Advantage
                </h3>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.7; max-width: 900px; margin: 0 auto;">
                    Most developers hand off projects and disappear. I own your entire stack—from domain registration to production deployment.
                    <strong style="color: var(--line-primary);">One partner. One invoice. Zero headaches.</strong>
                </p>
            </div>
        </div>
    </section>


    <!-- Three-Path Architecture -->
    <section id="approach" style="padding: 100px 0; position: relative;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px;">
            <div style="text-align: left; margin-bottom: 40px; position: relative; padding-left: 80px;">
                <div style="position: absolute; left: 0; top: 0; bottom: 0; width: var(--line-weight-bold); background: var(--line-primary);"></div>
                <div style="position: absolute; left: 20px; top: 0; bottom: 0; width: var(--line-weight); background: var(--line-secondary);"></div>
                <h2 class="section-title-blueprint" data-section="SYS-001" data-aos="fade-up" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 400; color: var(--text-primary); margin-bottom: 16px;">
                    The Integration Advantage
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" style="font-family: var(--font-technical); font-size: 1.1rem; color: var(--text-secondary); max-width: 700px; line-height: 1.6; margin: 0 0 40px 0;">
                    Most AI-assisted developers generate code fast but can't validate it. Traditional developers validate thoroughly but work slowly. Integration approach delivers both: AI speed with expert validation.
                </p>

            </div>

            <div class="three-column-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px;">

                <!-- Column 1: Fast but Unvalidated -->
                <div class="vision-component-blueprint border-4 rounded-2xl p-8 flex flex-col" style="border-color: #f59e0b !important;" data-aos="fade-up" data-aos-delay="300">
                    <h3 style="font-family: var(--font-blueprint); font-size: 1.5rem; font-weight: 500; margin-bottom: 16px; color: var(--text-primary);">
                        Fast but Unvalidated
                    </h3>
                    <div style="display: flex; align-items: center; gap: 12px; padding: 12px 24px; background: rgba(245, 158, 11, 0.1); border-radius: 24px; border: 1px solid rgba(245, 158, 11, 0.2); margin-bottom: 20px;">
                        <i class="fa-duotone fa-thin fa-gauge-max" style="font-size: 16px; color: #f59e0b;"></i>
                        <span style="font-family: var(--font-technical); font-size: 0.9rem; font-weight: 600; color: var(--text-primary);">AI-First Developers</span>
                    </div>
                    <p style="color: var(--text-secondary); margin-bottom: 24px; font-size: 1rem; line-height: 1.6;">
                        Generate code quickly using AI but lack the expertise to validate what gets built. Speed without reliability.
                    </p>
                    <ul style="list-style: none; margin: 0;">
                        <li class="technical-list-item" style="padding: 4px 0; color: #f59e0b;">
                            <i class="fa-duotone fa-thin fa-bolt"></i>
                            Rapid prototyping
                        </li>
                        <li class="technical-list-item" style="padding: 4px 0; color: #f59e0b;">
                            <i class="fa-duotone fa-thin fa-question-circle"></i>
                            Can't debug failures
                        </li>
                        <li class="technical-list-item" style="padding: 4px 0; color: #f59e0b;">
                            <i class="fa-duotone fa-thin fa-exclamation-triangle"></i>
                            No architecture understanding
                        </li>
                        <li class="technical-list-item" style="padding: 4px 0; color: #f59e0b;">
                            <i class="fa-duotone fa-thin fa-code-simple"></i>
                            Prototypes don't scale
                        </li>
                    </ul>
                </div>

                <!-- Column 2: Validated but Slow -->
                <div class="vision-component-blueprint border-4 rounded-2xl p-8 flex flex-col" style="border-color: #6b7280 !important;" data-aos="fade-up" data-aos-delay="400">
                    <h3 style="font-family: var(--font-blueprint); font-size: 1.5rem; font-weight: 500; margin-bottom: 16px; color: var(--text-primary);">
                        Validated but Slow
                    </h3>
                    <div style="display: flex; align-items: center; gap: 12px; padding: 12px 24px; background: rgba(107, 114, 128, 0.1); border-radius: 24px; border: 1px solid rgba(107, 114, 128, 0.2); margin-bottom: 20px;">
                        <i class="fa-duotone fa-thin fa-clock" style="font-size: 16px; color: #6b7280;"></i>
                        <span style="font-family: var(--font-technical); font-size: 0.9rem; font-weight: 600; color: var(--text-primary);">Traditional Developers</span>
                    </div>
                    <p style="color: var(--text-secondary); margin-bottom: 24px; font-size: 1rem; line-height: 1.6;">
                        Build reliable systems through deep expertise but work slowly. Quality without speed.
                    </p>
                    <ul style="list-style: none; margin: 0;">
                        <li class="technical-list-item" style="padding: 4px 0; color: #6b7280;">
                            <i class="fa-duotone fa-thin fa-shield-check"></i>
                            Bulletproof validation
                        </li>
                        <li class="technical-list-item" style="padding: 4px 0; color: #6b7280;">
                            <i class="fa-duotone fa-thin fa-hourglass"></i>
                            Months of development
                        </li>
                        <li class="technical-list-item" style="padding: 4px 0; color: #6b7280;">
                            <i class="fa-duotone fa-thin fa-money-bill"></i>
                            High hourly costs
                        </li>
                        <li class="technical-list-item" style="padding: 4px 0; color: #6b7280;">
                            <i class="fa-duotone fa-thin fa-pen-ruler"></i>
                            Manual everything
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Fast AND Validated -->
                <div class="vision-component-blueprint border-4 rounded-2xl p-8 flex flex-col" style="border-color: #22c55e !important;" data-aos="fade-up" data-aos-delay="500">
                    <h3 style="font-family: var(--font-blueprint); font-size: 1.5rem; font-weight: 500; margin-bottom: 16px; color: var(--text-primary);">
                        Fast AND Validated
                    </h3>
                    <div style="display: flex; align-items: center; gap: 12px; padding: 12px 24px; background: rgba(34, 197, 94, 0.1); border-radius: 24px; border: 1px solid rgba(34, 197, 94, 0.2); margin-bottom: 20px;">
                        <i class="fa-duotone fa-thin fa-rocket-launch" style="font-size: 16px; color: #22c55e;"></i>
                        <span style="font-family: var(--font-technical); font-size: 0.9rem; font-weight: 600; color: var(--text-primary);">Integration Approach</span>
                    </div>
                    <p style="color: var(--text-secondary); margin-bottom: 24px; font-size: 1rem; line-height: 1.6;">
                        AI acceleration combined with 40 years of expert validation. Both speed and reliability.
                    </p>
                    <ul style="list-style: none; margin: 0;">
                        <li class="technical-list-item" style="padding: 4px 0; color: #22c55e;">
                            <i class="fa-duotone fa-thin fa-check"></i>
                            AI-powered rapid development
                        </li>
                        <li class="technical-list-item" style="padding: 4px 0; color: #22c55e;">
                            <i class="fa-duotone fa-thin fa-check"></i>
                            Expert code validation
                        </li>
                        <li class="technical-list-item" style="padding: 4px 0; color: #22c55e;">
                            <i class="fa-duotone fa-thin fa-check"></i>
                            Production-ready architecture
                        </li>
                        <li class="technical-list-item" style="padding: 4px 0; color: #22c55e;">
                            <i class="fa-duotone fa-thin fa-check"></i>
                            Days/weeks, not months
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>




    <!-- Technical Evolution Timeline - Teaser Section -->
    <section id="timeline" style="padding: 100px 0;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px;">
            <div style="text-align: left; margin-bottom: 60px; position: relative; padding-left: 80px;">
                <div style="position: absolute; left: 0; top: 0; bottom: 0; width: var(--line-weight-bold); background: var(--line-primary);"></div>
                <div style="position: absolute; left: 20px; top: 0; bottom: 0; width: var(--line-weight); background: var(--line-secondary);"></div>
                <h2 class="section-title-blueprint" data-section="TLN-001" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 400; color: var(--text-primary); margin-bottom: 16px;">
                    Technical Evolution
                </h2>
                <p style="font-family: var(--font-technical); font-size: 1.1rem; color: var(--text-secondary); max-width: 700px; line-height: 1.6; margin: 0 0 32px 0;">
                    40 years of systematic progression from memory manipulation to AI-integrated systems
                </p>
                <button onclick="openTimelineModal()" style="padding: 14px 28px; background: var(--line-primary); color: white; border: none; border-radius: 8px; font-family: var(--font-technical); font-weight: 600; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px; cursor: pointer; transition: var(--transition); display: inline-flex; align-items: center; gap: 10px;">
                    <i class="fa-duotone fa-thin fa-timeline" style="font-size: 16px;"></i>
                    View Full Timeline
                </button>
            </div>

            <!-- Timeline Summary -->
            <div class="rounded-xl" style="background: linear-gradient(135deg, rgba(126, 179, 211, 0.08) 0%, var(--blueprint-paper) 100%); border: 3px solid var(--line-primary); box-shadow: 0 8px 32px rgba(107, 91, 115, 0.15); padding: 48px 60px;">
                <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                    <h3 style="color: var(--line-primary); font-size: 1.8rem; font-weight: 700; margin-bottom: 32px; font-family: var(--font-blueprint); letter-spacing: -0.5px;">
                        This is who you're hiring:
                    </h3>
                    <p style="font-size: 1.15rem; line-height: 1.8; margin: 0; font-weight: 500; color: var(--text-primary);">
                        Built CAD systems at 16. Mastered pixel-level assembly. Created character universes and visual systems. Architected enterprise-scale systems handling millions in business operations. Orchestrated AI systems that prebuild your requirements faster than competitors can write estimates.
                    </p>
                    <p style="font-size: 1.15rem; line-height: 1.8; margin: 24px 0 0 0; font-weight: 600; color: var(--line-primary);">
                        Rare dual-brain mastery: extreme logical precision + extreme creative vision.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Modal -->
    <div id="timelineModal" style="display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.8); z-index: 9999; overflow-y: auto; padding: 40px 20px;">
        <div style="max-width: 1200px; margin: 0 auto; position: relative;">
            <button onclick="closeTimelineModal()" style="position: sticky; top: 20px; left: 100%; margin-left: 20px; background: #ef4444; border: none; width: 48px; height: 48px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10000; box-shadow: 0 4px 12px rgba(0,0,0,0.3); transition: var(--transition);">
                <i class="fa-duotone fa-thin fa-times" style="font-size: 20px; color: white;"></i>
            </button>

            <div style="background: var(--blueprint-bg); border-radius: 16px; padding: 60px 40px; margin-top: -48px;">
                <!-- Epic Timeline Container -->
                <div class="timeline-container">
                    <!-- Spectacular Timeline Spine -->
                    <div class="timeline-spine"></div>

                <!-- Era 1: The Genesis (1985) -->
                <div class="timeline-era era-1985" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-milestone era-1985">1985</div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-story">
                        <h3 class="story-title">The Genesis Mystery</h3>
                        <div class="story-period">1985-1987 - Ages 13-15</div>
                        <div class="story-narrative">
                            <strong>While other 13-year-olds played games, I was reverse-engineering them.</strong> Took apart my cousin's Atari, hit computer chips, pestered adults to take me to the library to understand electronics.
                        </div>
                        <div class="story-highlight" style="padding: 20px;">
                            Built an animated rotating sword - over 3000 lines manipulating individual pixels. PEEK each pixel, POKE the correct color. Calculating rotation mathematics, frame-by-frame animation at the hardware level.
                        </div>
                        <div class="tech-evolution">
                            <div class="tech-badge">
                                <i class="fa-duotone fa-thin fa-terminal" style="margin-right: 4px;"></i>
                                BASIC
                            </div>
                            <div class="tech-badge">
                                <i class="fa-duotone fa-thin fa-memory" style="margin-right: 4px;"></i>
                                PEEK/POKE
                            </div>
                            <div class="tech-badge">
                                <i class="fa-duotone fa-thin fa-gamepad-modern" style="margin-right: 4px;"></i>
                                Atari 65XE
                            </div>
                            <div class="tech-badge">
                                <i class="fa-duotone fa-thin fa-microchip" style="margin-right: 4px;"></i>
                                Assembly
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Era 2: System Builder (1988) -->
                <div class="timeline-era era-1988" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-milestone era-1988">1988</div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-story">
                        <h3 class="story-title">The System Builder</h3>
                        <div class="story-period">1988-2000s</div>
                        <div class="story-narrative">
                            <strong>Teacher shows me AutoCAD. I think: "I can build that."</strong> Created a complete vector-based drafting system on the Tandy 1000SX with professional features.
                        </div>
                        <div class="story-highlight" style="padding: 20px;">
                            Rectangle cursor navigation, space bar selection menus, cut/copy/paste/scale/move commands, mathematical object storage, z-ordering. At 16, I was building professional-grade engineering software while simultaneously developing visual systems and creative problem-solving. This rare dual-brain mastery - extreme logical precision combined with extreme creative vision - would become my defining advantage.
                        </div>
                        <div class="tech-evolution">
                            <div class="tech-badge">Custom CAD</div>
                            <div class="tech-badge">Dual-Brain Mastery</div>
                            <div class="tech-badge">QA Systems</div>
                            <div class="tech-badge">ISO 9000</div>
                            <div class="tech-badge">Architecture</div>
                        </div>
                    </div>
                </div>

                <!-- Era 3: Web Architect (2000) -->
                <div class="timeline-era era-2000" data-aos="fade-up" data-aos-delay="600">
                    <div class="timeline-milestone era-2000">2000</div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-story">
                        <h3 class="story-title">Web Architecture Era</h3>
                        <div class="story-period">2000-2017</div>
                        <div class="story-narrative">
                            Mastered web technologies and enterprise systems. Evolved through multiple language generations while building scalable business applications.
                        </div>
                        <div class="story-highlight" style="padding: 20px;">
                            Every major web technology transition - from static HTML to dynamic frameworks to modern web applications. Built systems that scaled with the internet itself.
                        </div>
                        <div class="tech-evolution">
                            <div class="tech-badge">Web Dev</div>
                            <div class="tech-badge">Enterprise</div>
                            <div class="tech-badge">Databases</div>
                            <div class="tech-badge">Scaling</div>
                        </div>
                    </div>
                </div>

                <!-- Era 4: Laravel Master (2017) -->
                <div class="timeline-era era-2017" data-aos="fade-up" data-aos-delay="800">
                    <div class="timeline-milestone era-2017">2017</div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-story">
                        <h3 class="story-title">Laravel Ecosystem Master</h3>
                        <div class="story-period">2017-2023</div>
                        <div class="story-narrative">
                            Deep expertise in TALL stack architecture. Built multiple production applications handling real business operations.
                        </div>
                        <div class="story-highlight" style="padding: 20px;">
                            <strong>Enterprise-scale applications handling real business operations.</strong> Not tutorials or demos - actual businesses running on systems I architect and build.
                        </div>
                        <div class="tech-evolution">
                            <div class="tech-badge">
                                <i class="fa-duotone fa-thin fa-code" style="margin-right: 4px;"></i>
                                Laravel
                            </div>
                            <div class="tech-badge">TALL Stack</div>
                            <div class="tech-badge">Filament</div>
                            <div class="tech-badge">
                                <i class="fa-duotone fa-thin fa-cube" style="margin-right: 4px;"></i>
                                Docker
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Era 5: AI Orchestrator (2025) -->
                <div class="timeline-era era-2025" data-aos="fade-up" data-aos-delay="1000">
                    <div class="timeline-milestone era-2025">2025</div>
                    <div class="timeline-connector"></div>
                    <div class="timeline-story">
                        <h3 class="story-title">AI Orchestration Master</h3>
                        <div class="story-period">2023-Present - Current Era</div>
                        <div class="story-narrative">
                            <strong>From pixel-level assembly to orchestrating multiple AI systems.</strong> The Triad cognitive architecture represents the culmination of 40 years of systematic problem-solving.
                        </div>
                        <div class="story-highlight" style="padding: 20px;">
                            Intent (Shane - strategic command), Focus (real-time AI agent), and Vision (systematic AI agent + autonomous execution). This transforms Upwork requirements into working enterprise solutions while others write estimates.
                        </div>
                        <div class="rounded-2xl p-6 my-6" style="background: rgba(126, 179, 211, 0.15); border: 2px solid rgba(126, 179, 211, 0.3);">
                            <h4 style="font-family: var(--font-technical); color: var(--line-primary); margin-bottom: 15px; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Triad Cognitive Architecture</h4>
                            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; text-align: center;">
                                <div>
                                    <div style="font-weight: 700; color: var(--text-primary); margin-bottom: 8px; font-size: 1.1rem;">Intent</div>
                                    <div style="color: var(--text-secondary); font-family: var(--font-technical); font-size: 0.9rem;">Shane<br><span style="font-size: 0.8rem;">(Strategic Command)</span></div>
                                </div>
                                <div>
                                    <div style="font-weight: 700; color: var(--text-primary); margin-bottom: 8px; font-size: 1.1rem;">Focus</div>
                                    <div style="color: var(--text-secondary); font-family: var(--font-technical); font-size: 0.9rem;">Real-time AI Agent<br><span style="font-size: 0.8rem;">(Contextual Awareness)</span></div>
                                </div>
                                <div>
                                    <div style="font-weight: 700; color: var(--text-primary); margin-bottom: 8px; font-size: 1.1rem;">Vision</div>
                                    <div style="color: var(--text-secondary); font-family: var(--font-technical); font-size: 0.9rem;">Systematic AI Agent<br><span style="font-size: 0.8rem;">(Strategic Foresight)</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="tech-evolution">
                            <div class="tech-badge">
                                <i class="fa-duotone fa-thin fa-brain-circuit" style="margin-right: 4px;"></i>
                                Triad AI
                            </div>
                            <div class="tech-badge">Multi-LLM</div>
                            <div class="tech-badge">Cognitive Auto</div>
                            <div class="tech-badge">Vision 2.0</div>
                        </div>
                    </div>
                </div>
            </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Live Production Portfolio -->
    <section id="portfolio" style="padding: 100px 0;">
        <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
            <div style="text-align: left; margin-bottom: 60px; position: relative; padding-left: 80px;">
                <div style="position: absolute; left: 0; top: 0; bottom: 0; width: var(--line-weight-bold); background: var(--line-primary);"></div>
                <div style="position: absolute; left: 20px; top: 0; bottom: 0; width: var(--line-weight); background: var(--line-secondary);"></div>
                <h2 class="section-title-blueprint" data-section="PRT-001" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 400; color: var(--text-primary); margin-bottom: 16px;">
                    Live Production Portfolio
                </h2>
                <p style="font-family: var(--font-technical); font-size: 1.1rem; color: var(--text-secondary); max-width: 800px; line-height: 1.6; margin: 0;">
                    These aren't demos or tutorials - they're live business applications handling real operations, real customers, and real revenue. Each demonstrates dual-brain mastery: bulletproof Laravel engineering with compelling user experience.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 40px;">

                <!-- Danielle Fence -->
                <div class="vision-component-blueprint border-4 rounded-2xl" style="border-color: #b8a294 !important;">
                    <div class="rounded-2xl m-4 overflow-hidden" style="aspect-ratio: 16/10; background: var(--blueprint-bg); border: 2px solid var(--line-secondary); position: relative;">
                        <img src="/images/portfolio/daniellehub-fullscreen.png" alt="Danielle Hub Staging" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="p-6">
                        <h3 style="font-family: var(--font-blueprint); font-size: 1.3rem; font-weight: 600; color: var(--text-primary); margin-bottom: 12px;">
                            Danielle Fence
                        </h3>
                        <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.5; margin-bottom: 16px;">
                            Complete business system: Filament admin, character marketing universe (Pickett Pals), customer management, project tracking, and e-commerce integration.
                        </p>
                        <a href="https://www.daniellefence.com" target="_blank" style="display: inline-flex; align-items: center; gap: 8px; color: var(--line-primary); text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 13px;">
                            <i class="fa-duotone fa-thin fa-external-link"></i>
                            daniellefence.com
                        </a>
                    </div>
                </div>

                <!-- Modern Day Pathfinders -->
                <div class="vision-component-blueprint border-4 rounded-2xl" style="border-color: #b8a294 !important;">
                    <div class="rounded-2xl m-4 overflow-hidden" style="aspect-ratio: 16/10; background: var(--blueprint-bg); border: 2px solid var(--line-secondary); position: relative;">
                        <img src="/images/portfolio/moderndaypathfinder-fullscreen.png" alt="Modern Day Pathfinder" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="p-6">
                        <h3 style="font-family: var(--font-blueprint); font-size: 1.3rem; font-weight: 600; color: var(--text-primary); margin-bottom: 12px;">
                            Modern Day Pathfinders
                        </h3>
                        <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.5; margin-bottom: 16px;">
                            Training platform with video content management, user progress tracking, and certification systems. Scalable architecture for educational content delivery.
                        </p>
                        <a href="https://moderndaypathfinder.com" target="_blank" style="display: inline-flex; align-items: center; gap: 8px; color: var(--line-primary); text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 13px;">
                            <i class="fa-duotone fa-thin fa-external-link"></i>
                            moderndaypathfinder.com
                        </a>
                    </div>
                </div>

                <!-- CWick -->
                <div class="vision-component-blueprint border-4 rounded-2xl" style="border-color: #b8a294 !important;">
                    <div class="rounded-2xl m-4 overflow-hidden" style="aspect-ratio: 16/10; background: var(--blueprint-bg); border: 2px solid var(--line-secondary); position: relative;">
                        <img src="/images/portfolio/cwick-fullscreen.png" alt="CWick Platform" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="p-6">
                        <h3 style="font-family: var(--font-blueprint); font-size: 1.3rem; font-weight: 600; color: var(--text-primary); margin-bottom: 12px;">
                            CWick
                        </h3>
                        <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.5; margin-bottom: 16px;">
                            Multi-application ecosystem with API integration, frontend/backend separation, and complex business logic. Demonstrates enterprise-scale architecture patterns.
                        </p>
                        <a href="https://cwick.us" target="_blank" style="display: inline-flex; align-items: center; gap: 8px; color: var(--line-primary); text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 13px;">
                            <i class="fa-duotone fa-thin fa-external-link"></i>
                            cwick.us
                        </a>
                    </div>
                </div>

            </div>

            <div class="story-highlight" style="margin-top: 60px; text-align: center; padding: 30px;">
                <p style="font-size: 1.1rem; font-weight: 600; margin: 0; font-family: var(--font-technical);">
                    Each application demonstrates 40 years of pattern recognition applied to modern web development. Not just functional - strategically architected for scalability, maintainability, and user engagement.
                </p>
            </div>

            <!-- Portfolio CTA -->
            <div style="margin-top: 60px; text-align: center;">
                <div class="rounded-xl p-10 relative" style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-primary);">
                    <h3 style="font-family: var(--font-blueprint); font-size: 1.8rem; font-weight: 600; color: var(--text-primary); margin-bottom: 16px;">
                        Ready to See Your Project Built Like This?
                    </h3>
                    <p style="font-family: var(--font-technical); font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 32px; line-height: 1.6;">
                        Post your project on Upwork and I'll respond with a working demonstration—built to your exact requirements.
                    </p>
                    <a href="#contact" class="rounded-lg" style="display: inline-flex; align-items: center; gap: 12px; background: var(--line-primary); color: white; padding: 16px 32px; text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px; transition: var(--transition); position: relative;">
                        <span style="position: absolute; top: -8px; right: -8px; width: 16px; height: 16px; border-top: var(--line-weight-bold) solid var(--line-primary); border-right: var(--line-weight-bold) solid var(--line-primary);"></span>
                        <i class="fa-duotone fa-thin fa-rocket-launch" style="font-size: 18px;"></i>
                        Let's Talk About Your Project
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials Section -->
    <section style="padding: 100px 0; background: var(--blueprint-bg);">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px;">
            <div style="text-align: left; margin-bottom: 60px; position: relative; padding-left: 80px;">
                <div style="position: absolute; left: 0; top: 0; bottom: 0; width: var(--line-weight-bold); background: var(--line-primary);"></div>
                <div style="position: absolute; left: 20px; top: 0; bottom: 0; width: var(--line-weight); background: var(--line-secondary);"></div>
                <h2 class="section-title-blueprint" data-section="TST-001" data-aos="fade-up" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 400; color: var(--text-primary); margin-bottom: 16px;">
                    Client Feedback
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" style="font-family: var(--font-technical); font-size: 1.1rem; color: var(--text-secondary); max-width: 700px; line-height: 1.6; margin: 0;">
                    What business leaders say about working with me
                </p>
            </div>

            <div class="rounded-xl p-10 relative" style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-secondary); max-width: 900px; margin: 0 auto;">
                <div style="position: absolute; top: -10px; left: 50%; transform: translateX(-50%); background: var(--blueprint-paper); padding: 0 16px; font-family: var(--font-technical); font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px;">
                    VERIFIED TESTIMONIAL
                </div>

                <div style="text-align: center; margin-bottom: 32px;">
                    <i class="fa-duotone fa-thin fa-quote-left" style="font-size: 48px; color: var(--line-secondary); opacity: 0.5;"></i>
                </div>

                <p style="font-size: 1.3rem; line-height: 1.8; color: var(--text-primary); text-align: center; margin-bottom: 40px; font-style: italic; padding: 0 40px;">
                    "Shane is the only person I've ever met who could actually make a computer get up and dance."
                </p>

                <div style="text-align: center; padding: 32px 40px 0 40px; border-top: 1px solid rgba(107, 91, 115, 0.2);">
                    <p style="font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 4px; font-size: 1.1rem;">
                        Chief Operating Officer
                    </p>
                    <p style="font-family: var(--font-technical); color: var(--text-secondary); font-size: 0.9rem;">
                        Tatum Manufacturing - Tampa FL
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" style="padding: 100px 0;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 40px;">
            <div style="text-align: left; margin-bottom: 60px; position: relative; padding-left: 80px;">
                <div style="position: absolute; left: 0; top: 0; bottom: 0; width: var(--line-weight-bold); background: var(--line-primary);"></div>
                <div style="position: absolute; left: 20px; top: 0; bottom: 0; width: var(--line-weight); background: var(--line-secondary);"></div>
                <h2 class="section-title-blueprint" data-section="SYS-004" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 400; color: var(--text-primary); margin-bottom: 16px;">
                    Ready to Hire Me?
                </h2>
                <p style="font-family: var(--font-technical); font-size: 1.1rem; color: var(--text-secondary); max-width: 700px; line-height: 1.6; margin: 0;">
                    Contact me directly to get your enterprise system built with 40 years of systematic problem-solving.
                </p>
            </div>

            <!-- Contact Options -->
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px; margin-bottom: 60px;">

                <!-- Contact Form -->
                <div class="contact-form-blueprint border-4 rounded-2xl p-10 relative" style="border-color: #b8a294 !important;">
                    <div style="position: absolute; top: -10px; left: 50%; transform: translateX(-50%); background: var(--blueprint-paper); padding: 0 16px; font-family: var(--font-technical); font-size: 11px; font-weight: 600; color: var(--line-primary); text-transform: uppercase; letter-spacing: 1px;">
                        SEND MESSAGE
                    </div>
                    <h3 style="font-family: var(--font-blueprint); font-size: 1.4rem; font-weight: 600; color: var(--text-primary); margin-bottom: 24px; text-align: center;">
                        Contact Me Directly
                    </h3>
                    <form action="/contact" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
                        @csrf
                        <div>
                            <label style="display: block; font-family: var(--font-technical); font-size: 0.9rem; font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">Name</label>
                            <input type="text" name="name" required style="width: 100%; padding: 12px; border: 2px solid var(--line-secondary); border-radius: 8px; font-family: var(--font-technical); font-size: 0.95rem; background: white;">
                        </div>
                        <div>
                            <label style="display: block; font-family: var(--font-technical); font-size: 0.9rem; font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">Email</label>
                            <input type="email" name="email" required style="width: 100%; padding: 12px; border: 2px solid var(--line-secondary); border-radius: 8px; font-family: var(--font-technical); font-size: 0.95rem; background: white;">
                        </div>
                        <div>
                            <label style="display: block; font-family: var(--font-technical); font-size: 0.9rem; font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">Message</label>
                            <textarea name="message" required rows="5" style="width: 100%; padding: 12px; border: 2px solid var(--line-secondary); border-radius: 8px; font-family: var(--font-technical); font-size: 0.95rem; background: white; resize: vertical;"></textarea>
                        </div>
                        <button type="submit" style="padding: 14px 28px; background: var(--line-primary); color: white; border: none; border-radius: 8px; font-family: var(--font-technical); font-weight: 600; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px; cursor: pointer; transition: var(--transition);">
                            <i class="fa-duotone fa-thin fa-paper-plane" style="margin-right: 8px;"></i>
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Upwork Hiring -->
                <div class="contact-form-blueprint border-4 rounded-2xl p-10 text-center relative" style="border-color: #b8a294 !important;">
                    <div style="position: absolute; top: -10px; left: 50%; transform: translateX(-50%); background: var(--blueprint-paper); padding: 0 16px; font-family: var(--font-technical); font-size: 11px; font-weight: 600; color: var(--line-primary); text-transform: uppercase; letter-spacing: 1px;">
                        HIRE ON UPWORK
                    </div>
                    <div style="margin-bottom: 24px;">
                        <h3 style="font-family: var(--font-blueprint); font-size: 1.4rem; font-weight: 600; color: var(--text-primary); margin-bottom: 12px;">
                            Hire Me Through Upwork
                        </h3>
                        <p style="color: var(--text-secondary); line-height: 1.6; margin-bottom: 24px;">
                            Post your project on Upwork and I'll submit a proposal with a working demonstration of your requirements built enterprise-grade.
                        </p>
                    </div>
                    <a href="https://www.upwork.com/freelancers/~01fb89647183586840" target="_blank" class="rounded-lg" style="display: inline-flex; align-items: center; gap: 12px; background: var(--line-primary); color: white; padding: 16px 32px; text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px; transition: var(--transition);">
                        <i class="fa-duotone fa-thin fa-arrow-right" style="font-size: 14px;"></i>
                        Hire on Upwork
                    </a>
                </div>

            </div>

            <!-- Hiring Process Info -->
            <div class="rounded-xl relative" style="background: var(--blueprint-bg); border: var(--line-weight-bold) solid var(--line-secondary); padding: 48px 60px;">
                <div style="position: absolute; top: -10px; left: 50%; transform: translateX(-50%); background: var(--blueprint-bg); padding: 0 16px; font-family: var(--font-technical); font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px;">
                    HIRING PROCESS
                </div>
                <div style="text-align: center;">
                    <h4 style="font-family: var(--font-blueprint); font-size: 1.2rem; font-weight: 600; color: var(--text-primary); margin-bottom: 32px;">
                        What Happens When You Hire Me
                    </h4>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 32px; margin-top: 40px;">
                        <div style="text-align: center;">
                            <div class="rounded-full" style="width: 40px; height: 40px; background: var(--line-primary); display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; color: white; position: relative;">
                                <i class="fa-duotone fa-thin fa-magnifying-glass-chart" style="font-size: 18px;"></i>
                                <span class="rounded-full" style="position: absolute; top: -8px; right: -8px; width: 20px; height: 20px; background: var(--line-success); display: flex; align-items: center; justify-content: center; font-family: var(--font-technical); font-weight: 700; font-size: 10px;">1</span>
                            </div>
                            <h5 style="font-family: var(--font-technical); color: var(--text-primary); margin-bottom: 8px; text-transform: uppercase; font-size: 0.9rem;">
                                Requirements Analysis
                            </h5>
                            <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.5; margin: 0;">
                                I analyze your project and prebuild a working prototype
                            </p>
                        </div>
                        <div style="text-align: center;">
                            <div class="rounded-full" style="width: 40px; height: 40px; background: var(--line-primary); display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; color: white; position: relative;">
                                <i class="fa-duotone fa-thin fa-presentation-screen" style="font-size: 18px;"></i>
                                <span class="rounded-full" style="position: absolute; top: -8px; right: -8px; width: 20px; height: 20px; background: var(--line-success); display: flex; align-items: center; justify-content: center; font-family: var(--font-technical); font-weight: 700; font-size: 10px;">2</span>
                            </div>
                            <h5 style="font-family: var(--font-technical); color: var(--text-primary); margin-bottom: 8px; text-transform: uppercase; font-size: 0.9rem;">
                                Demonstration
                            </h5>
                            <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.5; margin: 0;">
                                You see the working solution before making any commitment
                            </p>
                        </div>
                        <div style="text-align: center;">
                            <div class="rounded-full" style="width: 40px; height: 40px; background: var(--line-primary); display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; color: white; position: relative;">
                                <i class="fa-duotone fa-thin fa-truck-fast" style="font-size: 18px;"></i>
                                <span class="rounded-full" style="position: absolute; top: -8px; right: -8px; width: 20px; height: 20px; background: var(--line-success); display: flex; align-items: center; justify-content: center; font-family: var(--font-technical); font-weight: 700; font-size: 10px;">3</span>
                            </div>
                            <h5 style="font-family: var(--font-technical); color: var(--text-primary); margin-bottom: 8px; text-transform: uppercase; font-size: 0.9rem;">
                                Enterprise Delivery
                            </h5>
                            <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.5; margin: 0;">
                                Full enterprise system delivered with 40 years of experience
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer - Technical Documentation -->
@endsection

@section('welcome-scripts')
<script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: false,
            mirror: true,
            offset: 120,
            anchorPlacement: 'top-bottom'
        });

        // Smooth scroll enhancement
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
const navHeight = 180;                    const elementPosition = targetElement.offsetTop - navHeight;                    window.scrollTo({                        top: elementPosition,                        behavior: 'smooth'                    });
                }
            });
        });

        // Epic Timeline Animation System
        const timelineEras = document.querySelectorAll('.timeline-era');

        if (timelineEras.length > 0) {
            const timelineObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.2,
                rootMargin: '50px'
            });

            timelineEras.forEach((era) => {
                timelineObserver.observe(era);
            });
        }

        // Timeline milestones are purely decorative - no hover effects needed

        // Scroll to top on page load/refresh
        window.addEventListener("beforeunload", function() {
            window.scrollTo({ top: 0, behavior: "instant" });
        });

        window.addEventListener("load", function() {
            setTimeout(function() {
                window.scrollTo({ top: 0, behavior: "instant" });
            }, 100);
        });

        // Back to Top Button - handled in layout

        // Mobile Menu Functions
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
        }

        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.remove('active');
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const toggleButton = document.querySelector('.mobile-menu-toggle');

            if (!mobileMenu.contains(event.target) && !toggleButton.contains(event.target)) {
                mobileMenu.classList.remove('active');
            }
        });

        // Close mobile menu on window resize if desktop size
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                const mobileMenu = document.getElementById('mobileMenu');
                mobileMenu.classList.remove('active');
            }
        });

        // Timeline Modal Functions
        function openTimelineModal() {
            document.getElementById('timelineModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeTimelineModal() {
            document.getElementById('timelineModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal on background click
        document.getElementById('timelineModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeTimelineModal();
            }
        });

        // Close modal on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeTimelineModal();
            }
        });
</script>
@endsection
