<?php

use Illuminate\Database\Seeder;

class MenuChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['parent_id' => 2,'name'=> 'Log Blog','meta_tag' => 'Log Blog, Sketsa, Austin Kleon, Sulistyo N Anggoro, sketsablog.com','meta_description' => "'WRITE THE BOOK THE YOU WANT TO READ', Austin Kleon - www.austinkleon.com | This the page to practicing that WORD!. I Write Everything on My Head, I noted that, I writing that, I flying that word to the Air. I wish you read my text on Air Austin Kleon.",'created_at'=> date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['parent_id' => 2,'name'=> 'Inlfluence By','meta_tag' => 'Log Blog, Sketsa, Austin Kleon, Sulistyo N Anggoro, sketsablog.com','meta_description' => "'WRITE THE BOOK THE YOU WANT TO READ', Austin Kleon - www.austinkleon.com | This the page to practicing that WORD!. I Write Everything on My Head, I noted that, I writing that, I flying that word to the Air. I wish you read my text on Air Austin Kleon.",'created_at'=> date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['parent_id' => 2,'name'=> 'Problem Solving (code)','meta_tag' => 'Log Blog, Sketsa, Austin Kleon, Sulistyo N Anggoro, sketsablog.com','meta_description' => "'WRITE THE BOOK THE YOU WANT TO READ', Austin Kleon - www.austinkleon.com | This the page to practicing that WORD!. I Write Everything on My Head, I noted that, I writing that, I flying that word to the Air. I wish you read my text on Air Austin Kleon.",'created_at'=> date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['parent_id' => 5,'name'=> 'Curiculum Vitae','meta_tag' => 'Curicululm Vitae Sulistyo N Anggoro, Sketsa, Austin Kleon, Sulistyo N Anggoro, sketsablog.com','meta_description' => "With My Profile, I wish We Become Good Partner.",'created_at'=> date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]
		];
		
		DB::table('menu_child')->insert($data);
    }
}
