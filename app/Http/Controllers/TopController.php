<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    // 作成したviewを追記
  public function index()
  {
    return view('top');
    }
}