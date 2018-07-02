<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission; //para utilizar shinobi permisions

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Permisos de usuarios
        Permission::create([
        	'name' 			=> 'Navegar usuarios',
        	'slug'			=> 'users.index',
        	'description' 	=> 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Ver detalle de usuario',
        	'slug'			=> 'users.show',
        	'description' 	=> 'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Edición usuarios',
        	'slug'			=> 'users.edit',
        	'description' 	=> 'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar usuario',
        	'slug'			=> 'users.destroy',
        	'description' 	=> 'Eliminar cualquier usuario del sistema',
        ]);

        //Definicion de Roles
        Permission::create([
        	'name' 			=> 'Navegar roles',
        	'slug'			=> 'roles.index',
        	'description' 	=> 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Ver detalle de rol',
        	'slug'			=> 'roles.show',
        	'description' 	=> 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Edición roles',
        	'slug'			=> 'roles.edit',
        	'description' 	=> 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Creación roles',
        	'slug'			=> 'roles.create',
        	'description' 	=> 'Crear cualquier dato de un rol del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar rol',
        	'slug'			=> 'roles.destroy',
        	'description' 	=> 'Eliminar cualquier rol del sistema',
        ]);

        //Personas
        Permission::create([
        	'name' 			=> 'Buscar personas',
        	'slug'			=> 'personas.search',
        	'description' 	=> 'Buscar personas en el sistema para carnetizar',
        ]);

        Permission::create([
        	'name' 			=> 'Ver persona',
        	'slug'			=> 'personas.index',
        	'description' 	=> 'Ver datos de la persona a carnetizar',
        ]);

        Permission::create([
        	'name' 			=> 'Edición de personas',
        	'slug'			=> 'personas.update',
        	'description' 	=> 'Editar los datos de la persona ya carnetizada.',
        ]);

        Permission::create([
        	'name' 			=> 'Carnetizar personas guardar datos',
        	'slug'			=> 'personas.store',
        	'description' 	=> 'Guardar nuevos datos de la persona a carnetizar.',
        ]);

        Permission::create([
        	'name' 			=> 'Registrar datos en REP',
        	'slug'			=> 'reps.create',
        	'description' 	=> 'Registrar datos nuevos en el REP Local',
        ]);

        Permission::create([
            'name'          => 'Importar REP',
            'slug'          => 'import.reps',
            'description'   => 'Importar la base de datos del REP',
        ]);


    }
}
