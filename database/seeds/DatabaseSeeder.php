<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        factory('App\User')->create([
            'name' => "Gidenilson Alves Santiago",
            'email' => "gidenilson@gmail.com",
            'password' => bcrypt("123123"),
            'remember_token' => str_random(10),
        ]);

        $this->call('PostsTableSeeder');
        $this->call('TagTableSeeder');

        Model::reguard();
    }

}
