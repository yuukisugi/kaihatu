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
        <div class="row">
            <h2>投稿一覧（編集者用）</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('HotelController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
        </div>
        <div class="row">
            <tbody>
                @foreach($posts as $hotel)
                    <tr>
                        <th>{{ $hotel->id }}</th>
                        <td>{{ \Str::limit($hotel->name, 100) }}</td>
                        @if ($hotel->image_main)
                        <img src="{{ asset('storage/image/' . $hotel->image_main) }}" class="hotel-list-image">
                        @endif
                        <td>{{ \Str::limit($hotel->address, 100) }}</td>
                        <div>
                            <a href="{{ action('HotelController@edit', ['id' => $hotel->id]) }}">編集</a>
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