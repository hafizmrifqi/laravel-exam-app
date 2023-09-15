<?php

namespace App\Filament\Resources\ModulResource\Pages;

use App\Filament\Resources\ModulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class EditModul extends EditRecord
{
    protected static string $resource = ModulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('level'),
            ]);
    }

}
