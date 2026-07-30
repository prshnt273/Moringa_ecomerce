<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),

                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required(),

                TextInput::make('price')
                    ->numeric()
                    ->required(),

                TextInput::make('sale_price')
                    ->numeric(),

                TextInput::make('stock')
                    ->numeric()
                    ->default(0),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                     ->directory('products'),

                Textarea::make('short_description')
                    ->rows(3),

                RichEditor::make('description'),

                Toggle::make('featured')
                    ->default(false),

                Toggle::make('status')
                    ->default(true),

            ]);
    }
}
