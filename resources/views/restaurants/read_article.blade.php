@extends('layouts.app')
<link href="{{ asset('css/front.css') }}" rel="stylesheet">
@section('title', '基本情報の新規作成')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>記事の内容（閲覧者用）</h2>
                <form action="{{ action('RestaurantController@read') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">店舗名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">メイン画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_main">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">店内・料理の画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_sample">
                        </div>
                    <fieldset>
                      <legend>こだわり</legend>
                      <div>
                        <input type="checkbox" id="coding" name="interest" value="coding">
                        <label for="coding">コーディング</label>
                      </div>
                      <div>
                        <input type="checkbox" id="music" name="interest" value="music">
                        <label for="music">音楽</label>
                      </div>
                    </fieldset>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">アクセス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="access" value="{{ old('access') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">パーキング</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="parking" value="{{ old('parking') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">営業時間</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="usiness_hours" value="{{ old('business_hours') }}">
                        </div>
                    </div>
                    <form method="post" action="example.cgi">

                        <p>予約の可否<br>
                        <input type="radio" name="q1" value="はい"> 可
                        <input type="radio" name="q1" value="いいえ"> 不可
                        </p>
                        
                        <p><input type="submit" value="送信する"></p>
                        
                    </form>
                    <div class="form-group row">
                        <label class="col-md-2">HPURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hp_url" value="{{ old('hp_url') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">お問い合わせ</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="inquiry" value="{{ old('inquiry') }}">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label class="col-md-2">予算</label>
                        <div class="col-md-10">
                            <input type="number" data-im-format="currency(2)"data-im-format-options="useseparator"class="form-control" name="budget" value="{{ old('budget') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">利用可能な決済方法</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="settlement" rows="5">{{ old('settlement') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">座席数</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="number_of_seats" value="{{ old('number_of_seats') }}">
                        </n
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">貸切</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="reserved" value="{{ old('reserved') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">喫煙</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="smoking" value="{{ old('smoking') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">空間・設備</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="spatial_equipment" value="{{ old('patial_equipment') }}">
                        </div>
                     <fieldset>
                      <legend>ドリンク</legend>
                      <div>
                        <input type="checkbox" id="coding" name="interest" value="coding">
                        <label for="coding">コーディング</label>
                      </div>
                      <div>
                        <input type="checkbox" id="music" name="interest" value="music">
                        <label for="music">音楽</label>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>利用シーン</legend>
                      <div>
                        <input type="checkbox" id="coding" name="interest" value="coding">
                        <label for="coding">コーディング</label>
                      </div>
                      <div>
                        <input type="checkbox" id="music" name="interest" value="music">
                        <label for="music">音楽</label>
                      </div>
                    </fieldset>
                    <div class="form-group row">
                        <label class="col-md-2">子供連れ</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="with_children" value="{{ old('"with_children') }}">
                        </div>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">店舗PR</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="store_pr" rows="10">{{ old('store_pr') }}</textarea>
                        </div>
                    </div>
                   
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
         <form action="{{ action('RestaurantController@read') }}" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}
             <textarea class="form-control" name="review_text" rows="10">{{ old('review_text') }}</textarea>
             <input type="submit" class="btn btn-primary" value="コメント">
         </form>
    </div>
 

   
@endsection
