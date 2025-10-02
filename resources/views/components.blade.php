@extends('layouts.app')

@section('title', 'Laravel Components - Free Composer Packages')

@section('content')
<div style="padding-top: 120px; padding-bottom: 80px;">
    <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
        <!-- Header -->
        <div style="text-align: center; margin-bottom: 60px;" data-aos="fade-up">
            <h1 style="font-family: var(--font-technical); font-weight: 700; font-size: 48px; color: var(--text-primary); margin-bottom: 16px;">
                Laravel Components
            </h1>
            <p style="font-size: 18px; color: var(--text-secondary); max-width: 600px; margin: 0 auto 24px auto;">
                Free, open-source Composer packages to accelerate your Laravel development
            </p>
            <a href="{{ route('components.showcase') }}" style="display: inline-flex; align-items: center; gap: 8px; padding: 14px 28px; background: var(--line-primary); color: white; text-decoration: none; border-radius: 8px; font-weight: 600; font-size: 14px; transition: var(--transition);">
                <i class="fa-duotone fa-solid fa-monitor-waveform"></i>
                Try Interactive Showcase
            </a>
        </div>

        <!-- Components Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 32px;">
            <!-- Component Card Template - You'll add your actual packages here -->
            <div style="background: white; border: 2px solid var(--line-primary); border-radius: 12px; padding: 32px; transition: var(--transition);"
                 onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.1)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
                 data-aos="fade-up">
                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
                    <div style="width: 48px; height: 48px; background: var(--line-primary); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-duotone fa-solid fa-box" style="font-size: 24px; color: white;"></i>
                    </div>
                    <h3 style="font-family: var(--font-technical); font-weight: 700; font-size: 24px; color: var(--text-primary); margin: 0;">
                        Package Name
                    </h3>
                </div>
                <p style="color: var(--text-secondary); margin-bottom: 24px; line-height: 1.6;">
                    Brief description of what this package does and why it's useful for Laravel developers.
                </p>
                <div style="display: flex; gap: 12px; margin-bottom: 24px;">
                    <span style="background: rgba(107, 91, 115, 0.1); padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600; color: var(--line-primary);">
                        Laravel 10+
                    </span>
                    <span style="background: rgba(107, 91, 115, 0.1); padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600; color: var(--line-primary);">
                        PHP 8.2+
                    </span>
                </div>
                <div style="background: #f8f9fa; border-radius: 8px; padding: 16px; margin-bottom: 20px; font-family: var(--font-technical); font-size: 13px; color: var(--text-primary);">
                    <code>composer require vendor/package-name</code>
                </div>
                <div style="display: flex; gap: 12px;">
                    <a href="#" style="flex: 1; text-align: center; padding: 12px 24px; background: var(--line-primary); color: white; text-decoration: none; border-radius: 8px; font-weight: 600; font-size: 14px; transition: var(--transition);"
                       onmouseover="this.style.background='#5a4b63'"
                       onmouseout="this.style.background='var(--line-primary)'">
                        <i class="fa-brands fa-github"></i> GitHub
                    </a>
                    <a href="#" style="flex: 1; text-align: center; padding: 12px 24px; background: white; color: var(--line-primary); text-decoration: none; border-radius: 8px; font-weight: 600; font-size: 14px; border: 2px solid var(--line-primary); transition: var(--transition);"
                       onmouseover="this.style.background='rgba(107, 91, 115, 0.05)'"
                       onmouseout="this.style.background='white'">
                        <i class="fa-duotone fa-solid fa-book"></i> Docs
                    </a>
                </div>
            </div>

            <!-- Add more component cards here -->
        </div>

        <!-- Call to Action -->
        <div style="text-align: center; margin-top: 80px; padding: 60px 40px; background: linear-gradient(135deg, rgba(107, 91, 115, 0.05) 0%, rgba(126, 179, 211, 0.05) 100%); border-radius: 16px; border: 2px solid var(--line-primary);" data-aos="fade-up">
            <h2 style="font-family: var(--font-technical); font-weight: 700; font-size: 32px; color: var(--text-primary); margin-bottom: 16px;">
                Have a suggestion?
            </h2>
            <p style="font-size: 18px; color: var(--text-secondary); margin-bottom: 32px; max-width: 600px; margin-left: auto; margin-right: auto;">
                Got an idea for a Laravel package you'd like to see? Reach out and let me know.
            </p>
            <a href="/contact" style="display: inline-flex; align-items: center; gap: 8px; padding: 16px 32px; background: var(--line-primary); color: white; text-decoration: none; border-radius: 8px; font-weight: 600; font-size: 16px; transition: var(--transition);"
               onmouseover="this.style.background='#5a4b63'"
               onmouseout="this.style.background='var(--line-primary)'">
                <i class="fa-duotone fa-solid fa-paper-plane"></i>
                Get in Touch
            </a>
        </div>
    </div>
</div>
@endsection
