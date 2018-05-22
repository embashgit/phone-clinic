<?php

use Illuminate\Database\Seeder;
use App\Models\Phone;
class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Models\Phone::class, 5)->create();
    }
}
