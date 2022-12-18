<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;
use Illuminate\Database\Eloquent\SoftDeletes;


class Posts extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    public static $rules = array('body' => ['required',"max:255"]);
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
