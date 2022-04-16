@extends('layouts.app')
@section('title', '宿泊施設の記事')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>記事の内容（閲覧者用）</h2>
                <div class="main">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                        <div class="read_article-container">
                            <img src="{{ asset('storage/image/' . $hotel_form->image_main) }}" class="hotel-list-image"> 
                            <ul class="">
                               <h2>{{ ($hotel_form->name) }}</h2>
                               <a href="{{ ($hotel_form->reserve) }}">{{ ($hotel_form->reserve) }}</a>
                               <p>{{ ($hotel_form->todouhuken) }} {{ ($hotel_form->address) }} </p>
                            </ul>　
                         </div>
                        <div class="read_article-container">
                            <img src="{{ asset('storage/image/' . $hotel_form->image_room) }}" class="hotel-list-image">
                            <ul class="">
                              <h2>{{ ($hotel_form->room_name) }}</h2>
                              <p>客室タイプ/{{ ($hotel_form->room_type) }}</p> 
                              <p>広さ/{{ ($hotel_form->room_size) }}</p>
                              <p>ベットサイズ/{{ ($hotel_form->bet_size) }}</p>
                            </ul>　
                         </div>
                         <div class="read_article-container">
                            <ul class="">
                              <p>室内設備/{{ ($hotel_form->equipment) }}</p>
                              <p>アメニティ/{{ ($hotel_form->amenities) }}</p>
                            </ul>　
                         </div>
                         <div class="read_article-container">
                            <img src="{{ asset('storage/image/' . $hotel_form->image_room_2) }}" class="hotel-list-image">
                            <ul class="">
                              <h2>{{ ($hotel_form->room_name_2) }}</h2> 
                              <p>客室タイプ/{{ ($hotel_form->room_type_2) }}</p>
                              <p>広さ/{{ ($hotel_form->room_size_2) }}</p>  
                              <p>ベットサイズ/{{ ($hotel_form->bet_size_2) }}</p>
                            </ul>　
                         </div>
                          <div class="read_article-container">
                            <ul class="">
                              <p>室内設備/{{ ($hotel_form->equipment_2) }}</p>
                              <p>アメニティ/{{ ($hotel_form->amenities_2) }}</p>
                            </ul>　
                         </div>
                         <div class="read_article-container">
                            <img src="{{ asset('storage/image/' . $hotel_form->image_room_3) }}" class="hotel-list-image">
                            <ul class="">
                              <h2>{{ ($hotel_form->room_name_3) }} </h2> 
                               <p>客室タイプ/{{ ($hotel_form->room_type_3) }}</p>
                               <p>広さ/{{ ($hotel_form->room_size_3) }}</p> 
                               <p>ベットサイズ/{{ ($hotel_form->bet_size_3) }}</p>
                            </ul>　
                         </div>
                         <div class="read_article-container">
                            <ul class="">
                              <p>室内設備/{{ ($hotel_form->equipment_3) }}</p>
                              <p>アメニティ/{{ ($hotel_form->amenities_3) }}</p>
                            </ul>　
                         </div>
                        <div class="read_article-container">
                            <img src="{{ asset('storage/image/' . $hotel_form->image_spa) }}" class="hotel-list-image">
                            <ul class="">
                            　 <h3>温泉・スパ施設</h3>
                            　 <p>{{ ($hotel_form->spa_business_hours) }}</p>
                            </ul>　
                         </div>
                         <div class="read_article-container">
                            <ul class="">
                               <p>{{ ($hotel_form->spa_comment) }}</p>
                               <p>{{ ($hotel_form->spa_terms_of_use) }}</p>
                            </ul>
                          </div>
                         <div class="read_article-container">
                            <img src="{{ asset('storage/image/' . $hotel_form->image_open_spa) }}" class="hotel-list-image"> 
                            <ul class="">
                            　 <h3>温泉・スパ施設</h3>
                            　 <p>{{ ($hotel_form->open_spa_business_hours) }}</p>
                            </ul>
                         </div>
                          <div class="read_article-container">
                            <ul class="">
                             　<p>{{ ($hotel_form->open_spa_comment) }}</p>
                             　<p>{{ ($hotel_form->open_spa_terms_of_use) }}</p>
                            </ul>
                          </div>
                         <div class="read_article-container">
                            <img src="{{ asset('storage/image/' . $hotel_form->image_building) }}" class="hotel-list-image"> 
                            <ul class="">
                            　<h3>館内施設 </h3>
                            　<p>{{ ($hotel_form->building_detail) }}</p>
                            </ul>　
                         </div>
                        <div class="read_article-container">
                            <img src="{{ asset('storage/image/' . $hotel_form->image_event) }}" class="hotel-list-image">
                            <ul class="">
                            　<h3>イベント</h3>
                              <p>{{ ($hotel_form->event) }}</p>
                            </ul>　
                         </div>
                        <div class="read_article-container">
                            <ul class="">
                              <h3>利用可能な決済方法</h3>
                              <p>{{ ($hotel_form->settlement) }}</p>
                              <h3>チェックイン/チェックアウト</h3>
                              <p>{{ ($hotel_form->check_in_out) }}</p>
                              <h3>バリアフリーの対応</h3>
                              <p>{{ ($hotel_form->barrier_free) }}</p>
                            </ul>
                         </div>
         <!--       <div class="row mt-5">-->
         <!--           <div class="col-md-4 mx-auto">-->
         <!--               <h2>コメント履歴</h2>-->
         <!--               <ul class="list-group">-->
         <!--                   @if ($hotel_form->histories != NULL)-->
         <!--                       @foreach ($hotel_form->histories as $history)-->
         <!--                           <li class="list-group-item">{{ $history->edited_at }}</li>-->
         <!--                       @endforeach-->
         <!--                   @endif-->
         <!--               </ul>-->
         <!--          </div>-->
         <!--       </div>-->
         <!--    <form action="{{ action('HotelController@add_review') }}" method="post" enctype="multipart/form-data">-->
         <!--    {{ csrf_field() }}-->
         <!--    <textarea class="form-control" name="review_text" rows="10">{{ old('review_text') }}</textarea>-->
         <!--    <input type="submit" class="btn btn-primary" value="コメント">-->
         <!--    <input type="hidden" name="hotel_id" value="{{ $hotel_form->id }}">-->
         <!--</form>-->
        </div>
    </div>
    @endsection
                         
                        
                        
                   
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                        
                        
                    
                         
                        
                       
                    
                         
                       
                