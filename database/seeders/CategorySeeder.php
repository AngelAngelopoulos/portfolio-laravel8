<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    private $category_names = [
        'Web Development', 'Artificial Intelligence', 'Machine Learning',
        'Software Engineering', 'UX/UI', 'Graphic Design', 'Cibersecurity',
        'Digital Marketing'
        ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->category_names as $name)
        {
            $this->createCategory($name);
        }
    }

    private function createCategory($name) {
        DB::table('categories')->insert([
            'name' => $name,
            'link' => strtolower( str_replace(' ', '-', $name) ),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
