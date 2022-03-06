<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index()
  {
     $array = [1,2,3,4,5];
    //  $json_array = json_encode($array);
     $str = implode(',', $array);

      return view('test', ['str' => $str]);
  }  //
}
