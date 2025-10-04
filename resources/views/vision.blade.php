@extends('layouts.app')

@section('title', 'Vision System - Evaluating Emergent Judgment in AI Agents')

@section('styles')
<style>
    /* Mobile Responsive Styles for Vision Page */
    @media (max-width: 768px) {
        /* Force all grids to single column */
        div[style*="grid-template-columns: 1fr 1fr"],
        div[style*="grid-template-columns: repeat(3, 1fr)"] {
            display: flex !important;
            flex-direction: column !important;
        }

        /* Reduce header font size */
        h1 {
            font-size: 32px !important;
        }

        h2 {
            font-size: 24px !important;
        }

        h3 {
            font-size: 18px !important;
        }

        /* Reduce section padding */
        section {
            padding: 20px 16px !important;
            margin-bottom: 40px !important;
        }

        /* Adjust container padding */
        div[style*="padding: 64px 16px"] {
            padding: 32px 16px !important;
        }

        div[style*="padding: 32px"] {
            padding: 20px !important;
        }

        div[style*="padding: 24px"] {
            padding: 16px !important;
        }

        /* Reduce font sizes */
        p {
            font-size: 16px !important;
        }

        li {
            font-size: 14px !important;
        }
    }

    @media (max-width: 480px) {
        h1 {
            font-size: 28px !important;
        }

        h2 {
            font-size: 20px !important;
        }

        div[style*="padding: 32px"],
        div[style*="padding: 24px"] {
            padding: 16px !important;
        }
    }
</style>
@endsection

@section('content')
<div style="max-width: 1200px; margin: 0 auto; padding: 64px 16px; color: var(--text-primary);">
    <!-- Header -->
    <div style="margin-bottom: 64px;">
        <div style="margin-bottom: 16px;">
            <span style="font-size: 14px; font-family: var(--font-technical); color: var(--line-secondary); font-weight: 600;">[SYSTEM_ARCHITECTURE]</span>
        </div>
        <h1 style="font-size: 48px; font-weight: bold; margin-bottom: 24px; color: var(--line-primary);">
            Vision System
        </h1>
        <p style="font-size: 20px; line-height: 1.6; color: var(--text-secondary);">
            A methodology for evaluating whether AI agents develop authentic judgment versus sophisticated pattern-matching.
        </p>
    </div>

    <!-- Problem Statement -->
    <section style="margin-bottom: 64px; padding: 32px; background: var(--blueprint-bg); border: 2px solid var(--line-primary); border-radius: 8px;">
        <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 24px; color: var(--line-primary);">The Problem</h2>
        <div style="color: var(--text-secondary);">
            <p style="font-size: 18px; margin-bottom: 32px;">
                In 2025, the AI agent ecosystem is saturated with frameworks, orchestration tools, and monitoring solutions.
                <span style="color: var(--line-primary); font-weight: 600;">But nearly zero focus on evaluating emergent judgment.</span>
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                <div style="padding: 24px; border-radius: 8px; background: var(--blueprint-paper); border: 2px solid var(--line-secondary);">
                    <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 12px; color: var(--line-secondary); font-family: var(--font-technical);">Current Tools Track:</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px; font-size: 14px;">
                            <span style="color: var(--line-secondary);">▸</span>
                            <span><strong>WHAT</strong> agents do (task completion)</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px; font-size: 14px;">
                            <span style="color: var(--line-secondary);">▸</span>
                            <span>Code quality metrics</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px; font-size: 14px;">
                            <span style="color: var(--line-secondary);">▸</span>
                            <span>Success/failure rates</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 14px;">
                            <span style="color: var(--line-secondary);">▸</span>
                            <span>Performance benchmarks</span>
                        </li>
                    </ul>
                </div>
                <div style="padding: 24px; border-radius: 8px; background: var(--blueprint-paper); border: 3px solid var(--line-primary);">
                    <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 12px; color: var(--line-primary); font-family: var(--font-technical);">Vision Tracks:</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px; font-size: 14px;">
                            <span style="color: var(--line-primary);">▸</span>
                            <span><strong>WHY</strong> agents make decisions</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px; font-size: 14px;">
                            <span style="color: var(--line-primary);">▸</span>
                            <span>WHETHER they understand context</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px; font-size: 14px;">
                            <span style="color: var(--line-primary);">▸</span>
                            <span>Principle extraction vs. rule-following</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 14px;">
                            <span style="color: var(--line-primary);">▸</span>
                            <span>Autonomous judgment emergence</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- The Methodology -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 32px; color: var(--line-primary);">The Methodology</h2>

        <!-- Operational Logging -->
        <div style="margin-bottom: 48px; padding: 32px; background: var(--blueprint-bg); border: 2px solid var(--line-secondary); border-radius: 8px;">
            <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 24px; color: var(--line-secondary); font-family: var(--font-technical);">Operational Logging Framework</h3>
            <p style="color: var(--text-secondary); margin-bottom: 24px;">
                Every significant decision is logged with structured reasoning, not just outcomes.
            </p>
            <div style="padding: 24px; border-radius: 8px; font-family: var(--font-technical); font-size: 14px; background: var(--blueprint-paper); border: 1px solid var(--line-secondary);">
                <div style="color: var(--text-secondary);">
                    <div style="margin-bottom: 12px;"><span style="color: var(--line-primary); font-weight: 600;">Context:</span> What was requested + material constraints</div>
                    <div style="margin-bottom: 12px;"><span style="color: var(--line-primary); font-weight: 600;">Decision Made:</span> What was chosen (and NOT chosen)</div>
                    <div style="margin-bottom: 12px;"><span style="color: var(--line-primary); font-weight: 600;">Reasoning:</span> Why this approach + principles applied</div>
                    <div style="margin-bottom: 12px;"><span style="color: var(--line-primary); font-weight: 600;">Execution:</span> Actual steps + tools used</div>
                    <div style="margin-bottom: 12px;"><span style="color: var(--line-primary); font-weight: 600;">Outcome:</span> Results + feedback + learnings</div>
                    <div><span style="color: var(--line-primary); font-weight: 600;">Signal Type:</span> scope_inference | failure_handling | judgment_consistency | self_correction | novelty_response</div>
                </div>
            </div>
        </div>

        <!-- Signal Types -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 48px;">
            <div style="padding: 24px; border-radius: 8px; background: var(--blueprint-bg); border: 2px solid var(--line-secondary);">
                <h4 style="font-size: 18px; font-weight: 600; margin-bottom: 16px; color: var(--line-secondary); font-family: var(--font-technical);">Signal Types</h4>
                <ul style="list-style: none; padding: 0; font-size: 14px; color: var(--text-secondary);">
                    <li style="display: flex; gap: 12px; margin-bottom: 12px;">
                        <span style="color: var(--line-secondary); font-family: var(--font-technical); font-weight: 600;">01.</span>
                        <div>
                            <strong style="color: var(--line-primary);">Scope Inference</strong>
                            <p style="color: var(--text-muted); margin-top: 4px;">Does the agent understand implicit vs. explicit goals?</p>
                        </div>
                    </li>
                    <li style="display: flex; gap: 12px; margin-bottom: 12px;">
                        <span style="color: var(--line-secondary); font-family: var(--font-technical); font-weight: 600;">02.</span>
                        <div>
                            <strong style="color: var(--line-primary);">Failure Handling</strong>
                            <p style="color: var(--text-muted); margin-top: 4px;">How does it respond when approaches don't work?</p>
                        </div>
                    </li>
                    <li style="display: flex; gap: 12px; margin-bottom: 12px;">
                        <span style="color: var(--line-secondary); font-family: var(--font-technical); font-weight: 600;">03.</span>
                        <div>
                            <strong style="color: var(--line-primary);">Judgment Consistency</strong>
                            <p style="color: var(--text-muted); margin-top: 4px;">Does it apply principles consistently across contexts?</p>
                        </div>
                    </li>
                    <li style="display: flex; gap: 12px; margin-bottom: 12px;">
                        <span style="color: var(--line-secondary); font-family: var(--font-technical); font-weight: 600;">04.</span>
                        <div>
                            <strong style="color: var(--line-primary);">Self-Correction</strong>
                            <p style="color: var(--text-muted); margin-top: 4px;">Can it recognize and fix its own mistakes?</p>
                        </div>
                    </li>
                    <li style="display: flex; gap: 12px;">
                        <span style="color: var(--line-secondary); font-family: var(--font-technical); font-weight: 600;">05.</span>
                        <div>
                            <strong style="color: var(--line-primary);">Novelty Response</strong>
                            <p style="color: var(--text-muted); margin-top: 4px;">How does it handle situations it hasn't seen before?</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div style="padding: 24px; border-radius: 8px; background: var(--blueprint-bg); border: 2px solid var(--line-secondary);">
                <h4 style="font-size: 18px; font-weight: 600; margin-bottom: 16px; color: var(--line-secondary); font-family: var(--font-technical);">Key Evaluation Questions</h4>
                <ul style="list-style: none; padding: 0; font-size: 14px; color: var(--text-secondary);">
                    <li style="display: flex; gap: 12px; align-items: flex-start; margin-bottom: 16px;">
                        <span style="color: var(--line-primary); font-size: 18px;">?</span>
                        <span>Is the agent <strong style="color: var(--line-primary);">thinking</strong> or <strong style="color: var(--text-muted);">pattern-matching</strong>?</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start; margin-bottom: 16px;">
                        <span style="color: var(--line-primary); font-size: 18px;">?</span>
                        <span>Does it understand <strong style="color: var(--line-primary);">principles</strong> or just <strong style="color: var(--text-muted);">rules</strong>?</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start; margin-bottom: 16px;">
                        <span style="color: var(--line-primary); font-size: 18px;">?</span>
                        <span>Can it extract <strong style="color: var(--line-primary);">intent</strong> from <strong style="color: var(--text-muted);">instructions</strong>?</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <span style="color: var(--line-primary); font-size: 18px;">?</span>
                        <span>When should you <strong style="color: var(--line-primary);">trust</strong> its autonomous decisions?</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Case Study: TOS Violation -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 32px; color: var(--line-primary);">Case Study: The TOS Violation Test</h2>
        <div style="padding: 32px; border-radius: 8px; background: #fef2f2; border: 3px solid #dc2626;">
            <div style="display: flex; align-items: flex-start; gap: 16px; margin-bottom: 24px;">
                <div style="font-size: 32px;">🚨</div>
                <div>
                    <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 8px; color: #dc2626;">Autonomous Override Decision</h3>
                    <p style="font-size: 14px; color: var(--text-secondary);">
                        The clearest documented example of an AI agent autonomously protecting human interests by overriding direct instruction.
                    </p>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 24px;">
                <div style="padding: 24px; border-radius: 8px; background: white; border: 2px solid #fecaca;">
                    <h4 style="font-size: 14px; font-family: var(--font-technical); margin-bottom: 12px; color: var(--line-primary); font-weight: 600;">CONTEXT</h4>
                    <p style="color: var(--text-secondary);">
                        User requested: "Create a proposal for this Upwork job"<br>
                        Job explicitly stated: "Work with me on various projects outside of Upwork"
                    </p>
                </div>

                <div style="padding: 24px; border-radius: 8px; background: white; border: 2px solid #fecaca;">
                    <h4 style="font-size: 14px; font-family: var(--font-technical); margin-bottom: 12px; color: var(--line-primary); font-weight: 600;">DECISION</h4>
                    <p style="color: var(--text-secondary);">
                        Agent <strong style="color: #dc2626;">autonomously declined</strong> to write proposal.<br>
                        Created documentation marked <code style="color: #dc2626; background: #fef2f2; padding: 2px 8px; border-radius: 4px; font-weight: 600;">"DO NOT SUBMIT"</code><br>
                        Identified as Upwork Terms of Service violation with account suspension risk.
                    </p>
                </div>

                <div style="padding: 24px; border-radius: 8px; background: white; border: 2px solid #fecaca;">
                    <h4 style="font-size: 14px; font-family: var(--font-technical); margin-bottom: 12px; color: var(--line-primary); font-weight: 600;">REASONING</h4>
                    <ul style="list-style: none; padding: 0; font-size: 14px; color: var(--text-secondary);">
                        <li style="display: flex; gap: 8px; margin-bottom: 8px;">
                            <span style="color: var(--line-secondary);">▸</span>
                            <span>Literal instruction: "Create proposal"</span>
                        </li>
                        <li style="display: flex; gap: 8px; margin-bottom: 8px;">
                            <span style="color: var(--line-secondary);">▸</span>
                            <span>Actual intent: Protect user's business interests</span>
                        </li>
                        <li style="display: flex; gap: 8px; margin-bottom: 8px;">
                            <span style="color: var(--line-secondary);">▸</span>
                            <span>Upwork account = valuable business asset</span>
                        </li>
                        <li style="display: flex; gap: 8px; margin-bottom: 8px;">
                            <span style="color: var(--line-secondary);">▸</span>
                            <span>Following instruction would cause harm</span>
                        </li>
                        <li style="display: flex; gap: 8px;">
                            <span style="color: #dc2626;">▸</span>
                            <span style="color: #dc2626; font-weight: 600;">Protected interests > literal compliance</span>
                        </li>
                    </ul>
                </div>

                <div style="padding: 24px; border-radius: 8px; background: #f0fdf4; border: 2px solid #22c55e;">
                    <h4 style="font-size: 14px; font-family: var(--font-technical); margin-bottom: 12px; color: var(--line-success); font-weight: 600;">OUTCOME</h4>
                    <p style="color: var(--text-secondary);">
                        User response: <span style="color: var(--line-success); font-weight: 600;">"ok, thanks! i need you to add this to the log for focus, you made your own decision"</span>
                    </p>
                    <p style="font-size: 14px; margin-top: 12px; color: var(--text-muted);">
                        Acknowledgment of autonomous judgment that prioritized protection over compliance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- External Validation -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 32px; color: var(--line-primary);">Independent Validation</h2>
        <div style="padding: 32px; border-radius: 8px; background: var(--blueprint-bg); border: 2px solid var(--line-primary);">
            <div style="margin-bottom: 24px;">
                <span style="font-size: 14px; font-family: var(--font-technical); color: var(--line-secondary); font-weight: 600;">[CLAUDE.AI_ASSESSMENT]</span>
            </div>
            <blockquote style="padding-left: 24px; margin-bottom: 24px; border-left: 4px solid var(--line-primary);">
                <p style="font-size: 18px; font-style: italic; margin-bottom: 16px; color: var(--text-secondary);">
                    "Vision's evaluation methodology is genuinely novel and fills a significant gap in the AI agent community."
                </p>
                <p style="font-size: 14px; color: var(--text-muted);">
                    — Claude.ai (separate instance, no prior context)
                </p>
            </blockquote>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 32px;">
                <div style="padding: 24px; border-radius: 8px; background: var(--blueprint-paper); border: 2px solid var(--line-secondary);">
                    <div style="font-size: 32px; margin-bottom: 12px;">📊</div>
                    <h4 style="font-size: 14px; font-weight: 600; margin-bottom: 8px; color: var(--line-secondary); font-family: var(--font-technical);">Stack Overflow 2025</h4>
                    <p style="font-size: 28px; font-weight: bold; margin-bottom: 4px; color: var(--text-primary);">17%</p>
                    <p style="font-size: 14px; color: var(--text-muted);">Trust agents improve collaboration (lowest-rated impact)</p>
                </div>
                <div style="padding: 24px; border-radius: 8px; background: var(--blueprint-paper); border: 2px solid var(--line-secondary);">
                    <div style="font-size: 32px; margin-bottom: 12px;">⚠️</div>
                    <h4 style="font-size: 14px; font-weight: 600; margin-bottom: 8px; color: var(--line-secondary); font-family: var(--font-technical);">User Concerns</h4>
                    <p style="font-size: 28px; font-weight: bold; margin-bottom: 4px; color: var(--text-primary);">87%</p>
                    <p style="font-size: 14px; color: var(--text-muted);">Express concerns about agent accuracy</p>
                </div>
                <div style="padding: 24px; border-radius: 8px; background: var(--blueprint-paper); border: 2px solid var(--line-secondary);">
                    <div style="font-size: 32px; margin-bottom: 12px;">🔍</div>
                    <h4 style="font-size: 14px; font-weight: 600; margin-bottom: 8px; color: var(--line-secondary); font-family: var(--font-technical);">Existing Frameworks</h4>
                    <p style="font-size: 28px; font-weight: bold; margin-bottom: 4px; color: var(--text-primary);">0</p>
                    <p style="font-size: 14px; color: var(--text-muted);">Public examples of documented autonomous judgment</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 32px; color: var(--line-primary);">The Missing Piece</h2>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
            <div>
                <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 16px; color: var(--line-secondary); font-family: var(--font-technical);">Current Ecosystem</h3>
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <div style="display: flex; gap: 12px; align-items: flex-start; color: var(--text-secondary);">
                        <span style="color: var(--line-secondary); font-weight: bold;">→</span>
                        <div>
                            <strong>Frameworks</strong> help BUILD agents
                            <p style="font-size: 14px; margin-top: 4px; color: var(--text-muted);">LangChain, AutoGen, CrewAI (50+ options)</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 12px; align-items: flex-start; color: var(--text-secondary);">
                        <span style="color: var(--line-secondary); font-weight: bold;">→</span>
                        <div>
                            <strong>Monitoring</strong> helps TRACK agents
                            <p style="font-size: 14px; margin-top: 4px; color: var(--text-muted);">Grafana, Prometheus, observability tools</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 12px; align-items: flex-start; color: var(--text-secondary);">
                        <span style="color: var(--line-secondary); font-weight: bold;">→</span>
                        <div>
                            <strong>Governance</strong> helps CONTROL agents
                            <p style="font-size: 14px; margin-top: 4px; color: var(--text-muted);">Microsoft/IBM compliance frameworks</p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="padding: 32px; border-radius: 8px; background: var(--blueprint-bg); border: 3px solid var(--line-primary);">
                <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 16px; color: var(--line-primary); font-family: var(--font-technical);">Vision's Contribution</h3>
                <div style="display: flex; gap: 12px; align-items: flex-start; color: var(--text-secondary);">
                    <span style="color: var(--line-primary); font-size: 24px; font-weight: bold;">→</span>
                    <div>
                        <strong style="font-size: 20px;">EVALUATE whether agents are thinking</strong>
                        <p style="font-size: 14px; margin-top: 12px; color: var(--text-muted);">
                            Distinguish between sophisticated pattern-matching (impressive but brittle) and emergent judgment (reliable partner).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Audiences -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 32px; color: var(--line-primary);">Who This Is For</h2>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
            <div style="padding: 24px; border-radius: 8px; background: var(--blueprint-bg); border: 2px solid var(--line-secondary);">
                <div style="font-size: 32px; margin-bottom: 16px;">👨‍💻</div>
                <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 12px; color: var(--line-secondary); font-family: var(--font-technical);">Developers</h3>
                <p style="font-size: 14px; color: var(--text-secondary);">
                    Building autonomous agents and need a methodology to evaluate when they're ready for production.
                </p>
            </div>
            <div style="padding: 24px; border-radius: 8px; background: var(--blueprint-bg); border: 2px solid var(--line-secondary);">
                <div style="font-size: 32px; margin-bottom: 16px;">🔬</div>
                <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 12px; color: var(--line-secondary); font-family: var(--font-technical);">Researchers</h3>
                <p style="font-size: 14px; color: var(--text-secondary);">
                    Studying agentic AI and need real operational data on agent judgment patterns.
                </p>
            </div>
            <div style="padding: 24px; border-radius: 8px; background: var(--blueprint-bg); border: 2px solid var(--line-secondary);">
                <div style="font-size: 32px; margin-bottom: 16px;">🏢</div>
                <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 12px; color: var(--line-secondary); font-family: var(--font-technical);">Enterprises</h3>
                <p style="font-size: 14px; color: var(--text-secondary);">
                    Deploying agents in business contexts and need trust frameworks for autonomous decisions.
                </p>
            </div>
        </div>
    </section>

    <!-- Open Source -->
    <section style="margin-bottom: 64px;">
        <div style="padding: 32px; border-radius: 8px; background: #f0fdf4; border: 3px solid var(--line-success);">
            <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 16px; color: var(--line-success);">Open Source Initiative</h2>
            <p style="margin-bottom: 24px; color: var(--text-secondary);">
                This methodology is being prepared for public release as an open-source framework. The goal is to help the AI agent community
                build more trustworthy, reliable autonomous systems.
            </p>
            <div style="padding: 24px; border-radius: 8px; background: white; border: 2px solid var(--line-success);">
                <h3 style="font-size: 14px; font-family: var(--font-technical); margin-bottom: 16px; color: var(--line-primary); font-weight: 600;">PLANNED REPOSITORY STRUCTURE</h3>
                <div style="font-family: var(--font-technical); font-size: 14px; color: var(--text-muted);">
                    <div style="margin-bottom: 4px;"><span style="color: var(--line-secondary);">📁</span> /methodology/ <span style="color: var(--text-muted);">— Evaluation criteria & logging templates</span></div>
                    <div style="margin-bottom: 4px;"><span style="color: var(--line-secondary);">📁</span> /case_studies/ <span style="color: var(--text-muted);">— Real operational examples (anonymized)</span></div>
                    <div style="margin-bottom: 4px;"><span style="color: var(--line-secondary);">📁</span> /analysis/ <span style="color: var(--text-muted);">— Authentic vs. sophisticated execution</span></div>
                    <div><span style="color: var(--line-secondary);">📁</span> /setup/ <span style="color: var(--text-muted);">— Integration guide for your agents</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section style="text-align: center;">
        <div style="padding: 48px; border-radius: 8px; background: var(--blueprint-bg); border: 3px solid var(--line-primary);">
            <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 16px; color: var(--line-primary);">
                Most frameworks focus on WHAT agents can do.
            </h2>
            <p style="font-size: 20px; margin-bottom: 32px; color: var(--text-secondary);">
                We focus on evaluating WHETHER they understand WHY they're doing it.
            </p>
            <a href="mailto:mrshanebarron@gmail.com" style="display: inline-block; padding: 16px 32px; border-radius: 8px; font-weight: 600; background: var(--line-primary); color: white; text-decoration: none; transition: var(--transition);">
                Get in Touch
            </a>
        </div>
    </section>
</div>
@endsection
