<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('items') ->delete();

    	$items  = array(
    		array(
                'owner_id' => '',
                'name' => 'Create Lar',
                'done' => false
                
                ),

            array(
                'owner_id' => '1',
                'name' => 'Run Command Table',
                'done' => true,
                
                )


            );



    	DB::table('items') ->insert($items);
    }
}





