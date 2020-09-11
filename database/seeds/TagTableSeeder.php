<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['HTML', 'CSS', 'JS'];

        foreach ($tags as $tag) {
            if (!DB::table('tags')->where('name', $tag)->first()) {
                DB::table('tags')->insert(['name' => $tag]);
            }
        }

        $listTags = DB::table('tags')->get();
        foreach ($listTags as $tag) {
            $listPostId = [];
            for ($i = 0; $i < 20; $i++) {
                $randomPostId = Post::all()->random()->id;
                if (!in_array($randomPostId, $listPostId)) {
                    DB::table('post_tag')->insert([
                        'post_id' => $randomPostId,
                        'tag_id' => $tag->id,
                    ]);
                    array_push($listPostId, $randomPostId);
                } else {
                    continue;
                }
            }
        }
    }
}
