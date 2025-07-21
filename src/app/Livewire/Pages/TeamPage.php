<?php

namespace App\Livewire\Pages;

use App\Models\Barbers; // <-- Import model Barber
use Livewire\Component;
use Livewire\Attributes\Title;

class TeamPage extends Component
{
    #[Title('Our Team')]
    public function render()
    {
        // Ambil semua barber yang statusnya 'active'
        $barbers = Barbers::where('status', 'active')->get();

        // Kirim data ke view
        return view('livewire.pages.team-page', [
            'barbers' => $barbers
        ])
            ->layout('components.layouts.app');
    }
}