<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductStats extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', Product::count())
                ->description('All products')
                ->descriptionIcon('heroicon-m-cube')
                ->color('primary'),

            Stat::make('In Stock', Product::where('stock', '>', 0)->count())
                ->description('Available')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('Out of Stock', Product::where('stock', 0)->count())
                ->description('Unavailable')
                ->descriptionIcon('heroicon-m-x-circle')
                ->color('danger'),

            Stat::make(
                'Low Stock',
                Product::where('stock', '>', 0)
                    ->where('stock', '<=', 10)
                    ->count()
            )
                ->description('Needs restocking')
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->color('warning'),
        ];
    }
}
