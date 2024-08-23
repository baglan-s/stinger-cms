<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoleResource\Pages;
use App\Filament\Resources\RoleResource\RelationManagers;
use App\Models\Role;
use App\Repositories\RoleRepository;
use App\Models\Language;
use App\Models\Permission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Hidden;


class RoleResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'System';

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.system.roles');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $permissions = Permission::all();
        $tabs = [];
        $options = [];

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.name')
                        ->label('Name')
                        ->required()
                        ->maxLength(255),
                    Hidden::make('translations.' . $language->code. '.language_id')
                        ->default($language->id),
                ]);
        }

        foreach ($permissions as $permission) {
            $options[$permission->id] = $permission->name;
        }

        $schema = [
            TextInput::make('slug')
                ->required()
                ->maxLength(255),

            Tabs::make('translations')
                ->label('Translations')
                ->tabs($tabs),
            Section::make('permissions')
                ->label('Permissions')
                ->description('Choose role permissions')
                ->schema([
                    CheckboxList::make('permissions')
                        ->relationship(name: 'permissions', titleAttribute: 'name')
                        ->options($options)
                        ->bulkToggleable()
                        ->columns(4),
                ])
        ];

        return $form
            ->schema($schema)
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID'),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
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
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRole::route('/create'),
            'edit' => Pages\EditRole::route('/{record}/edit'),
        ];
    }
}
