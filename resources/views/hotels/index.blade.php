@extends('layouts.app')
@section('title', '登録済み宿泊施設の一覧')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <form action="{{ action('HotelController@index') }}" method="get">
                <div class="form-group row">
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                    </div>
                    <div class="col-md-2">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="検索">
                    </div>
                </div>
            </form>
            </div>
    <div class="col-md-4">
        <a href="{{ action('HotelController@add') }}" role="button" class="btn btn-primary">新規作成</a>
    </div>
       <div class="row">
            <h2>投稿一覧（投稿・編集者用）</h2>
        </div>
        <table class="hotel-list-table">
        　　<tbody>
            @foreach($posts as $hotel)
                <tr>
                <div class="image">
                 @if ($headline->image_path)
               <img src="{{ $headline->image_path }}">
                @endif
             </div>
                @if ($hotel->image_main)
                <td>
                   <img src="{{ $post->image_main }}">
                </td>
                @endif
                <td>
                    <h2>{{ $hotel->id }}</h2>
                    <div>
                     <p>{{ \Str::limit($hotel->name, 100) }}</p>
                     <p>{{ \Str::limit($hotel->todouhuken, 100) }}　　{{ \Str::limit($hotel->address, 100) }}</p> 
                    </div>
                    <div>
                     <a class="link" href="{{ action('HotelController@edit', ['id' => $hotel->id]) }}">編集</a>　　<a class="link" href="{{ action('HotelController@delete', ['id' => $hotel->id]) }}">削除</a>
                    </div>
                </td>
                </tr>
            @endforeach
        　　　　　</tbody>
            </table>
        </div>
@endsection
