<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for($i = 0; $i<25; $i++){
          $name = $faker->name;
          $email = $faker->email;
          $password = bcrypt(str_random(20));
          $user_image_uri = "/assets/img/default_profile_picture.jpg";
          $confirmed = 1;
          $confirmation_code = str_random(55);

          DB::table('users')->insert(array(
              'name' => $name,
              'email'  => $email,
              'password'  => $password,
              'user_image_uri' => $user_image_uri,
              'confirmed' => $confirmed,
              'confirmation_code' => $confirmation_code
          ));
      }
    }
}
