<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\RoleTranslation;
use App\Models\Language;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'slug' => 'admin',
                'translations' => [
                    [
                        'locale' => 'en',
                        'name' => 'Admin',
                    ],
                    [
                        'locale' => 'ru',
                        'name' => 'Администратор',
                    ],
                    [
                        'locale' => 'kz',
                        'name' => 'Администратор',
                    ],
                ]
            ],
            [
                'slug' => 'moderator',
                'translations' => [
                    [
                        'locale' => 'en',
                        'name' => 'Moderator',
                    ],
                    [
                        'locale' => 'ru',
                        'name' => 'Модератор',
                    ],
                    [
                        'locale' => 'kz',
                        'name' => 'Модератор',
                    ],
                ]
            ],
            [
                'slug' => 'user',
                'translations' => [
                    [
                        'locale' => 'en',
                        'name' => 'User',
                    ],
                    [
                        'locale' => 'ru',
                        'name' => 'Пользователь',
                    ],
                    [
                        'locale' => 'kz',
                        'name' => 'Қолданушы',
                    ],
                ]
            ],
        ];

        foreach ($roles as $role) {
            $createdRole = Role::create([
                'slug' => $role['slug'],
            ]);

            if ($createdRole) {
                foreach ($role['translations'] as $translation) {
                    $createdRole->translations()->create([
                        'language_id' => Language::where('code', $translation['locale'])->first()->id,
                        'name' => $translation['name'],
                    ]);
                }
            }
        }
    }
}
