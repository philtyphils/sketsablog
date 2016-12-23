<?php

use Illuminate\Database\Seeder;

class MenuViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['parent_id' => 1,'child_id' => 0,'child2_id'=>0,'special_condition' => 0,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['parent_id' => 2,'child_id' => 1,'child2_id'=>0,'special_condition' => 0,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
		];
		
		DB::table('menu_view')->insert($data);
    }
}
