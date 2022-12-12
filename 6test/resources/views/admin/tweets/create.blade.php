@extends('layouts.admin')
@section('title', '簡単なつぶやきSNS')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ホーム</h2>
                <form action="{{ action('Admin\TweetsController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input class="form-control" name="body" rows="1" placeholder= いまどうしてる？>{{ old('body') }}</input>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="つぶやく">
                </form>
            </div>
        </div>
    </div>
@endsection

