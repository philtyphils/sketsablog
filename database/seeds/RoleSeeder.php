<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$data = [['role_name' => 'presiden','create' => 1,'read'=> 1,'update' => 1,'delete' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
		['role_name' => 'wkpresiden','create' => 1,'read'=> 1,'update' => 1,'delete' => 0,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
		['role_name' => 'menteri','create' => 1,'read'=> 1,'update' => 1,'delete' => 0,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
		['role_name' => 'rakyat','create' => 0,'read'=> 1,'update' => 0,'delete' => 0,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
		['role_name' => 'gembel','create' => 0,'read'=> 0,'update' => 0,'delete' => 0,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]];
		DB::table('role')->insert($data);
    }
}
