<?php

namespace App\Livewire\Pages;

use App\Models\Services;
use Livewire\Component;
use Livewire\Attributes\Title;

class PricePage extends Component
{
    #[Title('Price List')]
    public function render()
    {
        // Ambil semua data layanan
        $services = Services::all();

        // Kirim data ke view
        return view('livewire.pages.price-page', [
            'services' => $services
        ])
            ->layout('components.layouts.app');
    }
}