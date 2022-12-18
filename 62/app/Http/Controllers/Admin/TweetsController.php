<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Posts;

class TweetsController extends Controller
{
  // 以下を追記
  public function add()
  {
      return view('admin.tweets.create');
  }

  public function create(Request $request)
  {
    // $this->validate($request, Tweets::$rules);
    $posts = new Posts;
    $form = $request->all();
    // unset($form['_token']);
    $posts->fill($form);
    $posts->save();
    return redirect('admin/tweets/create');
  } 

}
