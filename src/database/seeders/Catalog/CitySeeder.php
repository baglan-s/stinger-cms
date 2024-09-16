<?php

namespace Database\Seeders\Catalog;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog\City;
use Illuminate\Support\Str;
use App\Models\Language;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                'kaspi_index' => '353220100',
                'active' => true,
                'sort' => 1,
                'translations' => [
                    'ru' => [
                        'name' => 'Абай',
                        'slug' => Str::slug('Абай'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '113220100',
                'active' => true,
                'sort' => 2,
                'translations' => [
                    'ru' => [
                        'name' => 'Акколь',
                        'slug' => Str::slug('Акколь'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '273620100',
                'active' => true,
                'sort' => 3,
                'translations' => [
                    'ru' => [
                        'name' => 'Аксай',
                        'slug' => Str::slug('Аксай'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '551610000',
                'active' => true,
                'sort' => 4,
                'translations' => [
                    'ru' => [
                        'name' => 'Аксу',
                        'slug' => Str::slug('Аксу'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '471010000',
                'active' => true,
                'sort' => 5,
                'translations' => [
                    'ru' => [
                        'name' => 'Актау',
                        'slug' => Str::slug('Актау'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '151010000',
                'active' => true,
                'sort' => 6,
                'translations' => [
                    'ru' => [
                        'name' => 'Актобе',
                        'slug' => Str::slug('Актобе'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '750000000',
                'active' => true,
                'sort' => 7,
                'translations' => [
                    'ru' => [
                        'name' => 'Алматы',
                        'slug' => Str::slug('Алматы'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '634820100',
                'active' => true,
                'sort' => 8,
                'translations' => [
                    'ru' => [
                        'name' => 'Алтай',
                        'slug' => Str::slug('Алтай'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '433220100',
                'active' => true,
                'sort' => 9,
                'translations' => [
                    'ru' => [
                        'name' => 'Аральск',
                        'slug' => Str::slug('Аральск'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '391610000',
                'active' => true,
                'sort' => 10,
                'translations' => [
                    'ru' => [
                        'name' => 'Аркалык',
                        'slug' => Str::slug('Аркалык'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '511610000',
                'active' => true,
                'sort' => 11,
                'translations' => [
                    'ru' => [
                        'name' => 'Арысь',
                        'slug' => Str::slug('Арысь'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '710000000',
                'active' => true,
                'sort' => 12,
                'translations' => [
                    'ru' => [
                        'name' => 'Астана',
                        'slug' => Str::slug('Астана'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '231010000',
                'active' => true,
                'sort' => 13,
                'translations' => [
                    'ru' => [
                        'name' => 'Атырау',
                        'slug' => Str::slug('Атырау'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '633420100',
                'active' => true,
                'sort' => 14,
                'translations' => [
                    'ru' => [
                        'name' => 'Аягоз',
                        'slug' => Str::slug('Аягоз'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '431910000',
                'active' => true,
                'sort' => 15,
                'translations' => [
                    'ru' => [
                        'name' => 'Байконыр',
                        'slug' => Str::slug('Байконыр'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '351610000',
                'active' => true,
                'sort' => 16,
                'translations' => [
                    'ru' => [
                        'name' => 'Балхаш',
                        'slug' => Str::slug('Балхаш'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '473630100',
                'active' => true,
                'sort' => 17,
                'translations' => [
                    'ru' => [
                        'name' => 'Бейнеу',
                        'slug' => Str::slug('Бейнеу'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '194020100',
                'active' => true,
                'sort' => 18,
                'translations' => [
                    'ru' => [
                        'name' => 'Есик',
                        'slug' => Str::slug('Есик'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '471810000',
                'active' => true,
                'sort' => 19,
                'translations' => [
                    'ru' => [
                        'name' => 'Жанаозен',
                        'slug' => Str::slug('Жанаозен'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '195620100',
                'active' => true,
                'sort' => 20,
                'translations' => [
                    'ru' => [
                        'name' => 'Жаркент',
                        'slug' => Str::slug('Жаркент'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '351810000',
                'active' => true,
                'sort' => 21,
                'translations' => [
                    'ru' => [
                        'name' => 'Жезказган',
                        'slug' => Str::slug('Жезказган'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '514420100',
                'active' => true,
                'sort' => 22,
                'translations' => [
                    'ru' => [
                        'name' => 'Жетысай',
                        'slug' => Str::slug('Жетысай'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '394420100',
                'active' => true,
                'sort' => 23,
                'translations' => [
                    'ru' => [
                        'name' => 'Житикара',
                        'slug' => Str::slug('Житикара'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '634620100',
                'active' => true,
                'sort' => 24,
                'translations' => [
                    'ru' => [
                        'name' => 'Зайсан',
                        'slug' => Str::slug('Зайсан'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '154820100',
                'active' => true,
                'sort' => 25,
                'translations' => [
                    'ru' => [
                        'name' => 'Кандыагаш',
                        'slug' => Str::slug('Кандыагаш'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '351010000',
                'active' => true,
                'sort' => 26,
                'translations' => [
                    'ru' => [
                        'name' => 'Караганда',
                        'slug' => Str::slug('Караганда'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '316220100',
                'active' => true,
                'sort' => 27,
                'translations' => [
                    'ru' => [
                        'name' => 'Каратау',
                        'slug' => Str::slug('Каратау'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '195220100',
                'active' => true,
                'sort' => 28,
                'translations' => [
                    'ru' => [
                        'name' => 'Каскелен',
                        'slug' => Str::slug('Каскелен'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '612010000',
                'active' => true,
                'sort' => 29,
                'translations' => [
                    'ru' => [
                        'name' => 'Кентау',
                        'slug' => Str::slug('Кентау'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '111010000',
                'active' => true,
                'sort' => 30,
                'translations' => [
                    'ru' => [
                        'name' => 'Кокшетау',
                        'slug' => Str::slug('Кокшетау'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '191610000',
                'active' => true,
                'sort' => 31,
                'translations' => [
                    'ru' => [
                        'name' => 'Конаев',
                        'slug' => Str::slug('Конаев'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '391010000',
                'active' => true,
                'sort' => 32,
                'translations' => [
                    'ru' => [
                        'name' => 'Костанай',
                        'slug' => Str::slug('Костанай'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '233620100',
                'active' => true,
                'sort' => 33,
                'translations' => [
                    'ru' => [
                        'name' => 'Кульсары',
                        'slug' => Str::slug('Кульсары'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '632210000',
                'active' => true,
                'sort' => 34,
                'translations' => [
                    'ru' => [
                        'name' => 'Курчатов',
                        'slug' => Str::slug('Курчатов'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '431010000',
                'active' => true,
                'sort' => 35,
                'translations' => [
                    'ru' => [
                        'name' => 'Кызылорда',
                        'slug' => Str::slug('Кызылорда'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '515820100',
                'active' => true,
                'sort' => 36,
                'translations' => [
                    'ru' => [
                        'name' => 'Ленгер',
                        'slug' => Str::slug('Ленгер'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '392010000',
                'active' => true,
                'sort' => 37,
                'translations' => [
                    'ru' => [
                        'name' => 'Лисаковск',
                        'slug' => Str::slug('Лисаковск'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '551010000',
                'active' => true,
                'sort' => 38,
                'translations' => [
                    'ru' => [
                        'name' => 'Павлодар',
                        'slug' => Str::slug('Павлодар'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '591010000',
                'active' => true,
                'sort' => 39,
                'translations' => [
                    'ru' => [
                        'name' => 'Петропавловск',
                        'slug' => Str::slug('Петропавловск'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '156420100',
                'active' => true,
                'sort' => 40,
                'translations' => [
                    'ru' => [
                        'name' => 'Риддер',
                        'slug' => Str::slug('Риддер'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '392410000',
                'active' => true,
                'sort' => 41,
                'translations' => [
                    'ru' => [
                        'name' => 'Рудный',
                        'slug' => Str::slug('Рудный'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '352210000',
                'active' => true,
                'sort' => 42,
                'translations' => [
                    'ru' => [
                        'name' => 'Сарань',
                        'slug' => Str::slug('Сарань'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '515420100',
                'active' => true,
                'sort' => 43,
                'translations' => [
                    'ru' => [
                        'name' => 'Сарыагаш',
                        'slug' => Str::slug('Сарыагаш'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '352310000',
                'active' => true,
                'sort' => 44,
                'translations' => [
                    'ru' => [
                        'name' => 'Сатпаев',
                        'slug' => Str::slug('Сатпаев'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '632810000',
                'active' => true,
                'sort' => 45,
                'translations' => [
                    'ru' => [
                        'name' => 'Семей',
                        'slug' => Str::slug('Семей'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '111810000',
                'active' => true,
                'sort' => 46,
                'translations' => [
                    'ru' => [
                        'name' => 'Степногорск',
                        'slug' => Str::slug('Степногорск'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '196220100',
                'active' => true,
                'sort' => 47,
                'translations' => [
                    'ru' => [
                        'name' => 'Талгар',
                        'slug' => Str::slug('Талгар'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '191010000',
                'active' => true,
                'sort' => 48,
                'translations' => [
                    'ru' => [
                        'name' => 'Талдыкорган',
                        'slug' => Str::slug('Талдыкорган'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '311010000',
                'active' => true,
                'sort' => 49,
                'translations' => [
                    'ru' => [
                        'name' => 'Тараз',
                        'slug' => Str::slug('Тараз'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '192610000',
                'active' => true,
                'sort' => 50,
                'translations' => [
                    'ru' => [
                        'name' => 'Текели',
                        'slug' => Str::slug('Текели'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '352410000',
                'active' => true,
                'sort' => 51,
                'translations' => [
                    'ru' => [
                        'name' => 'Темиртау',
                        'slug' => Str::slug('Темиртау'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '512610000',
                'active' => true,
                'sort' => 52,
                'translations' => [
                    'ru' => [
                        'name' => 'Туркестан',
                        'slug' => Str::slug('Туркестан'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '271010000',
                'active' => true,
                'sort' => 53,
                'translations' => [
                    'ru' => [
                        'name' => 'Уральск',
                        'slug' => Str::slug('Уральск'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '631010000',
                'active' => true,
                'sort' => 54,
                'translations' => [
                    'ru' => [
                        'name' => 'Усть-Каменогорск',
                        'slug' => Str::slug('Усть-Каменогорск'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '195020100',
                'active' => true,
                'sort' => 55,
                'translations' => [
                    'ru' => [
                        'name' => 'Уштобе',
                        'slug' => Str::slug('Уштобе'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '475220100',
                'active' => true,
                'sort' => 56,
                'translations' => [
                    'ru' => [
                        'name' => 'Форт-Шевченко',
                        'slug' => Str::slug('Форт-Шевченко'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '156020100',
                'active' => true,
                'sort' => 57,
                'translations' => [
                    'ru' => [
                        'name' => 'Хромтау',
                        'slug' => Str::slug('Хромтау'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '616420100',
                'active' => true,
                'sort' => 58,
                'translations' => [
                    'ru' => [
                        'name' => 'Шардара',
                        'slug' => Str::slug('Шардара'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '352810000',
                'active' => true,
                'sort' => 59,
                'translations' => [
                    'ru' => [
                        'name' => 'Шахтинск',
                        'slug' => Str::slug('Шахтинск'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '636820100',
                'active' => true,
                'sort' => 60,
                'translations' => [
                    'ru' => [
                        'name' => 'Шемонаиха',
                        'slug' => Str::slug('Шемонаиха'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '117055900',
                'active' => true,
                'sort' => 61,
                'translations' => [
                    'ru' => [
                        'name' => 'Шиели',
                        'slug' => Str::slug('Шиели'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '316621100',
                'active' => true,
                'sort' => 62,
                'translations' => [
                    'ru' => [
                        'name' => 'Шу',
                        'slug' => Str::slug('Шу'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '511010000',
                'active' => true,
                'sort' => 63,
                'translations' => [
                    'ru' => [
                        'name' => 'Шымкент',
                        'slug' => Str::slug('Шымкент'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '117020100',
                'active' => true,
                'sort' => 64,
                'translations' => [
                    'ru' => [
                        'name' => 'Щучинск',
                        'slug' => Str::slug('Щучинск'),
                    ]
                ]
            ],
            [
                'kaspi_index' => '552210000',
                'active' => true,
                'sort' => 65,
                'translations' => [
                    'ru' => [
                        'name' => 'Экибастуз',
                        'slug' => Str::slug('Экибастуз'),
                    ]
                ]
            ],
        ];

        $languages = Language::where('active', true)->get();

        foreach ($cities as $city) {
            $record = City::create([
                'kaspi_index' => $city['kaspi_index'],
                'active' => $city['active'],
                'sort' => $city['sort'],
            ]);

            foreach ($languages as $language) {
                $record->translations()->create([
                    'language_id' => $language->id,
                    'name' => $city['translations']['ru']['name'],
                    'slug' => $city['translations']['ru']['slug'],
                ]);
            }
        }
    }
}
