<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for($i = 0; $i<3; $i++){
          $title = $faker->sentence;
          $body = $faker->text(3000);
          $description = $faker->text(140);
          $tags = $faker->name;
          $slug = Str::slug($title);
          $cover_image = $faker->url.'.jpg';
          DB::table('posts')->insert(array(
              'title' => $title,
              'body'  => $body,
              'slug'  => $slug,
              'user_id' => 1,
              'tags' => $tags,
              'description' => $description,
              'cover_image' => $cover_image
          ));
      }
    }
}