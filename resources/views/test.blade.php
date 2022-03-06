@@extends('layouts.app')

@section('title', '基本情報の新規作成')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <h2>ホーム画面</h2>
                <form action="{{ action('HomeController@home') }}" method="get" enctype="multipart/form-data">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ secure_asset('js/test.js') }}" defer></script>
<input type="hidden"id="str" value="{{ $str }}"/>{{-- HTMLにおとしこむ--}}


@endsection


@php
$arr1 = [1,2,3,4,5];
$json_array = json_encode($arr1);
var_dump($json_array);

@endphp
<!DOCTYPE html>
<head>
  <header>
  <div class="container">
    <div class="header-title-area">
      <h1 class="logo">血圧グラフ</h1>
    </div>
  </div>
  <div class="form-group row">
      <label class="col-md-2"></label>
      <div class="col-md-10">
          <input type="text" class="form-control" name="name" value="{{ old('name') }}">
      </div>
  </div>
</header>
<meta charset="utf-8">
<title>TEST</title>

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"
  integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg=="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div style="width:800px">
  <canvas id="mychart"></canvas>
</div>
<script>
// let js_array = <?php echo $json_array; ?>
// alert(js_array);
//alert(“test”);
//console.log(“test”);
//var test = ‘test’;



</script>
</div>
</body>
</html>