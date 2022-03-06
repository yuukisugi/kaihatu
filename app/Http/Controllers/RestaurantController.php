<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;
use App\History;
use Carbon\Carbon;

class RestaurantController extends Controller
{
    // 作成したviewを追記
  public function add()
  {
    return view('restaurants.create');
    }
public function create(Request $request)
  {
     
      $this->validate($request, Restaurant::$rules);
      $restaurant = new Restaurant;
      $form = $request->all();
      
      if(isset($form['image_main'])){
        $path = $request->file('image_main')->store('public/image');
        // dd($path);
        $restaurant->image_main = basename($path);
      } 
      else {
          $restaurant->image_main = null;
      }
      
       if(isset($form['image_sample'])){
        $path = $request->file('image_sample')->store('public/image');
        $restaurant->image_sample = basename($path);
      } 
      else {
          $restaurant->image_sample = null;
      }
      
     
      unset($form['image_main']);
      unset($form['image_sample']);
      
      $restaurant->fill($form);
      $restaurant->save();
      return redirect('restaurants/create');
      
      $history = new History();
      $history->restaurant_id = $restaurant->id;
      $history->edited_at = Carbon::now();
      $history->save();

      return redirect('restaurants/');
  }  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Restaurant::where('name', 'like', "%$cond_title%")->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Restaurant::all();
      }
      return view('restaurants.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $restaurant = Restaurant::find($request->id);
      if (empty($restaurant)) {
        abort(404);    
      }
      return view('restaurants.edit', ['restaurant_form' => $restaurant]);
  }
  
  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, restaurant::$rules);
      // News Modelからデータを取得する
      $restaurant = History::find($request->id);
      // 送信されてきたフォームデータを格納する
      $restaurant_form = $request->all();
      unset($restaurant_form['_token']);

      // 該当するデータを上書きして保存する
      $restaurant->fill($restaurant_form)->save();

      return redirect('restaurants');
  }
 public function read_list(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Restaurant::where('name', 'like', "%$cond_title%")->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Restaurant::all();
      }
      return view('restaurants.read_list', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function read_article(Request $request)
  {
    $restaurant = Restaurant::find($request->id);


      if (empty($restaurant)) {
        abort(404);    
      }  
     
      return view('restaurants.read_article', ['restaurant_form' => $restaurant]);
}
}
