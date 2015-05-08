<?php

// NoticesTableSeeder.php    
class UsersTableSeeder extends \Illuminate\Database\Seeder {

    public function run()
    {
        DB::table('users')->truncate();

        $users = [
            ['name' => 'Administrador', 'email' => 'admin@mconsult.com.br', 'password' => '$2y$10$OnvEf.uvrkTFAs9ov8A3GeO/h8paA5HKXahB5JogUKCesyixGHjFi', 'created_at' => new DateTime],
            ['name' => 'Deykson Robert', 'email' => 'dr@mconsult.com.br', 'password' => '$2y$10$OnvEf.uvrkTFAs9ov8A3GeO/h8paA5HKXahB5JogUKCesyixGHjFi', 'created_at' => new DateTime],
            ['name' => 'Gustavo Pedrosa', 'email' => 'gb@mconsult.com.br', 'password' => '$2y$10$OnvEf.uvrkTFAs9ov8A3GeO/h8paA5HKXahB5JogUKCesyixGHjFi', 'created_at' => new DateTime],
        ];
        DB::table('users')->insert($users);
    }

}