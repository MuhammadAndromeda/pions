<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateTimeColumn;
use Filament\Tables\Table;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(255),

            Textarea::make('content')
                ->required()
                ->rows(6),

            FileUpload::make('image')
                ->image()
                ->directory('news-images')
                ->nullable(),

            Select::make('author_id')
                ->relationship('author', 'name')
                ->required(),

            DateTimePicker::make('published_at')
                ->label('Tanggal Publikasi')
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('title')->limit(30)->sortable()->searchable(),
            ImageColumn::make('image')->size(40),
            TextColumn::make('author.name')->label('Author'),
            TextColumn::make('published_at')
                ->label('Dipublikasikan')
                ->dateTime(),
            TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime(),

        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
