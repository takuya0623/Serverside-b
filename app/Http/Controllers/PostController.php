<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;


class PostController extends Controller
{

    public function index()
    {
        // 一覧表示
        $posts = Post::all();
        return view('post/index', compact('posts'));
    }

    public function create()
    {

        return view('post/create');
    }

    public function store(Request $request)
    {
        // インスタンスの生成
        $post = new Post;
        // 入力された値を変数に代入
        $post->word = $request->word;
        // 保存
        $post->save();
        return redirect()->route('post.index');
    }
}
