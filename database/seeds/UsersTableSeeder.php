<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role; //para utilizar shinobi permissions

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create();

        Role::create([
        	'name' 		=> 'Admin',
        	'slug' 		=> 'admin',
        	'special' 	=> 'all-access'
        ]);
    }
}
