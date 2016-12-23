<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['name' => "Log Blog",'seo_link' => "log-blog",'meta_title' => "Log Blog",'meta_tag' => "Sketsablog.com, Sulistyo Nur Anggoro, Austin Kleon, Philtyphils@gmail.com, Log Blog",'meta_description' => "'WRITE THE BOOK YOU WANT TO READ! - Austin Kleon. http://austinkleon.com'. I Will Knock u Together With Google And Other People was Helping Me to Mention you. 'I KNOCK U' ",'seo_title' => "log-blog",'created_at'=>date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => "Influence By",'seo_link' => "Influence-by",'meta_title' => "Influence By",'meta_tag' => "Sketsablog.com, Influence By, STEAL LIKE AN ARTIST, Austin Kleon, http://austinkleon.com, http://sketsablog.com, Sulistyo Nur Anggoro",'meta_description' => "'STEAL LIKE AN ARTIST! - Austin Kleon. http://austinkleon.com'. I Will Knock u Together With Google And Other People was Helping Me to Mention you. 'I KNOCK U AUSTION KLEON' ",'seo_title' => "log-blog",'created_at'=>date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
			['name' => "Problem Solving (code)",'seo_link' => "Problem-Solving-code",'meta_title' => "Problem Solving",'meta_tag' => "Sketsablog.com, Problem Solving, Austin Kleon, Philtyphils@gmail.com, Log Blog",'meta_description' => "'SIDE PROJECT AND HOBBIES ARE IMPORTANT' - Austin Kleon. http://austinkleon.com'. I Will Knock u Together With Google And Other People was Helping Me to Mention you. 'I KNOCK U AUSTION KLEON'. I was building this site to practice abaout what you write on STEAL LIKE AN ARTIST. It's about SIDE PROJECTS AND HOBBIES ARE IMPORTANT",'seo_title' => "log-blog",'created_at'=>date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]
		];
		
		DB::table('category')->insert($data);
    }
}
