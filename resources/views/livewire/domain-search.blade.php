<div style="max-width: 1200px; margin: 0 auto; padding: 60px 20px;">
    <!-- Search Header -->
    <div style="text-align: center; margin-bottom: 60px;">
        <h1 style="font-family: var(--font-technical); font-size: 48px; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; letter-spacing: -1px;">
            Find Your Perfect Domain
        </h1>
        <p style="font-size: 20px; color: var(--text-secondary); max-width: 600px; margin: 0 auto; line-height: 1.6;">
            Search millions of available domains and start building your online presence today.
        </p>
    </div>

    <!-- Search Form -->
    <div style="max-width: 700px; margin: 0 auto 60px;">
        <form wire:submit="searchDomains" style="position: relative;">
            <div style="display: flex; gap: 12px; align-items: stretch;">
                <div style="flex: 1; position: relative;">
                    <input
                        type="text"
                        wire:model="search"
                        placeholder="Search for your domain..."
                        style="width: 100%; padding: 20px 24px; font-size: 18px; font-family: var(--font-technical); border: var(--line-weight-bold) solid var(--line-secondary); border-radius: 8px; outline: none; transition: var(--transition); background: var(--blueprint-paper);"
                        onfocus="this.style.borderColor='var(--line-primary)'; this.style.background='white';"
                        onblur="this.style.borderColor='var(--line-secondary)'; this.style.background='var(--blueprint-paper)';"
                    >
                    @error('search')
                        <span style="position: absolute; bottom: -24px; left: 0; color: #e53e3e; font-size: 14px; font-family: var(--font-technical);">{{ $message }}</span>
                    @enderror
                </div>
                <button
                    type="submit"
                    style="padding: 20px 40px; background: var(--line-secondary); color: white; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; font-family: var(--font-technical); text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: var(--transition); white-space: nowrap;"
                    onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 16px rgba(126, 179, 211, 0.3)'; this.style.background='var(--line-primary)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.background='var(--line-secondary)';"
                    {{ $searching ? 'disabled' : '' }}
                >
                    @if($searching)
                        <i class="fa-duotone fa-thin fa-spinner-third fa-spin" style="margin-right: 8px;"></i>
                        Searching...
                    @else
                        <i class="fa-duotone fa-thin fa-magnifying-glass" style="margin-right: 8px;"></i>
                        Search
                    @endif
                </button>
            </div>
        </form>

        @if($error)
            <div style="margin-top: 20px; padding: 16px 20px; background: #fed7d7; border-left: 4px solid #e53e3e; border-radius: 8px; font-family: var(--font-technical);">
                <i class="fa-duotone fa-thin fa-circle-exclamation" style="color: #e53e3e; margin-right: 8px;"></i>
                <span style="color: #742a2a;">{{ $error }}</span>
            </div>
        @endif

        @if(session()->has('message'))
            <div style="margin-top: 20px; padding: 16px 20px; background: #c6f6d5; border-left: 4px solid var(--line-success); border-radius: 8px; font-family: var(--font-technical);">
                <i class="fa-duotone fa-thin fa-circle-check" style="color: var(--line-success); margin-right: 8px;"></i>
                <span style="color: #22543d;">{{ session('message') }}</span>
            </div>
        @endif
    </div>

    <!-- Search Results -->
    @if(count($results) > 0)
        <div style="max-width: 900px; margin: 0 auto;">
            <h2 style="font-family: var(--font-technical); font-size: 28px; font-weight: 600; color: var(--text-primary); margin-bottom: 24px;">
                Search Results
            </h2>

            <div style="display: grid; gap: 16px;">
                @foreach($results as $result)
                    <div style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-secondary); border-radius: 12px; padding: 24px; display: flex; justify-content: space-between; align-items: center; transition: var(--transition);"
                         onmouseover="this.style.borderColor='var(--line-primary)'; this.style.boxShadow='0 4px 12px rgba(107, 91, 115, 0.15)'; this.style.background='white';"
                         onmouseout="this.style.borderColor='var(--line-secondary)'; this.style.boxShadow='none'; this.style.background='var(--blueprint-paper)';"

                        <!-- Domain Info -->
                        <div style="flex: 1;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 8px;">
                                <h3 style="font-family: var(--font-technical); font-size: 24px; font-weight: 600; color: var(--text-primary); margin: 0;">
                                    {{ $result['domain'] }}
                                </h3>
                                @if($result['available'])
                                    <span style="padding: 4px 12px; background: #c6f6d5; color: #22543d; border-radius: 6px; font-size: 14px; font-weight: 600; font-family: var(--font-technical);">
                                        <i class="fa-duotone fa-thin fa-circle-check" style="margin-right: 4px;"></i>
                                        Available
                                    </span>
                                @else
                                    <span style="padding: 4px 12px; background: #fed7d7; color: #742a2a; border-radius: 6px; font-size: 14px; font-weight: 600; font-family: var(--font-technical);">
                                        <i class="fa-duotone fa-thin fa-circle-xmark" style="margin-right: 4px;"></i>
                                        Taken
                                    </span>
                                @endif
                            </div>

                            @if($result['available'])
                                <p style="color: var(--text-secondary); margin: 0; font-family: var(--font-blueprint);">
                                    Start building your online presence with this domain today.
                                </p>
                            @endif
                        </div>

                        <!-- Price & Action -->
                        <div style="display: flex; align-items: center; gap: 20px;">
                            @if($result['available'])
                                <div style="text-align: right;">
                                    <div style="font-family: var(--font-technical); font-size: 32px; font-weight: 700; color: var(--text-primary);">
                                        ${{ number_format($result['price'], 2) }}
                                    </div>
                                    <div style="font-family: var(--font-technical); font-size: 14px; color: var(--text-secondary);">
                                        @if($result['premium'] ?? false)
                                            one-time
                                        @else
                                            per year
                                        @endif
                                    </div>
                                </div>
                                <button
                                    wire:click="addToCart('{{ $result['domain'] }}', {{ $result['price'] }})"
                                    style="padding: 14px 28px; background: linear-gradient(135deg, var(--line-secondary) 0%, #6b95b3 100%); color: white; border: none; border-radius: 10px; font-family: var(--font-technical); font-size: 16px; font-weight: 600; cursor: pointer; transition: var(--transition);"
                                    onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 12px rgba(126, 179, 211, 0.3)'"
                                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
                                >
                                    <i class="fa-duotone fa-thin fa-cart-plus" style="margin-right: 8px;"></i>
                                    Add to Cart
                                </button>
                            @else
                                <div style="text-align: right; color: var(--text-muted);">
                                    <i class="fa-duotone fa-thin fa-lock" style="font-size: 32px;"></i>
                                    <div style="font-family: var(--font-technical); font-size: 14px; margin-top: 4px;">
                                        Not Available
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
