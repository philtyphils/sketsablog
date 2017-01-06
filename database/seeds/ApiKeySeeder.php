<?php

use Illuminate\Database\Seeder;

class ApiKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			["name" => "Website","key" => "abc5dasar!@#$%","status" => 1,"created_at" => date("Y-m-d H:i:s"), "updated_at" => date("Y-m-d H:i:s")]
		];
		
		DB::table('api_key')->insert($data);
    }
}
