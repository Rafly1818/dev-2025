<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class HomePage extends Component
{
    #[Title('Home')] // Ini akan mengisi <title> di layout kita
    public function render()
    {
        return view('livewire.pages.home-page')
            ->layout('components.layouts.app'); // Memberitahu Livewire untuk menggunakan layout app.blade.php
    }
}