@extends('layouts.app')
@section('title', '登録済み宿泊施設の一覧')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <form action="{{ action('HotelController@read_list') }}" method="get">
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
        <div class="row">
            <h2>投稿一覧（閲覧者用）</h2>
        </div>
        <table class="hotel-list-table">
            <tbody>
                @foreach($posts as $hotel)
                    <tr>
                    <th>{{ $hotel->id }}</th>
                    @if ($hotel->image_main)
                    <td>
                       <img src="{{ asset('storage/image/' . $hotel->image_main) }}" class="hotel-list-image"> 
                    </td>
                    @endif
                    <td>
                        <div>
                         {{ \Str::limit($hotel->name, 100) }}
                        </div>
                        <div>
                         {{ \Str::limit($hotel->address, 100) }} 
                        </div>
                        <div>
                         <a href="{{ action('HotelController@read_article', ['id' => $hotel->id]) }}">詳細を見る</a> 
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection