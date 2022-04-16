@extends('layouts.app')
@section('title', '登録済み宿泊施設の一覧')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <form action="{{ action('HotelController@all_read_list') }}" method="get">
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
            <h2>宿泊施設一覧（閲覧者用）</h2>
        </div>
        <table class="list-table">
            <tbody>
                @foreach($posts as $hotel)
                    <tr>
                    @if ($hotel->image_main)
                    <td>
                       <img src="{{ asset('storage/image/' . $hotel->image_main) }}" class="list-image"> 
                    </td>
                    @endif
                    <td>
                        <h2>{{ $hotel->id }}</h2>
                        <div>
                         <p>{{ \Str::limit($hotel->name, 100) }}</p>
                         <p>{{ \Str::limit($hotel->todouhuken, 100) }}    {{ \Str::limit($hotel->address, 100) }}</p>
                        </div>
                        <div>
                         <a class="link" href="{{ action('HotelController@read_article', ['id' => $hotel->id]) }}">詳細を見る</a> 
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection