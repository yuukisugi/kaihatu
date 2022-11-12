@extends('layouts.app')

@section('title', '基本情報の新規作成')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>基本情報を投稿</h2>
                <form action="{{ action('HotelController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">ホテル・旅館名 </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">予約URL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="reserve" value="{{ old('reserve') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p2>ホテルor旅館<br>
                        <input type="radio" name="hotelorryokan" value="ホテル"> ホテル
                        <input type="radio" name="hotelorryokan" value="旅館"> 旅館
                        </p2>
                   </div>
                    <div class="form-group row">
                        <label class="col-md-2">メイン画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_main">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-2">都道府県</label>
                         <div class="col-md-10">
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
                        </div>
                    </div>
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
                        <label class="col-md-2">客室名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_name" value="{{ old('room_name') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">部屋の画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_room">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">客室タイプ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_type" value="{{ old('room_type') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">広さ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_size" value="{{ old('room_size') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ベットサイズ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="bet_size" value="{{ old('bet_size') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">部屋設備</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="equipment" rows="10">{{ old('equipment') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">アメニティ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="amenities" rows="10">{{ old('amenities') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">客室名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_name_2" value="{{ old('room_name_2') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">部屋の画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_room_2">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">客室タイプ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_type_2" value="{{ old('room_type_2') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">広さ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_size_2" value="{{ old('room_size_2') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ベットサイズ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="bet_size_2" value="{{ old('bet_size_2') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">部屋設備</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="equipment_2" rows="10">{{ old('equipment_2') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">アメニティ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="amenities_2" rows="10">{{ old('amenities_2') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">客室名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_name_3" value="{{ old('room_name_3') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">部屋の画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_room_3">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">客室タイプ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_type_3" value="{{ old('room_type_3') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">広さ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_size_3" value="{{ old('room_size_3') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ベットサイズ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="bet_size_3" value="{{ old('bet_size_3') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">部屋設備</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="equipment_3" rows="10">{{ old('equipment_3') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">アメニティ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="amenities_3" rows="10">{{ old('amenities_3') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">総部屋数</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="total_room_count" value="{{ old('total_room_count') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">温泉・スパの画像（屋内）</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_spa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">フリーコメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="spa_comment" rows="10">{{ old('spa_comment') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">風呂営業時間</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="spa_business_hours" rows="10">{{ old('spa_business_hours') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">利用料金・条件など</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="spa_terms_of_use" rows="10">{{ old('spa_terms_of_use') }}</textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">温泉・スパの画像(屋外)</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_open_spa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">フリーコメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="open_spa_comment" rows="10">{{ old('open_spa_comment') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">風呂営業時間</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="open_spa_business_hours" rows="10">{{ old('open_spa_business_hours') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">利用料金・条件など</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="open_spa_terms_of_use" rows="10">{{ old('open_spa_terms_of_use') }}</textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">施設の画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_building">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">施設内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="building_detail" rows="3">{{ old('building_detail') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">イベント等の画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_event">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">イベント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="event" rows="10">{{ old('event') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">利用可能な決済方法</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="settlement" rows="10">{{ old('settlement') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">チェックイン/チェックアウト</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="check_in_out" rows="2">{{ old('check_in_out') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">バリアフリーの対応</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="barrier_free" rows="5">{{ old('barrier_free') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection
