<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['name' => 'home','meta_description' => "BLOG was created by Sulistyo Nur Anggoro. Try to practice Austin Kleon Book 'Steal Like An Artist'. And It is one way to practice 'WRITE FAN LETTER'. It is My Blog Fan Letters To Austin Kleon. I try to @mention Austin Kleon. 'Write a blog post about someone's work that you admire and link to ther site' - Austin Kleon - www.austinkleon.com",'meta_tag' => 'Sketsa Blog, Philtyhil, Fake It Till U make It, Austin Kleon, BLOG FAN LETTER','link'=> "/home",'active' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'blog','meta_description' => "'WRITE THE BOOK THE YOU WANT TO READ', Austin Kleon - www.austinkleon.com | This the page to practicing that WORD!. I Write Everything on My Head, I noted that, I writing that, I flying that word to the Air. I wish you read my text on Air Austin Kleon.",'meta_tag' => 'Sketsa Blog, Philtyhil, WRITE THE BOOK THE YOU WANT TO READ, Austin Kleon, BLOG FAN LETTER, Sulistyo Nur Anggoro, Sketsa','link'=> "/blog",'active' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'my works','meta_description' => "'BE BORING (IT'S THE ONLY WAY TO GET WORKDONE', Austin Kleon - www.austinkleon.com | This the page to practicing that WORD!. Ya, I Boring, But I do something in half my boring, I create something to my goals while I feel Boring. I wish you read my text on Air Austin Kleon.",'meta_tag' => 'Sketsa Blog, Philtyhil, WRITE THE BOOK THE YOU WANT TO READ, Austin Kleon, BLOG FAN LETTER, Sulistyo Nur Anggoro, Sketsa','link'=> "/works",'active' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'my plans','meta_description' => "'SHARE YOUR DOTS, BUT DONT CONNECT THEM', Austin Kleon - www.austinkleon.com | This the page to practicing that WORD!. Ya, I Boring, But I do something in half my boring, I create something to my goals while I feel Boring. I wish you read my text on Air Austin Kleon.",'meta_tag' => 'Sketsa Blog, Philtyhil, SHARE YOUR DOTS BUT DONT CONNECT THEM, Austin Kleon, BLOG FAN LETTER, Sulistyo Nur Anggoro, Sketsa','link'=> "/plans",'active' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'about me','meta_description' => "'SHARE YOUR DOTS, BUT DONT CONNECT THEM', Austin Kleon - www.austinkleon.com | This the page to practicing that WORD!. Ya, I Boring, But I do something in half my boring, I create something to my goals while I feel Boring. I wish you read my text on Air Austin Kleon.",'meta_tag' => 'Sketsa Blog, Philtyhil, WRITE THE BOOK THE YOU WANT TO READ, Austin Kleon, BLOG FAN LETTER, Sulistyo Nur Anggoro, Sketsa','link'=> "/aboutme",'active' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'My IDOL','meta_description' => "I wish, I could meet Everyone in this page. But I really really want meet Austin Kleion. www.austinkleon.com. This blog was building to knock austin kleon on google.",'meta_tag' => 'Sketsa Blog, Philtyhil, WRITE THE BOOK THE YOU WANT TO READ, Austin Kleon, BLOG FAN LETTER, Sulistyo Nur Anggoro, Sketsa','link'=> "/myidol",'active' => 1,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
		];
		
		DB::table('menu')->insert($data);
    }
}
