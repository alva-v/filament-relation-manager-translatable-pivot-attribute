<?php

namespace App\Filament\Resources\FooResource\Pages;

use App\Filament\Resources\FooResource;
use Filament\Actions;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListFoos extends ListRecords
{
    use Translatable;
    
    protected static string $resource = FooResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
