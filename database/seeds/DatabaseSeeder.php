<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seeds[] = UserSeeder::class;

        if (config('app.env') != 'production') {
            $seeds[] = VoluntarySeeder::class;            
        }

        $this->call($seeds);        
    }
}
