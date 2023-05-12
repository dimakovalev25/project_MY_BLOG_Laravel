<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            \DB::beginTransaction();
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
            $data['preview_image'] = Storage::put('/images', $data['preview_image']);
            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagIds);
            \DB::commit();

        } catch (\Exception $exception) {
            \DB::rollBack();
            abort(500);
        }
    }


    public function update($data, $post)
    {
        try {
            \DB::beginTransaction();
            $post->update($data);
            \DB::commit();

        } catch (\Exception $exception) {
            \DB::rollBack();
            abort(404);
        }

        return $post;
    }
}
