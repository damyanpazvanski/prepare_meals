<?php

namespace App\Console\Commands;

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

    protected $eatables = [];

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

        $this->info('------------------------- FINISHED -------------------------');
    }
}
