<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PhoneTableSeeder::class);
        $this->call(ModelTableSeeder::class);
        $this->call(ProblemTableSeeder::class);
        $this->call(SolutionTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(LaratrustSeeder::class);
    }
}
