<?php

namespace App\Filament\Widgets;

use App\Models\Barbers;
use App\Models\Reservations;
use App\Models\Services;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Barbers', Barbers::count())
                ->description('Jumlah barber yang terdaftar')
                ->icon('heroicon-o-user-group')
                ->color('success'),

            Stat::make('Total Layanan', Services::count())
                ->description('Jumlah jenis layanan yang tersedia')
                ->icon('heroicon-o-scissors')
                ->color('info'),

            Stat::make('Total Reservasi', Reservations::count())
                ->description('Jumlah semua reservasi yang masuk')
                ->icon('heroicon-o-calendar-days')
                ->color('warning'),
        ];
    }
}