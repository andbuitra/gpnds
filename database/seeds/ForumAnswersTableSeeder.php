<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ForumAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for($i = 0; $i<50; $i++){
          $user_id = rand(1, 25);
          $answer = $faker->text(240);
          $forum_question_id = rand(1, 10);

          DB::table('forum_answers')->insert(array(
              'user_id' => $user_id,
              'answer'  => $answer,
              'forum_question_id'  => $forum_question_id
          ));
      }
    }
}
