<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['username' => 'phil.sketsa','password' => $this->password_generate('phil.sketsa') ,'fullname'=> "Sulistyo Nur Anggoro",'email' => "philtyphils@gmail.com",'role' => 1,'last_ip' => "127.0.0.1",'active' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
			['username' => 'phil.wkpresiden','password' => $this->password_generate('phil.wkpresiden') ,'fullname'=> "Rizka Dyah Pratiwi",'email' => "kygo@gmail.com",'role' => 2,'last_ip' => "127.0.0.1",'active' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
			['username' => 'phil.menteri','password' => $this->password_generate('phil.menteri') ,'fullname'=> "Rizka Dyah Pratiwi",'email' => "rdp@gmail.com",'role' => 2,'last_ip' => "127.0.0.1",'active' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
			['username' => 'phil.rakyat','password' => $this->password_generate('phil.rakyat') ,'fullname'=> "Rizka Dyah Pratiwi",'email' => "rakyat@gmail.com",'role' => 2,'last_ip' => "127.0.0.1",'active' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ]
		];
		DB::table('account')->insert($data);
    }
	
	private function password_generate($str)
	{
		$md5Salt 	= md5("philtyphils@gmail.com;08118779995;@philltyphils;".date("Y-m-d H:i:su")."13maret1990");
		$md5Str  	= md5($str);
		$encrypted 	= md5($md5Str.$md5Salt).":".$md5Salt;
		return $encrypted;
	}
}
