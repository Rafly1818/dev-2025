<?php

namespace App\Livewire\Pages;

use App\Models\Barbers;
use Livewire\Component;
use Livewire\Attributes\Title;

class GalleryPage extends Component
{
    #[Title('Gallery')]
    public function render()
    {
        // Ambil semua barber aktif yang memiliki foto
        $barbers = Barbers::where('status', 'active')
                         ->whereNotNull('photo')
                         ->get();

        return view('livewire.pages.gallery-page', [
            'barbers' => $barbers
        ])
            ->layout('components.layouts.app');
    }
}