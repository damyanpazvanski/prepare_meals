<?php

namespace App\Console\Commands;

use App\Meal;
use App\Translation;
use Illuminate\Console\Command;

class AddMeals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:meals';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $meals = [
        'one_time' => [
            'count' => 1,
            'translation' => [
                'key' => 'one_time',
                'bg' => '1 път',
                'en' => '1 time'
            ]
        ],
        'two_times' => [
            'count' => 2,
            'translation' => [
                'key' => 'two_times',
                'bg' => '2 пъти',
                'en' => '2 times'
            ]
        ],
        'three_times' => [
            'count' => 3,
            'translation' => [
                'key' => 'three_times',
                'bg' => '3 пъти',
                'en' => '3 times'
            ]
        ],
        'four_times' => [
            'count' => 4,
            'translation' => [
                'key' => 'four_times',
                'bg' => '4 пъти',
                'en' => '4 times'
            ]
        ],
        'five_times' => [
            'count' => 5,
            'translation' => [
                'key' => 'five_times',
                'bg' => '5 пъти',
                'en' => '5 times'
            ]
        ],
        'every_day_different_times' => [
            'count' => 4,
            'translation' => [
                'key' => 'every_day_different_times',
                'bg' => 'Всеки ден различен брой',
                'en' => 'Every day the count is different'
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

        if (Meal::count()) {
            $this->info('------------------------- FINISHED -------------------------');
            return;
        }

        foreach ($this->meals as $key => $meal) {
            $newMeal = new Meal([
                'count' => $meal['count']
            ]);

            $newMeal->translation()->associate(Translation::create($meal['translation']));
            $newMeal->save();
        }

        $this->info('------------------------- FINISHED -------------------------');
    }
}
