<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request) {
        $requestTags = $request->get('tags');
        $tagsNotExist = array_diff($requestTags, Tag::whereIn('name', $requestTags)->pluck('name')->toArray());

        foreach ($tagsNotExist as $tag) {
            DB::table('tags')->insert([
                'name' => $tag,
            ]);
        }

        $newPost = Post::create([
            'title' => $request->get('title'),
            'user_id' => $request->get('user_id'),
            'content' => $request->get('content'),
            'status' => config('home.pending_status'),
        ]);

        $newTagsId = Tag::whereIn('name', $requestTags)->pluck('id')->toArray();
        $newPost->tags()->sync($newTagsId);

        return redirect('home');
    }
}
