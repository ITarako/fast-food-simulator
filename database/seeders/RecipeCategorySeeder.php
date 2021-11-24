<?php

namespace Database\Seeders;

use App\Models\RecipeCategory;
use Illuminate\Database\Seeder;

/**
 * Class RecipeCategorySeeder
 * @package Database\Seeders
 */
class RecipeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RecipeCategory::factory()
            ->count(10)
            ->create();
    }
}
