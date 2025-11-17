<?php

namespace App\Console\Commands;

use App\Models\Article;
use Faker\Factory;
use Illuminate\Console\Command;

class GenerateArticles extends Command
{
    protected $signature = 'generate:articles';
    protected $description = 'Generate 5 fake articles';



    public function handle()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $article = new Article();
            $article->name = $faker->sentence(3);
            $article->body = $faker->text(60);
            $article->save();
        }

        $this->info('Done!');
    }
}
