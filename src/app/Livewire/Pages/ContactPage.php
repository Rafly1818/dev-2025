<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class ContactPage extends Component
{
    #[Title('Contact Us')]
    public function render()
    {
        return view('livewire.pages.contact-page')
            ->layout('components.layouts.app');
    }
}