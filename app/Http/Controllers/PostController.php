<?php

namespace App\Http\Controllers;

use DB;

class PostController {

    public function show($slug)
    {
        $post = DB::table('posts')->where('slug', $slug)->first();

        return view('post', [
            'post' => $posts[$post]
        ]);
    }

}
