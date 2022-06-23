<?php
namespace App\Service;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostDatabaseService {

    public function storePostData($request) {
        $post = new Post;

        $post->title    = $request->title;
        $post->body     = $request->body;
        $post->status   = '1';
        $post->user_id  = Auth::user()->id;
        $post->category_id = $request->category_id;

        return $post;

    }

    public function getIndividualData($id) {
        return  Post::find($id);
    }

    


}
