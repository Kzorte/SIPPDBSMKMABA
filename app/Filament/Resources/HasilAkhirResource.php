<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HasilAkhirResource\Pages;
use App\Filament\Resources\HasilAkhirResource\RelationManagers;
use App\Models\HasilAkhir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Filament\Tables\Columns\TextColumn;

class HasilAkhirResource extends Resource
{
    protected static ?string $model = HasilAkhir::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Data Hasil Akhir';

    protected static ?string $navigationGroup = 'PPDB';
    
    protected static ?int $navigationSort = 2;

    protected static ?string $slug = 'Hasil-akhir';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_pendaftar')->label('ID Pendaftar'),
                Tables\Columns\TextColumn::make('nama_lengkap')->label('Nama Lengkap')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jenis_kelamin')->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('id_tipe')->label('Tipe Pendaftaran'),
                Tables\Columns\TextColumn::make('id_status')->label('Status Pendaftaran'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHasilAkhirs::route('/'),
            'create' => Pages\CreateHasilAkhir::route('/create'),
            'edit' => Pages\EditHasilAkhir::route('/{record}/edit'),
        ];
    }
}
