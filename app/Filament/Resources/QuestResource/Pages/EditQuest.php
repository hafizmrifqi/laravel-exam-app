<?php

namespace App\Filament\Resources\QuestResource\Pages;

use App\Filament\Resources\QuestResource;
use App\Models\Modul;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;

class EditQuest extends EditRecord
{
    protected static string $resource = QuestResource::class;

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
                RichEditor::make('question')
                ->label('Pertanyaan'),
                Select::make('answer')
                ->options([
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C',
                    'd' => 'D',
                ])
                ->label('Jawaban'),
                Select::make('modul_id')
                ->label('Modul')
                ->options(Modul::all()->pluck('name', 'id'))
                ->searchable()
            ]);
    }
}
