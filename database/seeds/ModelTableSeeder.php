<?php

use Illuminate\Database\Seeder;
use App\Models\Model;

class ModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $phone = factory(App\Models\Phone::class)->create();
       factory(App\Models\Model::class, 5)
       ->create(['phone_id' => $phone->id]);
    }
}
