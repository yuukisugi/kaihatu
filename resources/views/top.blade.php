@extends("layouts.app")

@section("content")

   <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
              <h1>地域から探す</h1>
                <div class="district-container">
                  <img src="{{ asset('images/map of Japan.jpg')}}">
                  <ul class="district-list f-container">
                      <a href="＃">北海道</a>
                      <a href="＃">東北</a>
                      <a href="＃">関東</a>
                      <a href="＃">中部</a>
                      <a href="＃">近畿</a>
                      <a href="＃">中国・四国</a>
                      <a href="＃">九州・沖縄</a>
                  </ul>　
                </div>
                <div class="card-contents">
                  <h2 class="text-title"> <a href="＃">飲食</a></h2>
                    <table class="contents">
                      <tr>
                        <td><img src="{{ asset('images/japanese meal.jpg')}}" alt=" " class="public-image" /></td>
                        <td><img src="{{ asset('images/western food.jpg')}}" alt=" " class="public-image" /></td>
                        <td><img src="{{ asset('images/grilled meat.jpg')}}" alt=" " class="public-image" /></td>
                        <td><img src="{{ asset('images/sushi shop.jpg')}}" alt=" " class="public-image" /></td>
                        <td><img src="{{ asset('images/ramen shop.jpg')}}" alt=" " class="public-image" /></td>
                        <td><img src="{{ asset('images/coffee shop.jpg')}}" alt=" " class="public-image" /></td>
                      </tr>
                      <tr>
                        <td><a href="＃">和食</a></td>
                        <td><a href="＃">洋食</a></td>
                        <td><a href="＃">焼肉</a></td>
                        <td><a href="＃">寿司</a></td>
                        <td><a href="＃">ラーメン</a></td>
                        <td><a href="＃">カフェ・喫茶店</a></td>
                      </tr>
                    </table>
                </div>
                <div class="card-contents">
                  <h2 class="text-title"> <a href="＃">アウトドア</a></h2>
                  <table class="contents">
                      <tr>
                        <td><img src="{{ asset('images/cinema.jpg')}}" alt=" " class="public-image" /></td>
                        <td><img src="{{ asset('images/amusement park.jpg')}}" alt=" " class="public-image" /></td>
                        <td><img src="{{ asset('images/aquarium.jpg')}}" alt=" " class="public-image" /></td>
                        <td><img src="{{ asset('images/zoo.jpg')}}" alt=" " class="public-image" /></td>
                        <td><img src="{{ asset('images/mountain climbing.jpg')}}" alt=" " class="public-image" /></td>
                        <td><img src="{{ asset('images/fishing moat.jpg')}}" alt=" " class="public-image" /></td>
                      </tr>
                      <tr>
                        <td><a href="＃">映画館</a></td>
                        <td><a href="＃">遊園地・テーマパーク</a></td>
                        <td><a href="＃">水族館</a></td>
                        <td><a href="＃">動物園</a></td>
                        <td><a href="＃">山登り・ハイキング</a></td>
                        <td><a href="＃">フィッシング</a></td>
                      </tr>
                    </table>
                </div>
                <div class="card-contents">
                   <a  href="＃">ショッピング</a>
                  <table class="contents">
                      <tr>
                        <td><img src="{{ asset('images/book store.jpg')}}"></td>
                        <td><img src="{{ asset('images/CD shop.jpg')}}"></td>
                        <td><img src="{{ asset('images/home appliances.jpg')}}"></td>
                        <td><img src="{{ asset('images/furniture store.jpg')}}"></td>
                        <td><img src="{{ asset('images/fashion.jpg')}}"></td>
                        <td><img src="{{ asset('images/outlet.jpg')}}"></td>
                      </tr>
                      <tr>
                        <td><a href="＃">本屋</a></td>
                        <td><a href="＃">CD・レコード・楽器・楽譜</a></td>
                        <td><a href="＃">家具</a></td>
                        <td><a href="＃">家電</a></td>
                        <td><a href="＃">ファッション</a></td>
                        <td><a href="＃">アウトレット</a></td>
                      </tr>
                    </table>
                </div>
                <div class="card-contents">
                  <h2 class="text-title"><a href="hotels/all_read_list">宿泊施設</a></h2>
                  <table class="contents">
                      <tr>
                        <td><img src="{{ asset('images/hotel.jpg')}}"></td>
                        <td><img src="{{ asset('images/ryokan.jpg')}}"></td>
                      </tr>
                      <tr>
                        <td><a href="hotels/hotel_read_list">ホテル</a></td>
                        <td><a href="hotels/ryokan_read_list">旅館</a></td>
                      </tr>
                    </table>
                </div>
              </div>
            </div>
          </div>
    
 

<!--<footer>-->
<!--<div class="card-contents">-->
<!--  <h2 class="text-title">Access</h2>-->
<!--  <p>東京都渋谷区円山町28-3<br>いちご渋谷道玄坂ビル5F</p>-->
<!--  <p>渋谷駅より徒歩7分</p>-->
<!--</div>-->
<!--  <p class="copyright">(C) 2021 お出かけ総合サイト</p>-->
<!--</footer>-->

@endsection