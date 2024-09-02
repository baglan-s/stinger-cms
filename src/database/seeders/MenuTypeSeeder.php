<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuType;

class MenuTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Главное меню',
                'code' => 'header_menu',
            ],
            [
                'name' => 'Футер меню',
                'code' => 'footer_menu',
            ]
        ];

        foreach ($data as $item) {
            MenuType::create($item);
        }
    }
}
