<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class LikesTableSeeder extends Seeder
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
          $post_id = rand(1, 25);

          DB::table('likes')->insert(array(
              'user_id' => $user_id,
              'post_id'  => $post_id              
          ));
      }
    }
}
