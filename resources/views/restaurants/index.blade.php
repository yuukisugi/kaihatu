@extends('layouts.app')
@section('title', '基本情報')

@section('content')
    <div class="container">
        <div class="col-md-8">
                <form action="{{ action('RestaurantController@index') }}" method="get">
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
            <h2>投稿一覧（編集者用）</h2>
        </div>
            <table class="list-table">
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
                                     {{ \Str::limit($rest->name, 100) }}
                                    </div>
                                    <div>
                                     {{ \Str::limit($hotel->todouhuken, 100) }} 
                                    </div>
                                    <div>
                                     {{ \Str::limit($hotel->address, 100) }} 
                                    </div>
                                    <div>
                                     <a href="{{ action('RestaurantController@edit', ['id' => $hotel->id]) }}">編集</a>
                                    </div>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
