<?php

namespace App\Filament\Resources\ModulResource\Pages;

use App\Filament\Resources\ModulResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class CreateModul extends CreateRecord
{
    protected static string $resource = ModulResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('level'),
            ]);
    }
}
