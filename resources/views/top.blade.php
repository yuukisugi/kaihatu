@extends('layouts.app')

@section('title', '基本情報の新規作成')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<div class="container">
  <div class="main">
    <h1>地域から探す</h1>
    <div>
      <div class="district-container">
        <img src="{{ asset('images/map of Japan.jpg')}}">
        <ul class="district-list f-container">
            <a href="hokkaidou.html">北海道</a>
            <a href="touhoku.html">東北</a>
            <a href="kantou.html">関東</a>
            <a href="tyuubu.html">中部</a>
            <a href="kinnki.html">近畿</a>
            <a href="cyuugoku_sikoku.html">中国・四国</a>
            <a href="kyuusyuu_okinawa.html">九州・沖縄</a>
        </ul>　
      </div>
    </div>
  
      <div class="card-contents">
        <h2 class="text-title">飲食</h2>
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
              <td>和食</td>
              <td>洋食</td>
              <td>焼肉</td>
              <td>寿司</td>
              <td>ラーメン</td>
              <td>カフェ・喫茶店</td>
            </tr>
          </table>
      </div>
      <div class="card-contents">
        <h2 class="text-title">アウトドア</h2>
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
              <td>映画館</td>
              <td>遊園地・テーマパーク</td>
              <td>水族館</td>
              <td>動物園</td>
              <td>山登り・ハイキング</td>
              <td>フィッシング</td>
            </tr>
          </table>
      </div>
      <div class="card-contents">
        <h2 class="text-title">ショッピング</h2>
        <table class="contents">
            <tr>
              <td><img src="{{ asset('images/book store.jpg')}}" alt=" " class="public-image" /></td>
              <td><img src="{{ asset('images/CD shop.jpg')}}" alt=" " class="public-image" /></td>
              <td><img src="{{ asset('images/home appliances.jpg')}}" alt=" " class="public-image" /></td>
              <td><img src="{{ asset('images/furniture store.jpg')}}" alt=" " class="public-image" /></td>
              <td><img src="{{ asset('images/fashion.jpg')}}" alt=" " class="public-image" /></td>
              <td><img src="{{ asset('images/outlet.jpg')}}" alt=" " class="public-image" /></td>
            </tr>
            <tr>
              <td>本屋</td>
              <td>CD・レコード・楽器・楽譜</td>
              <td>家具</td>
              <td>家電</td>
              <td>ファッション</td>
              <td>アウトレット</td>
            </tr>
          </table>
      </div>
      <div class="card-contents">
        <h2 class="text-title">宿泊施設</h2>
        <table class="contents">
            <tr>
              <td><img src="{{ asset('images/hotel.jpg')}}" alt=" " class="public-image" /></td>
              <td><img src="{{ asset('images/ryokan.jpg')}}" alt=" " class="public-image" /></td>
            </tr>
            <tr>
              <td><a href="hotels/read_list">ホテル</a></td>
              <td>旅館</td>
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

</html>
@endsection