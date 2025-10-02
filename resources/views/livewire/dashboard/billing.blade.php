<div>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-2xl font-semibold text-gray-900">Billing & Invoices</h1>
            <p class="mt-2 text-sm text-gray-700">View your payment history and manage billing information.</p>
        </div>
    </div>

    <div class="mt-8">
        @if($invoices->count() > 0)
            <div class="overflow-hidden bg-white shadow sm:rounded-md">
                <ul role="list" class="divide-y divide-gray-200">
                    @foreach($invoices as $invoice)
                        <li>
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <div class="flex min-w-0 flex-1 items-center">
                                        <div class="flex-shrink-0">
                                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-green-600">
                                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="min-w-0 flex-1 px-4">
                                            <div>
                                                <p class="truncate text-sm font-medium text-indigo-600">{{ $invoice->order_number }}</p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                                    <span class="truncate">{{ $invoice->domain ? $invoice->domain->domain_name : ucfirst($invoice->type) }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-5 flex flex-shrink-0 flex-col items-end">
                                        <p class="text-sm font-semibold text-gray-900">${{ number_format($invoice->total, 2) }}</p>
                                        <p class="mt-1 text-sm text-gray-500">{{ $invoice->paid_at ? $invoice->paid_at->format('M d, Y') : $invoice->created_at->format('M d, Y') }}</p>
                                    </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                            Payment ID: <span class="ml-1 font-mono text-xs">{{ $invoice->payment_id }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @else
            <div class="text-center py-12 bg-white rounded-lg shadow">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="mt-2 text-sm font-semibold text-gray-900">No invoices</h3>
                <p class="mt-1 text-sm text-gray-500">Your paid invoices will appear here.</p>
            </div>
        @endif
    </div>
</div>
