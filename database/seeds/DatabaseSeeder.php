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
        $this->call(PersonasTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BancosTableSeeder::class);
        $this->call(MunicipiosTableSeeder::class);
        $this->call(ParroquiasTableSeeder::class);
    }
}
