<?php

namespace App\Livewire\Pages;

use App\Models\Services; // <-- 1. Import model Service
use Livewire\Component;
use Livewire\Attributes\Title;

class ServicesPage extends Component
{
    #[Title('Our Services')]
    public function render()
    {
        // 2. Ambil semua data dari tabel services
        $services = Services::all(); 

        // 3. Kirim data services ke view
        return view('livewire.pages.services-page', [
            'services' => $services
        ])
            ->layout('components.layouts.app');
    }
}