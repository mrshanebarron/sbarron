<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\NamecomService;
use Illuminate\Support\Str;

class DomainSearch extends Component
{
    public string $search = '';
    public array $results = [];
    public bool $searching = false;
    public string $error = '';

    protected $rules = [
        'search' => 'required|min:2|max:63',
    ];

    public function searchDomains()
    {
        $this->validate();

        $this->searching = true;
        $this->error = '';
        $this->results = [];

        try {
            // Clean the search query
            $keyword = strtolower(trim($this->search));
            $keyword = str_replace(['http://', 'https://', 'www.'], '', $keyword);
            $keyword = explode('.', $keyword)[0]; // Remove any TLD if provided

            // Only allow alphanumeric and hyphens
            if (!preg_match('/^[a-z0-9-]+$/', $keyword)) {
                $this->error = 'Domain names can only contain letters, numbers, and hyphens.';
                $this->searching = false;
                return;
            }

            $namecom = new NamecomService();

            // Search for domains
            $response = $namecom->searchDomains($keyword, ['com', 'net', 'org', 'io', 'dev', 'app']);

            if ($response && isset($response['results'])) {
                $this->results = collect($response['results'])
                    ->map(function ($result) {
                        return [
                            'domain' => $result['domainName'] ?? '',
                            'available' => $result['purchasable'] ?? false,
                            'price' => $result['purchasePrice'] ?? 0,
                            'tld' => $result['tld'] ?? '',
                        ];
                    })
                    ->toArray();
            } else {
                $this->error = 'Unable to search domains at this time. Please try again later.';
            }

        } catch (\Exception $e) {
            $this->error = 'An error occurred while searching. Please try again.';
            logger()->error('Domain search error', [
                'search' => $this->search,
                'error' => $e->getMessage(),
            ]);
        }

        $this->searching = false;
    }

    public function addToCart(string $domain, float $price)
    {
        $this->dispatch('domain-added-to-cart', [
            'domain' => $domain,
            'price' => $price,
        ]);

        session()->flash('message', "Added {$domain} to cart!");
    }

    public function render()
    {
        return view('livewire.domain-search');
    }
}
