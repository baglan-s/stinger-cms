<?php

namespace App\Filament\Resources\SpecificationResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use App\Models\Language;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Catalog\SpecificationValue;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;
use Illuminate\Support\Str;
use Livewire\Component as Livewire;

class ValuesRelationManager extends RelationManager
{
    protected static string $relationship = 'values';

    public function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $tabs = [];

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.name')
                        ->label('Name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.slug')
                        ->label('Slug')
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.description')
                        ->label('Description')
                        ->maxLength(255),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Forms\Components\Toggle::make('active')
                    ->required(),
                Forms\Components\TextInput::make('sort')
                    ->required()
                    ->numeric()
                    ->default(0),
                Tabs::make('translations')
                    ->label('Translations')
                    ->tabs($tabs)
                    ->columnSpan(2),
            ])->columns(2);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name')
                    ->state(fn (SpecificationValue $value) => $value->translation()?->name)
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('translations', function (Builder $query) use ($search) {
                            $query->whereRaw("lower(name) LIKE '%" . mb_strtolower($search) . "%'");
                        });
                    }),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->using(function (array $data, string $model): Model {
                        $record = $this->getOwnerRecord()
                            ->values()
                            ->create([
                                'sort' => $data['sort'],
                                'active' => $data['active'],
                            ]);

                        foreach ($data['translations'] as $translation) {
                            $record->translations()->create([
                                'name' => $translation['name'],
                                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
                                'description' => $translation['description'],
                                'language_id' => $translation['language_id'],
                            ]);
                        }

                        return $record;
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->mutateRecordDataUsing(function (array $data): array {
                        $record = SpecificationValue::find($data['id']);
                        $languages = Language::where('active', true)->get();

                        foreach ($languages as $language) {
                            $translation = $record->translations->where('language_id', $language->id)->first();
                            $data['translations'][$language->code] = [
                                'name' => $translation->name,
                                'slug' => $translation->slug ?? null,
                                'description' => $translation->description ?? null,
                                'language_id' => $language->id,
                            ];
                        }
                
                        return $data;
                    })
                    ->using(function (Model $record, array $data): Model {
                        $record->update([
                            'sort' => $data['sort'],
                            'active' => $data['active'],
                        ]);

                        foreach ($data['translations'] as $translation) {
                            $recordTranslation = $record->translations()->firstOrCreate([
                                'language_id' => $translation['language_id'],
                            ]);
                            $recordTranslation->update([
                                'name' => $translation['name'],
                                'slug' => $translation['slug'] ?? Str::slug($translation['name']),
                                'description' => $translation['description'],
                            ]);
                        }
                
                        return $record;
                    }),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
