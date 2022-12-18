<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Posts;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
DB::enableQueryLog();


class PostsController extends Controller
{
    public function add()
    {
        return view('admin.posts');
    }

    public function create(Request $request)
    {
        $posts = new Posts;
        $this->validate($request, Posts::$rules);
        $posts->user_id = Auth::id();
        $posts->body = $request['body'];
        $posts->save();
        return redirect('admin/posts');
    }

    public function index(Request $request)
    {
        $posts = new Posts;
        $users = new User;
        $posts = Posts::with('user')->latest()->get();
        return view('admin.posts', compact("posts"));
    }

    public function delete(Request $request)
    {
        $posts = new Posts;
        $users = new User;
        $posts = Posts::find($request->id);
        $posts->delete();
        return redirect('admin/posts');
    }
}
