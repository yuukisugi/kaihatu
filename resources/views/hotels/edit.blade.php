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
                            <input type="text" class="form-control" name="name" value="{{ ($hotel_form->name) }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">予約URL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="reserve" value="{{ ($hotel_form->reserve) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p2>ホテルor旅館<br>
                        <input type="radio" name="hotelorryokan" value="ホテル"> ホテル
                        <input type="radio" name="hotelorryokan" value="旅館"> 旅館
                        </p2>
                   </div>
                    <div class="form-group row">
                        <img src="{{ asset('storage/image/' . $hotel_form->image_main) }}" class="hotel-list-image">
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
                            <input type="text" class="form-control" name="address" value="{{ ($hotel_form->address) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">アクセス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="access" value="{{ ($hotel_form->access) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">パーキング</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="parking" value="{{ ($hotel_form->parking) }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">客室名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_name" value="{{ ($hotel_form->room_name) }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <img src="{{ asset('storage/image/' . $hotel_form->image_room) }}" class="hotel-list-image"> 
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_room">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">客室タイプ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_type" value="{{ ($hotel_form->room_type) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">広さ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_size" value="{{ ($hotel_form->room_size) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ベットサイズ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="bet_size" value="{{ ($hotel_form->bet_size) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">部屋設備</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="equipment" rows="10">{{ ($hotel_form->equipment) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">アメニティ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="amenities" rows="10">{{ ($hotel_form->amenities) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">客室名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_name_2" value="{{ ($hotel_form->room_name_2) }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <img src="{{ asset('storage/image/' . $hotel_form->image_room_2) }}" class="hotel-list-image"> 
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_room_2">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">客室タイプ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_type_2" value="{{ ($hotel_form->room_type_2) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">広さ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_size_2" value="{{ ($hotel_form->room_size_2) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ベットサイズ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="bet_size_2" value="{{ ($hotel_form->bet_size_2) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">部屋設備</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="equipment_2" rows="10">{{ ($hotel_form->equipment_2) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">アメニティ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="amenities_2" rows="10">{{ ($hotel_form->amenities_2) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">客室名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_name_3" value="{{ ($hotel_form->room_name_3) }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <img src="{{ asset('storage/image/' . $hotel_form->image_room_3) }}" class="hotel-list-image"> 
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_room_3">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">客室タイプ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_type_3" value="{{ ($hotel_form->room_type_3) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">広さ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="room_size_3" value="{{ ($hotel_form->room_size_3) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ベットサイズ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="bet_size_3" value="{{ ($hotel_form->bet_size_3) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">部屋設備</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="equipment_3" rows="10">{{ ($hotel_form->equipment_3) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">アメニティ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="amenities_3" rows="10">{{ ($hotel_form->amenities_3) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">総部屋数</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="total_room_count" value="{{ ($hotel_form->capacity_total_room_count) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <img src="{{ asset('storage/image/' . $hotel_form->image_spa) }}" class="hotel-list-image"> 
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_spa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">フリーコメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="spa_comment" rows="10">{{ ($hotel_form->spa_comment) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">風呂営業時間</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="spa_business_hours" rows="10">{{ ($hotel_form->spa_business_hours) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">利用料金・条件など</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="spa_terms_of_use" rows="10">{{ ($hotel_form->spa_terms_of_use) }}</textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_open_spa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">フリーコメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="open_spa_comment" rows="10">{{ ($hotel_form->open_spa_comment) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">風呂営業時間</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="open_spa_business_hours" rows="10">{{ ($hotel_form->open_spa_business_hours) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">利用料金・条件など</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="open_spa_terms_of_use" rows="10">{{ ($hotel_form->open_spa_terms_of_use) }}</textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <img src="{{ asset('storage/image/' . $hotel_form->image_building) }}" class="hotel-list-image"> 
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_building">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">施設内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="building_detail" rows="10">{{ ($hotel_form->building_detail) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <img src="{{ asset('storage/image/' . $hotel_form->image_event) }}" class="hotel-list-image">
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_event">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">イベント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="event" rows="10">{{ ($hotel_form->event) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">利用可能な決済方法</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="settlement" rows="10">{{ ($hotel_form->settlement) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">チェックイン/チェックアウト</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="check_in_out" rows="2">{{ ($hotel_form->check_in_out) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">バリアフリーの対応</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="barrier_free" rows="5">{{ ($hotel_form->barrier_free) }}</textarea>
                        </div>
                    </div>
                  <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $hotel_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
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