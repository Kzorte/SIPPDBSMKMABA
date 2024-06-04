<?php

namespace App\Filament\Resources\HasilAkhirResource\Pages;

use Filament\Actions;
use App\Models\Pendaftaran;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\HasilAkhirResource;

class ListHasilAkhirs extends ListRecords
{
    protected static string $resource = HasilAkhirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
    public function getTabs(): array
    {
        return [
            'All' => Tab::make()
            ->badge(Pendaftaran::query()->count()),
            'This Week' => Tab::make()
                ->query(function ($query) {
                    $query->where('waktu_pendaftaran', '>=', now()->subWeek());
                })
                ->badge(Pendaftaran::query()->where('waktu_pendaftaran', '>=', now()->subWeek())->count()),
            ];
    }
}
