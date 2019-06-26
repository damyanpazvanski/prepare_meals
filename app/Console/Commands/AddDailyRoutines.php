<?php

namespace App\Console\Commands;

use App\DailyRoutine;
use App\Translation;
use Illuminate\Console\Command;

class AddDailyRoutines extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:daily-routines';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $routines = [
        'at_the_office' => [
            'calories' => -200,
            'translation' => [
                'key' => 'at_the_office',
                'bg' => 'В офиса',
                'en' => 'At the office'
            ]
        ],
        'at_the_office_but_often_go_out' => [
            'calories' => 0,
            'translation' => [
                'key' => 'at_the_office_but_often_go_out',
                'bg' => 'В офиса, но често излизам да се разхождам',
                'en' => 'At the office but I ofter go out'
            ]
        ],
        'walk_almost_whole_day' => [
            'calories' => 100,
            'translation' => [
                'key' => 'walk_almost_whole_day',
                'bg' => 'Почти цял ден съм на крак',
                'en' => 'I walk almost whole day'
            ]
        ],
        'physical_labor' => [
            'calories' => 200,
            'translation' => [
                'key' => 'physical_labor',
                'bg' => 'Тежък физически труд',
                'en' => 'Physical labor'
            ]
        ],
        'almost_whole_day_at_home' => [
            'calories' => 300,
            'translation' => [
                'key' => 'almost_whole_day_at_home',
                'bg' => 'Почти цял ден си стоя вкъщи',
                'en' => 'I stay almost whole day at home'
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

        if (DailyRoutine::count()) {
            $this->info('------------------------- FINISHED -------------------------');
            return;
        }

        foreach ($this->routines as $key => $routine) {
            $newDailyRoutine = new DailyRoutine([
                'calories' => $routine['calories']
            ]);

            $newDailyRoutine->translation()->associate(Translation::create($routine['translation']));
            $newDailyRoutine->save();
        }

        $this->info('------------------------- FINISHED -------------------------');
    }
}
