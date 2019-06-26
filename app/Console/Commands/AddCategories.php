<?php

namespace App\Console\Commands;

use App\Category;
use App\Translation;
use Illuminate\Console\Command;

class AddCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $categories = [
        'meats' => [
            'key' => 'meats',
            'bg' => 'Меса',
            'en' => 'Meats'
        ],
        'fruits' => [
            'key' => 'fruits',
            'bg' => 'Плодове',
            'en' => 'Fruits'
        ],
        'vegetables' => [
            'key' => 'vegetables',
            'bg' => 'Зеленчуци',
            'en' => 'Vegetables'
        ],
        'products' => [
            'key' => 'products',
            'bg' => 'Зеленчуци',
            'en' => 'Products'
        ],
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

        if (Category::count()) {
            $this->info('------------------------- FINISHED -------------------------');
            return;
        }

        foreach ($this->categories as $key => $category) {
            $newCategory = new Category([
                'name' => $key
            ]);

            $newCategory->translation()->associate(Translation::create($category));
            $newCategory->save();
        }

        $this->info('------------------------- FINISHED -------------------------');
    }
}
