<?php

use Illuminate\Database\Seeder;

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

    	$this->call('Seeds\UsersTableSeeder') ;
    }


}




// class UsersTableSeeder extends Seeder
// {

// 	public function run()
// 	{
// 		DB::table('users') ->delete();

// 		$users  = array(
// 			array(

// 				'name' => 'Alex',
// 				'password' => Hash::make('alex'),
// 				'email' => 'mymail@yandex.ru'				
// 				)
// 			);



// 		DB::table('users') ->insert($users);


// 	}
// }

