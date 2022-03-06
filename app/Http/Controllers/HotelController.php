<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;
use App\History;
use Carbon\Carbon;
use App\HotelReview;

class HotelController extends Controller
{
    // 作成したviewを追記
  public function add()
  {
    return view('hotels.create');
    }
public function create(Request $request)
  {
      // dd($request);
      // 以下を追記
      // Varidationを行う
      $this->validate($request, Hotel::$rules);
      $hotel = new Hotel;
      $form = $request->all();
      // if(isset($form['image'])){
      //   $path1 = $request->file('image_main')->store('public/image');
      //   $path2 = $request->file('image_building')->store('public/image');
      //   $path3 = $request->file('image_spa')->store('public/image');
      //   $path4 = $request->file('image_equipment')->store('public/image');
      //   $hotel->image_main = basename($path);
      //   $hotel->image_building = basename($path);
      //   $hotel->image_spa = basename($path);
      //   $hotel->image_equipment = basename($path);
      // } 
      // else {
      //     $hotel->image_main = null;
      //     $hotel->image_building = null;
      //     $hotel->image_spa = null;
      //     $hotel->image_equipment = null;
      // }
      if(isset($form['image_main'])){
        $path = $request->file('image_main')->store('public/image');
        // dd($path);
        $hotel->image_main = basename($path);
      } 
      else {
          $hotel->image_main = null;
      }
      
       if(isset($form['image_building'])){
        $path = $request->file('image_building')->store('public/image');
        $hotel->image_building = basename($path);
      } 
      else {
          $hotel->image_building = null;
      }
      
       if(isset($form['image_spa'])){
        $path = $request->file('image_spa')->store('public/image');
        $hotel->image_spa = basename($path);
      } 
      else {
          $hotel->image_spa = null;
      }
      
       if(isset($form['image_equipment'])){
        $path = $request->file('image_equipment')->store('public/image');
        $hotel->image_equipment = basename($path);
      } 
      else {
          $hotel->image_equipment = null;
      }

      
      unset($form['image_main']);
      unset($form['image_building']);
      unset($form['image_spa']);
      unset($form['image_equipment']);
      
      $hotel->fill($form);
      $hotel->save();
      return redirect('hotels/create');
      
      $history = new History();
      $history->hotel_id = $hotel->id;
      $history->edited_at = Carbon::now();
      $history->save();

      return redirect('hotels/');
  }  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Hotel::where('name', 'like', "%$cond_title%")->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Hotel::all();
      }
      return view('hotels.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $hotel = Hotel::find($request->id);
      if (empty($hotel)) {
        abort(404);    
      }
      return view('hotels.edit', ['hotel_form' => $hotel]);
  }
  
  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Hotel::$rules);
      // News Modelからデータを取得する
      $hotel = History::find($request->id);
      // 送信されてきたフォームデータを格納する
      $hotel_form = $request->all();
      unset($hotel_form['_token']);

      // 該当するデータを上書きして保存する
      $hotel->fill($hotel_form)->save();

      return redirect('hotels');
  }
 public function read_list(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Hotel::where('name', 'like', "%$cond_title%")->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Hotel::all();
      }
      return view('hotels.read_list', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function read_article(Request $request)
  {
    $hotel = Hotel::find($request->id);
      if (empty($hotel)) {
        abort(404);    
      }  
     
      return view('hotels.read_article', ['hotel_form' => $hotel]);
}
 public function add_review(Request $request)
  {
        $review = new HotelReview();
        $review->hotel_id = $request->hotel_id;
        $review->review_text = $request->review_text;
        $review->save();
      // News Modelからデータを取得する
      // $hotel = Hotel::find($request->id);
      // if (empty($hotel)) {
      //   abort(404);    
      // }
      // return view('hotels.read_article', ['hotel_form' => $hotel]);
      // return view('hotels.edit', ['hotel_form' => $hotel]);
      // Validationをかける
      // $this->validate($request, HotelReview::$rules);
      // News Modelからデータを取得する
      // $hotel = Hotel::find($request->id);
      // 送信されてきたフォームデータを格納する
//       $hotel_form = $request->all();
//       unset($hotel_form['_token']);
// //       dump($hotel_form);
//        dump($hotel);
// return;
      // 該当するデータを上書きして保存する
      // $hotel->fill($hotel_form)->save();
      return redirect()->back();
     
  }
}
