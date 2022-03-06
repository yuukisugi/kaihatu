@extends('layouts.app')
@section('title', '宿泊施設の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>宿泊施設の編集（編集者用）</h2>
                <form action="{{ action('HotelController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                     <div class="form-group row">
                        <label class="col-md-2">ホテル・旅館名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p>デフォルト<br>
                        <input type="radio" name="hotelorryokan" value="はい"> ホテル
                        <input type="radio" name="hotelorryokan" value="いいえ"> 旅館
                        </p>
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
                            <option value="">沖縄県</option>
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
                        <label class="col-md-2">部屋・施設の画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_building">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">洋室</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="we_room_count" value="{{ old('we_room_count') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">和室</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="ja_we_room_count" value="{{ old('ja_we_room_count') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">和洋室</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="ja_we_room_count" value="{{ old('ja_we_room_count') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">その他</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="other_room_count" value="{{ old('other_room_count') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">総部屋数</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="style_total_room_count" value="{{ old('style_total_room_count') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">シングル</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="single" value="{{ old('single') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ダブル</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="double" value="{{ old('double') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ツイン</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="twin" value="{{ old('twin') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">スイート</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="sweet" value="{{ old('sweet') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">総部屋数</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="capacity_total_room_count" value="{{ old('capacity_total_room_count') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">部屋補足</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="room_detail" rows="5">{{ old('room_detail') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">標準的な部屋設備</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="equipment" rows="5">{{ old('equipment') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">インターネット関連</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="internet" rows="5">{{ old('internet') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">温泉・風呂の画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_spa">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">温泉</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="spa" value="{{ old('spa') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">露天風呂</label>
                        <div class="col-md-10">
                           <input type="text" class="form-control" name="open_spa" value="{{ old('open_spa') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">その他の風呂設備</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="other_spa" rows="5">{{ old('other_spa') }}</textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">風呂利用条件</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="spa_requirement" rows="5">{{ old('spa_requirement') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">アメニティ・施設・サービスの画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_equipment">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">施設内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="building_detail" rows="5">{{ old('building_detail') }}</textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">サービス&レジャー</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="service" rows="5">{{ old('service') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">利用可能な決済方法</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="settlement" rows="5">{{ old('settlement') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">標準的なチェックイン時間</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="check_in" rows="5">{{ old('check_in') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">標準的なチェックアウト時間</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="check_out" rows="5">{{ old('check_out') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">補足</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hotel_detail" rows="5">{{ old('hotel_detail') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">バリアフリーの対応</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="barrier_free" rows="5">{{ old('barrier_free') }}</textarea>
                        </div>
                    </div>
                </form><div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($hotel_form->histories != NULL)
                                @foreach ($hotel_form->histories as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
    @endsection