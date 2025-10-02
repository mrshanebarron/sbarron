<div>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-2xl font-semibold text-gray-900">Hosting Services</h1>
            <p class="mt-2 text-sm text-gray-700">Manage your hosting plans, access credentials, and server information.</p>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <a href="{{ route('hosting.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                Browse Plans
            </a>
        </div>
    </div>

    <div class="mt-8">
        @if($services->count() > 0)
            <div class="space-y-6">
                @foreach($services as $service)
                    <div class="overflow-hidden rounded-lg bg-white shadow">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="flex-1">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $service->service_name }}</h3>
                                    <p class="mt-1 text-sm text-gray-500">{{ $service->hostingPlan->name }}</p>
                                </div>
                                <div class="mt-4 sm:ml-6 sm:mt-0 sm:flex-shrink-0">
                                    @if($service->status === 'active')
                                        <span class="inline-flex items-center rounded-md bg-green-50 px-2.5 py-0.5 text-sm font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                                    @else
                                        <span class="inline-flex items-center rounded-md bg-yellow-50 px-2.5 py-0.5 text-sm font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">{{ ucfirst($service->status) }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mt-6 border-t border-gray-200 pt-6">
                                <dl class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-2">
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Server IP</dt>
                                        <dd class="mt-1 text-sm text-gray-900 font-mono">{{ $service->server_ip ?? 'Provisioning...' }}</dd>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Billing Cycle</dt>
                                        <dd class="mt-1 text-sm text-gray-900">{{ ucfirst($service->billing_cycle) }}</dd>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Next Billing Date</dt>
                                        <dd class="mt-1 text-sm text-gray-900">{{ $service->next_billing_date ? $service->next_billing_date->format('F d, Y') : 'N/A' }}</dd>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Price</dt>
                                        <dd class="mt-1 text-sm text-gray-900 font-semibold">${{ number_format($service->price, 2) }}/mo</dd>
                                    </div>
                                </dl>
                            </div>

                            @if($service->status === 'active' && $service->server_ip)
                                <div class="mt-6 border-t border-gray-200 pt-6">
                                    <button wire:click="toggleCredentials({{ $service->id }})" class="inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                                        <svg class="-ml-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                        </svg>
                                        {{ ($showCredentials[$service->id] ?? false) ? 'Hide' : 'Show' }} Credentials
                                    </button>

                                    @if($showCredentials[$service->id] ?? false)
                                        <div class="mt-4 rounded-md bg-gray-50 p-4">
                                            <dl class="space-y-4">
                                                <div>
                                                    <dt class="text-xs font-medium text-gray-500 uppercase tracking-wide">SSH Username</dt>
                                                    <dd class="mt-1 text-sm text-gray-900 font-mono">{{ $service->server_username }}</dd>
                                                </div>
                                                <div>
                                                    <dt class="text-xs font-medium text-gray-500 uppercase tracking-wide">Database Name</dt>
                                                    <dd class="mt-1 text-sm text-gray-900 font-mono">{{ $service->database_name }}</dd>
                                                </div>
                                                <div>
                                                    <dt class="text-xs font-medium text-gray-500 uppercase tracking-wide">Database Username</dt>
                                                    <dd class="mt-1 text-sm text-gray-900 font-mono">{{ $service->database_username }}</dd>
                                                </div>
                                                <div>
                                                    <dt class="text-xs font-medium text-gray-500 uppercase tracking-wide">FTP Username</dt>
                                                    <dd class="mt-1 text-sm text-gray-900 font-mono">{{ $service->ftp_username }}</dd>
                                                </div>
                                            </dl>
                                            <p class="mt-4 text-xs text-gray-500">Passwords have been sent to your email.</p>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12 bg-white rounded-lg shadow">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                </svg>
                <h3 class="mt-2 text-sm font-semibold text-gray-900">No hosting services</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by choosing a hosting plan.</p>
                <div class="mt-6">
                    <a href="{{ route('hosting.index') }}" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                        <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        Browse Plans
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>
