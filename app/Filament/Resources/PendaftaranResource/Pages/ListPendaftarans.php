<?php

namespace App\Filament\Resources\PendaftaranResource\Pages;

use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\PendaftaranResource;
use App\Models\Pendaftaran;


class ListPendaftarans extends ListRecords
{
    protected static string $resource = PendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
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
            'Proses' => Tab::make()
                ->query(function ($query) {
                    $query->where('id_status', 'Proses');
                })
                ->badge(Pendaftaran::query()->where('id_status', 'Proses')->count()),
            ];
    }
}
