<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VacancyResource\Pages;
use App\Filament\Resources\VacancyResource\RelationManagers;
use App\Models\Vacancy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TagsInput;
use App\Models\Language;

class VacancyResource extends Resource
{
    protected static ?string $model = Vacancy::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.vacancies');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.vacancies');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.vacancies.vacancy');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $tabs = [];

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.title')
                        ->label(__('admin.crud.create.title'))
                        ->required()
                        ->maxLength(255),
                    Textarea::make('translations.' . $language->code . '.description')
                        ->label(__('admin.crud.create.description'))
                        ->rows(8),
                    TagsInput::make('translations.' . $language->code . '.requirements')
                        ->label(__('admin.crud.create.vacancies.requirements'))
                        ->separator(','),
                    TagsInput::make('translations.' . $language->code . '.responsibilities')
                        ->label(__('admin.crud.create.vacancies.responsibilities'))
                        ->separator(','),
                    TagsInput::make('translations.' . $language->code . '.conditions')
                        ->label(__('admin.crud.create.vacancies.conditions'))
                        ->separator(','),
                    TagsInput::make('translations.' . $language->code . '.key_skills')
                        ->label(__('admin.crud.create.vacancies.key_skills'))
                        ->separator(','),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Forms\Components\TextInput::make('sort')
                    ->label(__('admin.crud.create.sort'))
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('active')
                ->label(__('admin.crud.create.active'))
                    ->required(),
                Tabs::make('translations')
                    ->label('Translations')
                    ->tabs($tabs)
                    ->columnSpan(2),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->state(fn (Vacancy $vacancy) => $vacancy->translation()?->title),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListVacancies::route('/'),
            'create' => Pages\CreateVacancy::route('/create'),
            'edit' => Pages\EditVacancy::route('/{record}/edit'),
        ];
    }
}
