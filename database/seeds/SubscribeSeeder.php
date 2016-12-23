<?php

use Illuminate\Database\Seeder;

class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['email' => "philtyphils@gmail.com",'facebook' => "https://web.facebook.com/philtygrin",'twitter' => "https://web.facebook.com/philtygrin","other" => "http://sketsablog.com/","active" => 1, "created_at" => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:S") ],
			
		];
		
		DB::table('subscribe')->insert($data);
    }
}
