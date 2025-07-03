<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KamarResource\Pages;
use App\Filament\Resources\KamarResource\RelationManagers;
use App\Models\Kamar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KamarResource extends Resource
{
    protected static ?string $model = Kamar::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Data Kamar';
    protected static ?string $pluralModelLabel = 'Kamar';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nomor_kamar')
                ->required()
                ->unique(ignoreRecord: true),
            Forms\Components\Select::make('status')
                ->options([
                    'kosong' => 'Kosong',
                    'Dipilih' => 'Dipilih',
                    'terisi' => 'Terisi',
                ])
                ->required(),
            Forms\Components\Textarea::make('fasilitas'),
            Forms\Components\TextInput::make('harga')
                ->numeric()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nomor_kamar')->sortable()->searchable(),
            Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'success' => 'kosong',
                    'danger' => 'disewa',
                ]),
            Tables\Columns\TextColumn::make('harga')->money('IDR'),
            Tables\Columns\TextColumn::make('fasilitas')->limit(30),
        ])->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKamars::route('/'),
            'create' => Pages\CreateKamar::route('/create'),
            'edit' => Pages\EditKamar::route('/{record}/edit'),
        ];
    }
}
