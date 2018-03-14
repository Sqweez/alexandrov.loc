<?php

use Illuminate\Database\Seeder;

class GlobalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('globals')->insert([
        	'company_name' => 'Мой Александров',
	        'vk_url' => 'vk.com',
            'ok_url' => 'ok.ru',
	        'fb_url' => 'facebook.com',
	        'phone_1' => '+7 (895) 789 58 58',
	        'phone_2' => '+7 (895) 789 57 57',
	        'IIN' => 'ИНН 9102 0045 8737ОГРИП 
						3149 1023 4615 960'
        ]);
    }
}
