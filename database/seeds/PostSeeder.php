<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			['category_id' => 2,'author' => "Sulistyo N Anggoro",'title' => "WYSIWYG BBCode Editor", 'post' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus tempus auctor. Sed malesuada viverra libero sit amet convallis. Praesent euismod tellus id massa luctus euismod. Aenean volutpat viverra tellus quis rhoncus. Nulla ac ullamcorper odio, non sodales sapien. Mauris non odio in metus ornare facilisis. Vivamus mauris urna, imperdiet quis tortor in, ullamcorper vestibulum lacus. Sed justo velit, sagittis vel ipsum id, fermentum ultrices felis.<br/>Curabitur mattis lorem at laoreet rutrum. Suspendisse rutrum massa eget tellus tristique ultricies sagittis ut augue. Morbi eros purus, cursus ac mattis nec, porta non nisl. Fusce at molestie nisl. Maecenas lobortis iaculis felis, eu varius risus luctus ut. Fusce sed tellus ut ipsum finibus convallis. Sed maximus, leo vitae accumsan vestibulum, magna augue feugiat felis, a auctor diam ante eget nibh. Cras pretium at ante porttitor mollis. Phasellus efficitur auctor elit id convallis. Ut ut nisl non turpis luctus pulvinar vitae sit amet urna. Ut vel elit dignissim, laoreet neque sed, porttitor justo. Nulla egestas eros nec felis feugiat laoreet. Phasellus tristique imperdiet lacus non iaculis. Etiam in sapien in ante bibendum gravida. Aliquam ullamcorper auctor dui. Sed elementum auctor nulla, sit amet lacinia ante.</p>",'meta_tag' => "BBCode Editor, sketsablog.com, Sulistyo Nur Anggoro, WYSIWYG FOR BEST SEO",'meta_description' => "Blog FAN A LETTER",'meta_title' => "WYSIWYG BBCode Editor", 'seo_link' => "WYSIWYG-BBCode-Editor",'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],			
			['category_id' => 2,'author' => "Sulistyo N Anggoro",'title' => "TEST JUDUL KE DUA", 'post' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus tempus auctor. Sed malesuada viverra libero sit amet convallis. Praesent euismod tellus id massa luctus euismod. Aenean volutpat viverra tellus quis rhoncus. Nulla ac ullamcorper odio, non sodales sapien. Mauris non odio in metus ornare facilisis. Vivamus mauris urna, imperdiet quis tortor in, ullamcorper vestibulum lacus. Sed justo velit, sagittis vel ipsum id, fermentum ultrices felis.<br/>Curabitur mattis lorem at laoreet rutrum. Suspendisse rutrum massa eget tellus tristique ultricies sagittis ut augue. Morbi eros purus, cursus ac mattis nec, porta non nisl. Fusce at molestie nisl. Maecenas lobortis iaculis felis, eu varius risus luctus ut. Fusce sed tellus ut ipsum finibus convallis. Sed maximus, leo vitae accumsan vestibulum, magna augue feugiat felis, a auctor diam ante eget nibh. Cras pretium at ante porttitor mollis. Phasellus efficitur auctor elit id convallis. Ut ut nisl non turpis luctus pulvinar vitae sit amet urna. Ut vel elit dignissim, laoreet neque sed, porttitor justo. Nulla egestas eros nec felis feugiat laoreet. Phasellus tristique imperdiet lacus non iaculis. Etiam in sapien in ante bibendum gravida. Aliquam ullamcorper auctor dui. Sed elementum auctor nulla, sit amet lacinia ante.</p>",'meta_tag' => "BBCode Editor, sketsablog.com, Sulistyo Nur Anggoro, WYSIWYG FOR BEST SEO",'meta_description' => "TEST JUDUL KE DUA, Blog FAN A LETTER",'meta_title' => "TEST JUDUL KE DUA", 'seo_link' => "TEST-JUDUL-KE-DUA",'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]
		];
		
		DB::table('post')->insert($data);
    }
}
