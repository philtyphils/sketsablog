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
        // $this->call(UsersTableSeeder::class);
		$this->call(AccountSeeder::class);
		$this->call(RoleSeeder::class);
		$this->call(MenuSeeder::class);
		$this->call(MenuChildSeeder::class);
		$this->call(MenuViewSeeder::class);
		$this->call(SubscribeSeeder::class);
		$this->call(CategorySeeder::class);
    }
}
