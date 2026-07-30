<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('company_name')
                    ->label('Company Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->tel()
                    ->required(),

                TextInput::make('whatsapp')
                    ->tel()
                    ->required(),

                TextInput::make('email')
                    ->email()
                    ->required(),

                Textarea::make('address')
                    ->rows(3)
                    ->required(),

                FileUpload::make('logo')
                    ->image()
                    ->disk('public')

                    ->directory('settings'),

            ]);
    }
}
