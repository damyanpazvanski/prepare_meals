<?php

namespace App\Console\Commands;

use App\Category;
use App\Eatable;
use App\Translation;
use Illuminate\Console\Command;

class AddEatables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:eatables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $eatables = [
        'meats' => [
            [
                'key' => 'beef',
                'en' => 'Beef',
                'bg' => 'Говеждо'
            ],
            [
                'key' => 'fish',
                'en' => 'Fish',
                'bg' => 'Риба'
            ],
            [
                'key' => 'chicken',
                'en' => 'Chicken',
                'bg' => 'Пиле'
            ],
            [
                'key' => 'pork',
                'en' => 'Pork',
                'bg' => 'Свинско'
            ],
            [
                'key' => 'turkey',
                'en' => 'Turkey',
                'bg' => 'Пуешко'
            ]
        ],
        'vegetables' => [
            [
                'key' => 'avocado',
                'en' => 'Avocado',
                'bg' => 'Авокадо'
            ],
            [
                'key' => 'potatoes',
                'en' => 'Potatoes',
                'bg' => 'Картофи'
            ],
            [
                'key' => 'green_beans',
                'en' => 'Green Beans',
                'bg' => 'Зелен фасул'
            ],
            [
                'key' => 'rise',
                'en' => 'Rise',
                'bg' => 'Ориз'
            ],
            [
                'key' => 'olives',
                'en' => 'Olives',
                'bg' => 'Маслини'
            ],
            [
                'key' => 'oats',
                'en' => 'Oats',
                'bg' => 'Овесени ядки'
            ],
            [
                'key' => 'sweet_potatoes',
                'en' => 'Sweet Potatoes',
                'bg' => 'Сладък картоф'
            ]
        ],
        'fruits' => [
            [
                'key' => 'orange',
                'en' => 'Orange',
                'bg' => 'Портокал'
            ],
            [
                'key' => 'pumpkin',
                'en' => 'Pumpkin',
                'bg' => 'Тиква'
            ],
            [
                'key' => 'forest_fruits',
                'en' => 'Forest Fruits',
                'bg' => 'Горски плодове'
            ],
            [
                'key' => 'apple',
                'en' => 'Apple',
                'bg' => 'Ябълка'
            ],
            [
                'key' => 'banana',
                'en' => 'Banana',
                'bg' => 'Банан'
            ],
            [
                'key' => 'grapefruit',
                'en' => 'Grapefruit',
                'bg' => 'Грейпфрут'
            ],
            [
                'key' => 'melon',
                'en' => 'Melon',
                'bg' => 'Пъпеш'
            ]
        ],
        'products' => [
            [
                'key' => 'eggs',
                'en' => 'Eggs',
                'bg' => 'Яйца'
            ],
            [
                'key' => 'mushrooms',
                'en' => 'Mushrooms',
                'bg' => 'Гъби'
            ],
            [
                'key' => 'nuts',
                'en' => 'Nuts',
                'bg' => 'Ядки'
            ],
            [
                'key' => 'yogurt',
                'en' => 'Yogurt',
                'bg' => 'Йогурт/Кисело мляко'
            ],
            [
                'key' => 'soy_milk',
                'en' => 'Soy Milk',
                'bg' => 'Соево мляко'
            ],
            [
                'key' => 'peanut_butter',
                'en' => 'Peanut Butter',
                'bg' => 'Фъстъчено масло'
            ],
            [
                'key' => 'cheese',
                'en' => 'Cheese',
                'bg' => 'Кашкавал'
            ],
            [
                'key' => 'cottage_cheese',
                'en' => 'Cottage Cheese',
                'bg' => 'Извара'
            ]
        ]
    ];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('------------------------- START ADDING -------------------------');

        if (Eatable::count()) {
            $this->info('------------------------- FINISHED -------------------------');
            return;
        }

        foreach ($this->eatables as $category => $eatables) {
            $categoryModel = Category::where('name', $category)->first();

            foreach ($eatables as $translation) {
                $eatable = new Eatable();
                $translation = Translation::create($translation);

                $eatable->category()->associate($categoryModel);
                $eatable->translation()->associate($translation);

                $eatable->save();
            }
        }

        $this->info('------------------------- FINISHED -------------------------');
    }
}
