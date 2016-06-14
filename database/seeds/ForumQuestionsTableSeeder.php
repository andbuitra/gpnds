<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ForumQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for($i = 0; $i<10; $i++){
          $title = $faker->sentence;
          $body = $faker->text(240);
          $tags = $faker->sentence;
          $slug = Str::slug($title);
          $user_id = rand(1, 25);

          DB::table('forum_questions')->insert(array(
              'title' => $title,
              'body'  => $body,
              'tags'  => $tags,
              'slug' => $slug,
              'user_id' => $user_id
          ));
      }
    }
}
