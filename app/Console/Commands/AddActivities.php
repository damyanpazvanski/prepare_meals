<?php

namespace App\Console\Commands;

use App\Activity;
use App\Translation;
use Illuminate\Console\Command;

class AddActivities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:activities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $activities = [
        'almost_nothing' => [
            'calories' => -200,
            'translation' => [
                'key' => 'almost_nothing',
                'bg' => 'Почти никаква',
                'en' => 'Almost Nothing'
            ]
        ],
        'often_walk_around' => [
            'calories' => 0,
            'translation' => [
                'key' => 'often_walk_around',
                'bg' => 'Често се разхождам',
                'en' => 'Often Walk Around'
            ]
        ],
        'less_workout' => [
            'calories' => 100,
            'translation' => [
                'key' => 'less_workout',
                'bg' => 'Тренирам 1-2 пъти седмично',
                'en' => 'I workout 1-2 times per week'
            ]
        ],
        'mid_workout' => [
            'calories' => 200,
            'translation' => [
                'key' => 'mid_workout',
                'bg' => 'Тренирам 3-5 пъти седмично',
                'en' => 'I workout 3-5 times per week'
            ]
        ],
        'lot_workout' => [
            'calories' => 300,
            'translation' => [
                'key' => 'lot_workout',
                'bg' => 'Тренирам 5-7 пъти седмично',
                'en' => 'I workout 5-7 times per week'
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

        if (Activity::count()) {
            $this->info('------------------------- FINISHED -------------------------');
            return;
        }

        foreach ($this->activities as $key => $activity) {
            $newActivity = new Activity([
                'calories' => $activity['calories']
            ]);

            $newActivity->translation()->associate(Translation::create($activity['translation']));
            $newActivity->save();
        }

        $this->info('------------------------- FINISHED -------------------------');
    }
}
