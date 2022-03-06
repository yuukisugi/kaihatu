@extends('layouts.app')

@section('title', '基本情報の新規作成')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>飲食店を投稿</h2>
                <form action="{{ action('RestaurantController@create') }}" method="post" enctype="multipart/form-data">

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
                        <label class="col-md-2">メインジャンル</label>
                        <select class="my_class" name="main_genre">
                            <option value="1">和食</option>
                            <option value="2">洋食</option>
                            <option value="3">ラーメン</option>
                            <option value="4">焼肉</option>
                            <option value="5">寿司</option>
                            <option value="6">カフェ・喫茶店</option>
                        </select>
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
                      <legend>サブジャンル</legend>{--多くなりすぎ、考え直し--}
                      <div>
                        <input type="checkbox" id="coding" name="sub_genre" value="coding">
                        <label for="coding">居酒屋</label>
                      </div>
                      
                      <div>
                        <input type="checkbox" id="music" name="interest" value="music">
                        <label for="music">カクテルバー</label>
                      </div>
                    </fieldset>
                    </div>
                    <label class="col-md-2">都道府県</label>
                        <select class="my_class" name="todouhuken">
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県<">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select>
                    <div class="form-group row">
                        <label class="col-md-2">市区町村</label>
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
                    <div class="form-group row">
                        <p>予約の可否<br>
                        <input type="radio" name="reserve" value="はい"> 可
                        <input type="radio" name="reserve" value="いいえ"> 否
                        </p>
                   </div>
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
                        <label class="col-md-2">利用可能な決済方法</label>{--チェックボックスから利用不可のものを外してもらう--}
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
                        <input type="checkbox" id="music" name="interest" value="music">
                        <label for="music">地酒・地ビール</label>
                      </div>
                      <div>
                        <input type="checkbox" id="music" name="interest" value="music">
                        <label for="music">ワイン</label>
                      </div>
                      <div>
                        <input type="checkbox" id="music" name="interest" value="music">
                        <label for="music">日本酒</label>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>利用シーン</legend>{--自由記述のほうがいいかも--}
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
                            <input type="text" class="form-control" name="with_children" value="{{ old('with_children') }}">
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
    </div>
 

   
@endsection
