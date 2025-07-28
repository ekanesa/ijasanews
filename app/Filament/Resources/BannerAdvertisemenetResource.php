<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerAdvertisemenetResource\Pages;
use App\Filament\Resources\BannerAdvertisemenetResource\RelationManagers;
use App\Models\BannerAdvertisemenet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerAdvertisemenetResource extends Resource
{
    protected static ?string $model = BannerAdvertisemenet::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('link')
                    ->label('Advertisement Link')
                    ->url()
                    ->required(),
                Forms\Components\Select::make('is_active')
                    ->label('Is Active')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ])
                    ->default(1)
                    ->required(),
                Forms\Components\TextInput::make('type')
                    ->label('Type')
                    ->required(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('link')
                    ->label('Link')
                    ->searchable()
                    ->sortable(),
                BooleanColumn::make('is_active')
                    ->label('Is Active'),
                TextColumn::make('type')
                    ->label('Type')
                    ->sortable(),
                TextColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->formatStateUsing(fn ($state) => '<img src="' . asset('storage/' . $state) . '" alt="Thumbnail" width="50">')
                    ->html(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListBannerAdvertisemenets::route('/'),
            'create' => Pages\CreateBannerAdvertisemenet::route('/create'),
            'edit' => Pages\EditBannerAdvertisemenet::route('/{record}/edit'),
        ];
    }
}
