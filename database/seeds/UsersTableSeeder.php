<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'0' => [
    			'name' => 'Miguel Vasco Macamo',
    			'email' => 'misaelvasco@gmail.com',
    			'password' => Hash::make('123456'),
    			'nivelacesso' => 'Admin',
    			'estado' => 'on'
    		],
    		'1' => [
    			'name' => 'Leonardo Huo',
    			
    			'email' => 'leo@gmail.com',
    			'password' => Hash::make('123456'),
    			'nivelacesso' => 'Normal',
    			'estado' => 'on'
    		],

    		'2' => [
    			'name' => 'Denilson Mavie',

    			'email' => 'denilson@gmail.com',
    			'password' => Hash::make('123456'),
    			'nivelacesso' => 'Administrador',
    			'estado' => 'on'
    		]

    	]);
    }
}
