<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use App\Models\Language;
use App\Models\Catalog\ProductFile;

class FilesRelationManager extends RelationManager
{
    protected static string $relationship = 'files';

    public function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $tabs = [];

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.name')
                        ->label(__('admin.crud.create.name'))
                        ->required()
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.description')
                        ->label(__('admin.crud.create.description'))
                        ->maxLength(255),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->label(__('admin.crud.create.language_id'))
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Tabs::make('translations')
                    ->label(__('admin.crud.create.translations'))
                    ->tabs($tabs),
                FileUpload::make('path')
                    ->directory('files/products')
                    ->afterStateUpdated(function (callable $set, $state) {
                        $pathParts = explode('.', $state?->getRealPath());
                        $byteSize = $state?->getSize() ?? 0;

                        $set('mime_type', $pathParts[count($pathParts) - 1] ?? 'file');
                        $set('size', number_format(($byteSize / 1024) / 1024, 2, '.', ''));
                    })
                    ->required(),
                Hidden::make('mime_type'),
                Hidden::make('size'),
            ])->columns(1);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('admin.crud.create.name'))
                    ->state(fn (ProductFile $value) => $value->translation()?->name)
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('translations', function (Builder $query) use ($search) {
                            $query->whereRaw("lower(name) LIKE '%" . mb_strtolower($search) . "%'");
                        });
                    }),
                Tables\Columns\TextColumn::make('mime_type')
                    ->label(__('admin.crud.create.files.mime_type')),
                Tables\Columns\TextColumn::make('size')
                    ->label(__('admin.crud.create.files.size')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin.crud.create.created_at'))
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('admin.crud.create.updated_at'))
                    ->dateTime()
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->using(function (array $data, string $model): Model {
                        $record = $model::create([
                            'path' => $data['path'],
                            'mime_type' => $data['mime_type'],
                            'size' => $data['size'],
                            'product_id' => $this->getOwnerRecord()->id,
                        ]);

                        foreach ($data['translations'] as $translation) {
                            $record->translations()->create([
                                'name' => $translation['name'],
                                'description' => $translation['description'],
                                'language_id' => $translation['language_id'],
                            ]);
                        }

                        return $record;
                    })
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->mutateRecordDataUsing(function (array $data): array {
                        $record = ProductFile::find($data['id']);
                        $languages = Language::where('active', true)->get();

                        foreach ($languages as $language) {
                            $translation = $record->translations->where('language_id', $language->id)->first();
                            $data['translations'][$language->code] = [
                                'name' => $translation->name,
                                'description' => $translation->description ?? null,
                                'language_id' => $language->id,
                            ];
                        }
                
                        return $data;
                    })
                    ->using(function (Model $record, array $data): Model {
                        $record->update([
                            'size' => $data['size'] ?? null,
                            'mime_type' => $data['mime_type'] ?? null,
                            'path' => $data['path'],
                        ]);

                        foreach ($data['translations'] as $translation) {
                            $recordTranslation = $record->translations()->firstOrCreate([
                                'language_id' => $translation['language_id'],
                            ]);
                            $recordTranslation->update([
                                'name' => $translation['name'],
                                'description' => $translation['description'] ?? null,
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
    
    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('admin.crud.create.files.files');
    }
}
