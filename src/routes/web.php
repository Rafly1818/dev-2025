<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\AboutPage;
use App\Livewire\Pages\ServicesPage;
use App\Livewire\Pages\PricePage;
use App\Livewire\Pages\TeamPage;
use App\Livewire\Pages\GalleryPage;
use App\Livewire\Pages\ContactPage;

Route::get('/', HomePage::class);
Route::get('/about', AboutPage::class);
Route::get('/services', ServicesPage::class);
Route::get('/price', PricePage::class);
Route::get('/team', TeamPage::class);
Route::get('/portfolio', GalleryPage::class);
Route::get('/reservation', ContactPage::class)->name('reservation');