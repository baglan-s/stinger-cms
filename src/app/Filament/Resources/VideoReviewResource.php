<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoReviewResource\Pages;
use App\Filament\Resources\VideoReviewResource\RelationManagers;
use App\Models\VideoReview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use App\Models\Language;

class VideoReviewResource extends Resource
{
    protected static ?string $model = VideoReview::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.components.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.video-reviews');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.video-reviews');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.video-reviews.video-review');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $tabs = [];

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.title')
                        ->label(__('admin.crud.create.video-reviews.title'))
                        ->maxLength(255)
                        ->required(),
                    TextInput::make('translations.' . $language->code . '.description')
                        ->label(__('admin.crud.create.video-reviews.description'))
                        ->maxLength(255),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->label(__('admin.crud.create.language_id'))
                        ->default($language->id),
                ]);
        }
        
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label(__('admin.crud.create.image'))
                    ->image()
                    ->required()
                    ->directory('images/video-reviews/images'),
                Forms\Components\TextInput::make('link')
                    ->label(__('admin.crud.create.link'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->required(),
                Forms\Components\TextInput::make('sort')
                    ->required()
                    ->label(__('admin.crud.create.sort'))
                    ->numeric()
                    ->default(0),
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
                    ->label(__('admin.crud.create.id')),
                Tables\Columns\TextColumn::make('title')
                    ->state(fn (VideoReview $review) => $review->translation()?->title)
                    ->label(__('admin.crud.create.name'))
                    ->searchable(
                        query: function (Builder $query, $search) {
                            return $query->whereHas('translations', function (Builder $query) use ($search) {
                                $query->whereRaw("lower(title) LIKE '%" . mb_strtolower($search) . "%'");
                            });
                        }
                    ),
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('admin.crud.create.image'))
                    ->square(),
                Tables\Columns\IconColumn::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort')
                    ->label(__('admin.crud.create.sort'))
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
            'index' => Pages\ListVideoReviews::route('/'),
            'create' => Pages\CreateVideoReview::route('/create'),
            'edit' => Pages\EditVideoReview::route('/{record}/edit'),
        ];
    }
}
