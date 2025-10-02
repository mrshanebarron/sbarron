@extends('layouts.app')

@section('title', 'Laravel Components Showcase - Interactive Demos')

@section('content')
<div style="padding-top: 120px; padding-bottom: 80px;">
    <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
        <!-- Header -->
        <div style="text-align: center; margin-bottom: 60px;" data-aos="fade-up">
            <h1 style="font-family: var(--font-technical); font-weight: 700; font-size: 48px; color: var(--text-primary); margin-bottom: 16px;">
                Component Showcase
            </h1>
            <p style="font-size: 18px; color: var(--text-secondary); max-width: 600px; margin: 0 auto;">
                Try out components, copy the code, and see how they work in real-time
            </p>
        </div>

        <!-- Component Categories -->
        <div style="display: flex; gap: 16px; justify-content: center; margin-bottom: 40px; flex-wrap: wrap;" data-aos="fade-up">
            <button onclick="filterComponents('all')" class="filter-btn active" data-filter="all" style="padding: 12px 24px; background: var(--line-primary); color: white; border: 2px solid var(--line-primary); border-radius: 8px; font-family: var(--font-technical); font-weight: 600; font-size: 14px; cursor: pointer; transition: var(--transition);">
                All Components
            </button>
            <button onclick="filterComponents('ui')" class="filter-btn" data-filter="ui" style="padding: 12px 24px; background: white; color: var(--line-primary); border: 2px solid var(--line-primary); border-radius: 8px; font-family: var(--font-technical); font-weight: 600; font-size: 14px; cursor: pointer; transition: var(--transition);">
                UI Elements
            </button>
            <button onclick="filterComponents('forms')" class="filter-btn" data-filter="forms" style="padding: 12px 24px; background: white; color: var(--line-primary); border: 2px solid var(--line-primary); border-radius: 8px; font-family: var(--font-technical); font-weight: 600; font-size: 14px; cursor: pointer; transition: var(--transition);">
                Forms
            </button>
            <button onclick="filterComponents('complex')" class="filter-btn" data-filter="complex" style="padding: 12px 24px; background: white; color: var(--line-primary); border: 2px solid var(--line-primary); border-radius: 8px; font-family: var(--font-technical); font-weight: 600; font-size: 14px; cursor: pointer; transition: var(--transition);">
                Complex Systems
            </button>
        </div>

        <!-- Components Grid -->
        <div id="components-grid" style="display: grid; grid-template-columns: 1fr; gap: 40px;">

            <!-- Example Component Card - Button Component -->
            <div class="component-card" data-category="ui" data-aos="fade-up" style="background: white; border: 2px solid var(--line-primary); border-radius: 12px; overflow: hidden;">
                <!-- Component Header -->
                <div style="padding: 24px; border-bottom: 2px solid rgba(107, 91, 115, 0.1);">
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 12px;">
                        <div>
                            <h3 style="font-family: var(--font-technical); font-weight: 700; font-size: 24px; color: var(--text-primary); margin-bottom: 8px;">
                                Styled Button Component
                            </h3>
                            <p style="color: var(--text-secondary); font-size: 14px; margin-bottom: 12px;">
                                Customizable button with variants, sizes, and loading states
                            </p>
                            <div style="display: flex; gap: 8px;">
                                <span style="background: rgba(107, 91, 115, 0.1); padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--line-primary);">
                                    Laravel 10+
                                </span>
                                <span style="background: rgba(126, 179, 211, 0.1); padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--line-secondary);">
                                    UI Element
                                </span>
                            </div>
                        </div>
                        <div style="display: flex; gap: 8px;">
                            <button onclick="copyInstallCommand(this, 'composer require sbarron/button-component')" style="padding: 8px 16px; background: white; color: var(--line-primary); border: 2px solid var(--line-primary); border-radius: 6px; font-size: 12px; font-weight: 600; cursor: pointer; transition: var(--transition);">
                                <i class="fa-duotone fa-thin fa-copy"></i> Copy Install
                            </button>
                            <a href="https://github.com/mrshanebarron/button-component" target="_blank" style="padding: 8px 16px; background: var(--line-primary); color: white; text-decoration: none; border-radius: 6px; font-size: 12px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                                <i class="fa-brands fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Live Preview -->
                <div style="padding: 40px; background: #f8f9fa;">
                    <div style="text-align: center; margin-bottom: 16px;">
                        <span style="font-family: var(--font-technical); font-size: 12px; font-weight: 600; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px;">
                            Live Preview
                        </span>
                    </div>
                    <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                        <!-- Example buttons would go here -->
                        <button style="padding: 12px 24px; background: var(--line-primary); color: white; border: none; border-radius: 8px; font-weight: 600; cursor: pointer;">
                            Primary Button
                        </button>
                        <button style="padding: 12px 24px; background: white; color: var(--line-primary); border: 2px solid var(--line-primary); border-radius: 8px; font-weight: 600; cursor: pointer;">
                            Secondary Button
                        </button>
                        <button style="padding: 12px 24px; background: #ef4444; color: white; border: none; border-radius: 8px; font-weight: 600; cursor: pointer;">
                            Danger Button
                        </button>
                    </div>
                </div>

                <!-- Code Tabs -->
                <div style="background: white;">
                    <div style="display: flex; border-bottom: 2px solid rgba(107, 91, 115, 0.1);">
                        <button onclick="switchTab(this, 'install-1')" class="code-tab active" style="padding: 16px 24px; background: none; border: none; border-bottom: 3px solid var(--line-primary); font-family: var(--font-technical); font-weight: 600; font-size: 13px; color: var(--line-primary); cursor: pointer; transition: var(--transition);">
                            Installation
                        </button>
                        <button onclick="switchTab(this, 'usage-1')" class="code-tab" style="padding: 16px 24px; background: none; border: none; border-bottom: 3px solid transparent; font-family: var(--font-technical); font-weight: 600; font-size: 13px; color: var(--text-secondary); cursor: pointer; transition: var(--transition);">
                            Usage
                        </button>
                        <button onclick="switchTab(this, 'config-1')" class="code-tab" style="padding: 16px 24px; background: none; border: none; border-bottom: 3px solid transparent; font-family: var(--font-technical); font-weight: 600; font-size: 13px; color: var(--text-secondary); cursor: pointer; transition: var(--transition);">
                            Configuration
                        </button>
                    </div>

                    <!-- Code Panels -->
                    <div style="position: relative;">
                        <div id="install-1" class="code-panel active" style="padding: 24px; background: #1a1a1a; border-radius: 0 0 12px 12px;">
                            <button onclick="copyCode(this)" style="position: absolute; top: 16px; right: 16px; padding: 8px 12px; background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; font-size: 11px; cursor: pointer; transition: var(--transition);">
                                <i class="fa-duotone fa-thin fa-copy"></i> Copy
                            </button>
                            <pre style="margin: 0; font-family: var(--font-technical); font-size: 13px; color: #e0e0e0; overflow-x: auto;"><code>composer require sbarron/button-component

php artisan vendor:publish --tag=button-component-config</code></pre>
                        </div>
                        <div id="usage-1" class="code-panel" style="padding: 24px; background: #1a1a1a; border-radius: 0 0 12px 12px; display: none;">
                            <button onclick="copyCode(this)" style="position: absolute; top: 16px; right: 16px; padding: 8px 12px; background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; font-size: 11px; cursor: pointer; transition: var(--transition);">
                                <i class="fa-duotone fa-thin fa-copy"></i> Copy
                            </button>
                            <pre style="margin: 0; font-family: var(--font-technical); font-size: 13px; color: #e0e0e0; overflow-x: auto;"><code>&lt;x-button variant="primary" size="md"&gt;
    Click Me
&lt;/x-button&gt;

&lt;x-button variant="secondary" size="lg"&gt;
    Large Button
&lt;/x-button&gt;

&lt;x-button variant="danger" :loading="true"&gt;
    Processing...
&lt;/x-button&gt;</code></pre>
                        </div>
                        <div id="config-1" class="code-panel" style="padding: 24px; background: #1a1a1a; border-radius: 0 0 12px 12px; display: none;">
                            <button onclick="copyCode(this)" style="position: absolute; top: 16px; right: 16px; padding: 8px 12px; background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; font-size: 11px; cursor: pointer; transition: var(--transition);">
                                <i class="fa-duotone fa-thin fa-copy"></i> Copy
                            </button>
                            <pre style="margin: 0; font-family: var(--font-technical); font-size: 13px; color: #e0e0e0; overflow-x: auto;"><code>// config/button-component.php

return [
    'default_variant' => 'primary',
    'default_size' => 'md',
    'variants' => [
        'primary' => 'bg-purple-600 hover:bg-purple-700',
        'secondary' => 'bg-gray-600 hover:bg-gray-700',
        'danger' => 'bg-red-600 hover:bg-red-700',
    ],
];</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Example Component Card - Comment System -->
            <div class="component-card" data-category="complex" data-aos="fade-up" style="background: white; border: 2px solid var(--line-primary); border-radius: 12px; overflow: hidden;">
                <!-- Component Header -->
                <div style="padding: 24px; border-bottom: 2px solid rgba(107, 91, 115, 0.1);">
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 12px;">
                        <div>
                            <h3 style="font-family: var(--font-technical); font-weight: 700; font-size: 24px; color: var(--text-primary); margin-bottom: 8px;">
                                Complete Commenting System
                            </h3>
                            <p style="color: var(--text-secondary); font-size: 14px; margin-bottom: 12px;">
                                Full-featured commenting system with replies, reactions, and moderation
                            </p>
                            <div style="display: flex; gap: 8px;">
                                <span style="background: rgba(107, 91, 115, 0.1); padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--line-primary);">
                                    Laravel 10+
                                </span>
                                <span style="background: rgba(239, 68, 68, 0.1); padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 600; color: #ef4444;">
                                    Complex System
                                </span>
                            </div>
                        </div>
                        <div style="display: flex; gap: 8px;">
                            <button onclick="copyInstallCommand(this, 'composer require sbarron/laravel-comments')" style="padding: 8px 16px; background: white; color: var(--line-primary); border: 2px solid var(--line-primary); border-radius: 6px; font-size: 12px; font-weight: 600; cursor: pointer; transition: var(--transition);">
                                <i class="fa-duotone fa-thin fa-copy"></i> Copy Install
                            </button>
                            <a href="https://github.com/mrshanebarron/laravel-comments" target="_blank" style="padding: 8px 16px; background: var(--line-primary); color: white; text-decoration: none; border-radius: 6px; font-size: 12px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                                <i class="fa-brands fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Live Preview -->
                <div style="padding: 40px; background: #f8f9fa;">
                    <div style="text-align: center; margin-bottom: 16px;">
                        <span style="font-family: var(--font-technical); font-size: 12px; font-weight: 600; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px;">
                            Live Preview
                        </span>
                    </div>
                    <div style="max-width: 600px; margin: 0 auto; background: white; border-radius: 8px; padding: 20px; border: 1px solid #e0e0e0;">
                        <div style="display: flex; gap: 12px; margin-bottom: 16px;">
                            <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--line-primary);"></div>
                            <div style="flex: 1;">
                                <div style="font-weight: 600; margin-bottom: 4px;">John Doe</div>
                                <div style="color: var(--text-secondary); font-size: 14px;">This is an example comment showing the commenting system in action.</div>
                                <div style="display: flex; gap: 16px; margin-top: 8px; font-size: 13px; color: var(--text-secondary);">
                                    <button style="background: none; border: none; cursor: pointer; color: var(--text-secondary);">Reply</button>
                                    <button style="background: none; border: none; cursor: pointer; color: var(--text-secondary);">Like (5)</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Code Tabs -->
                <div style="background: white;">
                    <div style="display: flex; border-bottom: 2px solid rgba(107, 91, 115, 0.1);">
                        <button onclick="switchTab(this, 'install-2')" class="code-tab active" style="padding: 16px 24px; background: none; border: none; border-bottom: 3px solid var(--line-primary); font-family: var(--font-technical); font-weight: 600; font-size: 13px; color: var(--line-primary); cursor: pointer; transition: var(--transition);">
                            Installation
                        </button>
                        <button onclick="switchTab(this, 'usage-2')" class="code-tab" style="padding: 16px 24px; background: none; border: none; border-bottom: 3px solid transparent; font-family: var(--font-technical); font-weight: 600; font-size: 13px; color: var(--text-secondary); cursor: pointer; transition: var(--transition);">
                            Usage
                        </button>
                        <button onclick="switchTab(this, 'features-2')" class="code-tab" style="padding: 16px 24px; background: none; border: none; border-bottom: 3px solid transparent; font-family: var(--font-technical); font-weight: 600; font-size: 13px; color: var(--text-secondary); cursor: pointer; transition: var(--transition);">
                            Features
                        </button>
                    </div>

                    <!-- Code Panels -->
                    <div style="position: relative;">
                        <div id="install-2" class="code-panel active" style="padding: 24px; background: #1a1a1a; border-radius: 0 0 12px 12px;">
                            <button onclick="copyCode(this)" style="position: absolute; top: 16px; right: 16px; padding: 8px 12px; background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; font-size: 11px; cursor: pointer; transition: var(--transition);">
                                <i class="fa-duotone fa-thin fa-copy"></i> Copy
                            </button>
                            <pre style="margin: 0; font-family: var(--font-technical); font-size: 13px; color: #e0e0e0; overflow-x: auto;"><code>composer require sbarron/laravel-comments

php artisan vendor:publish --tag=comments-migrations
php artisan migrate

php artisan vendor:publish --tag=comments-config</code></pre>
                        </div>
                        <div id="usage-2" class="code-panel" style="padding: 24px; background: #1a1a1a; border-radius: 0 0 12px 12px; display: none;">
                            <button onclick="copyCode(this)" style="position: absolute; top: 16px; right: 16px; padding: 8px 12px; background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; font-size: 11px; cursor: pointer; transition: var(--transition);">
                                <i class="fa-duotone fa-thin fa-copy"></i> Copy
                            </button>
                            <pre style="margin: 0; font-family: var(--font-technical); font-size: 13px; color: #e0e0e0; overflow-x: auto;"><code>&lt;x-comments :model="$post" /&gt;

// Or in Livewire
&lt;livewire:comments :commentable="$article" /&gt;</code></pre>
                        </div>
                        <div id="features-2" class="code-panel" style="padding: 24px; background: #1a1a1a; border-radius: 0 0 12px 12px; display: none;">
                            <button onclick="copyCode(this)" style="position: absolute; top: 16px; right: 16px; padding: 8px 12px; background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; font-size: 11px; cursor: pointer; transition: var(--transition);">
                                <i class="fa-duotone fa-thin fa-copy"></i> Copy
                            </button>
                            <pre style="margin: 0; font-family: var(--font-technical); font-size: 13px; color: #e0e0e0; overflow-x: auto;"><code>Features:
- Nested replies (unlimited depth)
- Reactions & likes
- @mentions with notifications
- Moderation tools
- Markdown support
- Real-time updates with Livewire
- Customizable styling
- Spam protection</code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
// Filter components by category
function filterComponents(category) {
    const cards = document.querySelectorAll('.component-card');
    const buttons = document.querySelectorAll('.filter-btn');

    // Update button states
    buttons.forEach(btn => {
        if (btn.dataset.filter === category) {
            btn.classList.add('active');
            btn.style.background = 'var(--line-primary)';
            btn.style.color = 'white';
        } else {
            btn.classList.remove('active');
            btn.style.background = 'white';
            btn.style.color = 'var(--line-primary)';
        }
    });

    // Filter cards
    cards.forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Switch code tabs
function switchTab(button, panelId) {
    const card = button.closest('.component-card');
    const tabs = card.querySelectorAll('.code-tab');
    const panels = card.querySelectorAll('.code-panel');

    // Update tab states
    tabs.forEach(tab => {
        tab.classList.remove('active');
        tab.style.borderBottomColor = 'transparent';
        tab.style.color = 'var(--text-secondary)';
    });
    button.classList.add('active');
    button.style.borderBottomColor = 'var(--line-primary)';
    button.style.color = 'var(--line-primary)';

    // Update panel visibility
    panels.forEach(panel => {
        panel.classList.remove('active');
        panel.style.display = 'none';
    });
    const activePanel = document.getElementById(panelId);
    activePanel.classList.add('active');
    activePanel.style.display = 'block';
}

// Copy code to clipboard
function copyCode(button) {
    const codeBlock = button.nextElementSibling;
    const code = codeBlock.textContent;

    navigator.clipboard.writeText(code).then(() => {
        const originalText = button.innerHTML;
        button.innerHTML = '<i class="fa-duotone fa-thin fa-check"></i> Copied!';
        button.style.background = 'rgba(34, 197, 94, 0.2)';
        button.style.borderColor = 'rgba(34, 197, 94, 0.4)';

        setTimeout(() => {
            button.innerHTML = originalText;
            button.style.background = 'rgba(255,255,255,0.1)';
            button.style.borderColor = 'rgba(255,255,255,0.2)';
        }, 2000);
    });
}

// Copy install command
function copyInstallCommand(button, command) {
    navigator.clipboard.writeText(command).then(() => {
        const originalText = button.innerHTML;
        button.innerHTML = '<i class="fa-duotone fa-thin fa-check"></i> Copied!';
        button.style.background = 'var(--line-success)';
        button.style.color = 'white';
        button.style.borderColor = 'var(--line-success)';

        setTimeout(() => {
            button.innerHTML = originalText;
            button.style.background = 'white';
            button.style.color = 'var(--line-primary)';
            button.style.borderColor = 'var(--line-primary)';
        }, 2000);
    });
}
</script>
@endsection
