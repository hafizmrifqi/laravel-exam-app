<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModulResource\Pages;
use App\Filament\Resources\ModulResource\RelationManagers;
use App\Models\Modul;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ModulResource extends Resource
{
    protected static ?string $model = Modul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                TextColumn::make('name'),
                TextColumn::make('level'),
            ])
            ->filters([
                Filter::make('S1')
                    ->query(fn (Builder $query): Builder => $query->where('level', 'S1'))
                    ->label('S1'),
                Filter::make('SMA')
                    ->query(fn (Builder $query): Builder => $query->where('level', 'SMA'))
                    ->label('SMA'),
                Filter::make('SMK')
                    ->query(fn (Builder $query): Builder => $query->where('level', 'SMK'))
                    ->label('SMK'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Tidak ada modul yang dibuat');
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
            'index' => Pages\ListModuls::route('/'),
            'create' => Pages\CreateModul::route('/create'),
            'edit' => Pages\EditModul::route('/{record}/edit'),
        ];
    }
}
