<?php

use Illuminate\Database\Seeder;
use App\voluntary;

class VoluntarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(voluntary::class, 100)->create();
    }
}
