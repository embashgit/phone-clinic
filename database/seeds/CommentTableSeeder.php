<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
class CommentTableSeeder extends Seeder
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

      	$solution = factory(App\Models\Solution::class)->create(
       	['problem_id' => $problem->id]);

      	factory(App\Models\Comment::class)->create(
       	['solution_id' => $solution->id]);
    }
}
