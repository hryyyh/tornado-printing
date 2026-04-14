<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('name')
                    ->label('Product Name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->columnSpanFull(),

                // ✅ RELATION IMAGES (FIXED VERSION)
                Forms\Components\Repeater::make('images')
                    ->relationship()
                    ->label('Product Images')
                    ->schema([
                        Forms\Components\FileUpload::make('path')
                            ->label('Image')
                            ->image()
                            ->directory('products')
                            ->disk('public') // 🔥 PENTING BIAR KE storage/app/public
                            ->required(),
                    ])
                    ->addActionLabel('Add Image')
                    ->reorderable()
                    ->columnSpanFull(),
            ]);
    }
}