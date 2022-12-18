@extends('layouts.admin')
@section('title', 'SNS')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ホーム</h2>
                <form action="{{ action('Admin\PostsController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type ="text" class="form-control" name="body" placeholder ="いまどうしてる？" >{{ old('body') }}
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="つぶやく">
                </form>
            </div>
        </div>

        <div class = "tweets">
          <table>
          @foreach($posts as $posts)
            <tr>
              <td class = "td-left">{{ $posts->user->name }}</td>
              <td class = "td-right">{{ $posts->updated_at }}</td>
            </tr>
            <tr class = "td-bottom">
              <td class = "td-left">{{ $posts->body }}</td>
              <td class = "td-right">
                @if($posts->user_id == Auth::id())
                <form action="{{ action('Admin\PostsController@delete', ['id' => $posts->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <input type="submit" class="btn btn-primary" value="削除">
                </form>
                @endif
              </td>
            </tr>
          @endforeach
          </table>
        </div>
    </div>
@endsection
