<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'sudo@ecomuseoabangares.online',
            'password' => Hash::make('12345678'),
            'rol' => 1,
        ]);

        User::create([
            'name' => 'Supervidor',
            'email' => 'supervisor@ecomuseoabangares.online',
            'password' => Hash::make('12345678'),
            'rol' => 2,
        ]);

        if (config('app.env') != 'production') {
            factory(User::class, 50)->create();           
        }
    }
}
