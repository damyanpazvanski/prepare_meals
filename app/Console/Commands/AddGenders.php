<?php

namespace App\Console\Commands;

use App\Gender;
use App\Translation;
use Illuminate\Console\Command;

class AddGenders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:genders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $genders = [
        'man' => [
            'translation' => [
                'key' => 'man',
                'bg' => 'мъж',
                'en' => 'Man'
            ]
        ],
        'woman' => [
            'translation' => [
                'key' => 'woman',
                'bg' => 'Жена',
                'en' => 'Woman'
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

        if (Gender::count()) {
            $this->info('------------------------- FINISHED -------------------------');
            return;
        }

        foreach ($this->genders as $key => $gender) {
            $newGender = new Gender();

            $newGender->translation()->associate(Translation::create($gender['translation']));
            $newGender->save();
        }

        $this->info('------------------------- FINISHED -------------------------');
    }
}
