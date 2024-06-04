<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Pendaftaran;
use Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Forms\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PendaftaranResource\Pages;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Filament\Resources\PendaftaranResource\RelationManagers;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    protected static ?string $navigationLabel = 'Data PPDB 2024';

    protected static ?string $modelLabel = 'Registration';

    protected static ?string $navigationGroup = 'PPDB';
    
    protected static ?string $slug = 'ppdb';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make()
            ->schema([
            Forms\Components\Section::make('Data Siswa')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('nama_lengkap')->label('Nama Lengkap')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Select::make('jenis_kelamin')
                        ->options([
                            'Laki-laki' => 'Laki-laki',
                            'Perempuan' => 'Perempuan',
                        ])
                        ->label('Jenis Kelamin')
                        ->required(),
                    Forms\Components\TextInput::make('tempat_lahir')->label('Tempat Lahir')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Datepicker::make('tanggal_lahir')->label('Tanggal Lahir')
                        ->required(),
                    Forms\Components\TextInput::make('email')->label('Email')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('alamat')->label('Alamat')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('asal_sekolah')->label('Asal Sekolah')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('no_wa')->label('Nomor WhatsApp')
                        ->required()
                        ->maxLength(255),
                ]),
            Forms\Components\Section::make('Data Ayah')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('nama_ayah')->label('Nama Ayah')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\TextInput::make('pekerjaan_ayah')->label('Pekerjaan Ayah')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\TextInput::make('tlp_ayah')->label('Nomor Telepon Ayah')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Textarea::make('alamat_ayah')->label('Alamat Ayah')
                    ->required(),
                ]),
            Forms\Components\Section::make('Data Ibu')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('nama_ibu')->label('Nama Ibu')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\TextInput::make('pekerjaan_ibu')->label('Pekerjaan Ibu')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\TextInput::make('tlp_ibu')->label('Nomor Telepon Ibu')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Textarea::make('alamat_ibu')->label('Alamat Ibu')
                    ->required(),
                ]),
            Forms\Components\Section::make('Dokumen Siswa')
                ->columns(2)
                ->schema([
                    Forms\Components\FileUpload::make('skl')->label('SKL')
                    ->preserveFilenames(),
                    Forms\Components\FileUpload::make('akta')->label('Akta Kelahiran')
                    ->preserveFilenames(),
                    Forms\Components\FileUpload::make('kk')->label('Kartu Keluarga')
                    ->preserveFilenames(),
                ]),
            Forms\Components\Section::make('Informasi Lainnya')
                ->columns(2)
                ->schema([
                    Forms\Components\Select::make('kompetensikeahlian')->label('Kompetensi Keahlian')
                    ->required()
                    ->options([
                        'Desain Komunikasi Visual (DKV)' => 'Desain Komunikasi Visual (DKV)',
                        'Rekayasa Perangkat Lunak (RPL)' => 'Rekayasa Perangkat Lunak (RPL)',
                        'Teknik Audio Video (TAV)' => 'Teknik Audio Video (TAV)',
                        'Asisten Keperawatan (AK)' => 'Asisten Keperawatan (AK)',
                        'Teknik dan Bisnis Sepeda Motor (TBSM)' => 'Teknik dan Bisnis Sepeda Motor (TBSM)',
                        'Teknik Kendaraan Ringan Otomotif (TKRO)' => 'Teknik Kendaraan Ringan Otomotif (TKRO)',
                    ])
                    ->label('Kompetensi Keahlian'),
                    Forms\Components\Datepicker::make('waktu_pendaftaran')->label('Waktu Pendaftaran')
                    ->required(),
                    Forms\Components\Select::make('id_tipe')
                        ->options(['Online' => 'Online', 'Offline' => 'Offline'])
                        ->label('Tipe Pendaftaran')
                        ->required(),
                    Forms\Components\Select::make('id_status')
                        ->options(['Proses' => 'Proses', 'Diterima' => 'Diterima', 'Tidak Diterima' => 'Tidak Diterima'])
                        ->label('Status Pendaftaran')
                        ->required(),
                ]),
        ])
    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID Pendaftar'),
                Tables\Columns\TextColumn::make('nama_lengkap')->label('Nama Lengkap')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jenis_kelamin')->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('tempat_lahir')->label('Tempat Lahir'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('alamat')->label('Alamat'),
                Tables\Columns\TextColumn::make('asal_sekolah')->label('Asal Sekolah'),
                Tables\Columns\TextColumn::make('no_wa')->label('Nomer WA'),
                Tables\Columns\TextColumn::make('nama_ayah')->label('Nama Ayah'),
                Tables\Columns\TextColumn::make('pekerjaan_ayah')->label('Pekerjaan Ayah'),
                Tables\Columns\TextColumn::make('tlp_ayah')->label('Nomer Ayah'),
                Tables\Columns\TextColumn::make('alamat_ayah')->label('Alamat Ayah'),
                Tables\Columns\TextColumn::make('nama_ibu')->label('Nama Ibu'),
                Tables\Columns\TextColumn::make('pekerjaan_ibu')->label('Pekerjaan Ibu'),
                Tables\Columns\TextColumn::make('tlp_ibu')->label('Nomor Ibu'),
                Tables\Columns\TextColumn::make('alamat_ibu')->label('Alamat Ibu'),
                Tables\Columns\TextColumn::make('kompetensikeahlian')->label('Kompetensi Keahlian'),
                Tables\Columns\TextColumn::make('waktu_pendaftaran')->label('Waktu Pendaftaran'),
                Tables\Columns\TextColumn::make('id_tipe')->label('Tipe Pendaftaran'),
                Tables\Columns\TextColumn::make('id_status')->label('Status Pendaftaran'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    ExportBulkAction::make(),
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
            'index' => Pages\ListPendaftarans::route('/'),
            'create' => Pages\CreatePendaftaran::route('/create'),
            'edit' => Pages\EditPendaftaran::route('/{record}/edit'),
        ];
    }
}
