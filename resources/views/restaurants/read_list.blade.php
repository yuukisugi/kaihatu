@extends('layouts.app')

@section('title', '基本情報の新規作成')
@section('content')
    <div class="container">
        <div class="col-md-8">
                <form action="{{ action('RestaurantController@read_list') }}" method="get">
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
        <div class="row">
            <tbody>
                @foreach($posts as $hotel)
                    <tr>
                        <th>{{ $restaurant->id }}</th>
                        <td>{{ \Str::limit($hotel->name, 100) }}</td>
                        @if ($restaurant->image_main)
                        <img src="{{ asset('storage/image/' . $hotel->image_main) }}" class="restaurant-list-row-image">
                        @endif
                        <td>{{ \Str::limit($hotel->address, 100) }}</td>
                        <div>
                            <a href="{{ action('RestaurantController@read_article', ['id' => $restaurant->id]) }}">詳細を見る</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection