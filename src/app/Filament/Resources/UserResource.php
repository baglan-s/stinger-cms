<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use App\Models\Role;
use App\Models\Language;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Hidden;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.users');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.users');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.user');
    }

    public static function form(Form $form): Form
    {
        $roles = Role::all();
        $roleOptions = [];
        $currentLanguage = Language::where('code', 'ru')->first();
        
        foreach ($roles as $role) {
            $roleOptions[$role->id] = $role->translations
                ->where('language_id', $currentLanguage->id)
                ->first()
                ->name;
        }

        return $form
            ->schema([
                Hidden::make('form_type')
                    ->default($form->getOperation()),
                Forms\Components\TextInput::make('name')
                    ->label(__('admin.crud.create.name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label(__('admin.crud.create.email'))
                    ->email()
                    ->unique(table: User::class, ignoreRecord: true)
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->mask('+7(999)-999-99-99')
                    ->placeholder('+7(999)-999-99-99')
                    ->unique(table: User::class, ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('email_verified_at')
                    ->label(__('admin.crud.create.email_verfifed_at')),
                Forms\Components\TextInput::make('password')
                    ->label(__('admin.crud.create.password'))
                    ->password()
                    ->requiredIf('form_type', 'create')
                    ->revealable()
                    ->same('password_confirm')
                    ->maxLength(255),
                Forms\Components\TextInput::make('password_confirm')
                    ->label(__('admin.crud.create.password_confirm'))
                    ->password()
                    ->requiredIf('form_type', 'create')
                    ->same('password')
                    ->revealable()
                    ->maxLength(255),
                Forms\Components\Toggle::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->required(),

                Section::make('Roles')
                    ->description(__('admin.crud.create.choose_roles'))
                    ->label(__('admin.crud.create.roles'))
                    ->schema([
                        CheckboxList::make('roles')
                            ->label(__('admin.crud.create.roles'))
                            ->relationship(name: 'roles', titleAttribute: 'slug')
                            ->options($roleOptions)
                            ->bulkToggleable()
                            ->columns(4),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->label(__('admin.crud.create.id')),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('admin.crud.create.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('roles.slug')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
