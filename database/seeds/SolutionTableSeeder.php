<?php

use Illuminate\Database\Seeder;
use App\Models\Solution;

class SolutionTableSeeder extends Seeder
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
       
       $problem = factory(App\Models\Problem::class)->create(
       	['model_id' => $model->id]);

       factory(App\Models\Solution::class, 6)->create(
       	['problem_id' => $problem->id]);
    }
}
