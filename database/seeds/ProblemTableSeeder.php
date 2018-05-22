<?php

use Illuminate\Database\Seeder;
use App\Models\Problem;

class ProblemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $phone = factory(App\Models\Phone::class)->create();
      	
      	$model = factory(App\Models\Model::class)
       ->create(['phone_id' => $phone->id]);
       
       factory(App\Models\Problem::class, 4)->create(
       	['model_id' => $model->id]);
    }
}
