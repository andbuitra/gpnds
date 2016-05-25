<?php

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Eloquent::unguard();
      $this->call('PostTableSeeder');
      $this->command->info('Post creado');
    }
}

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();
        $userTest = User::create(array(
          'nombre' => 'Andrés',
          'email' => 'and.buitra@gmail.com',
          'password' => 'asd123asd123'
        ));

        $this->command->info('Usuario creado.');
    }
}
