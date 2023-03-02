@extends('master')
@section("content")
<div class="custom-product">
    <div class="row">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
    <div class="trending-wrapper">

<h3>Result for Products</h3>

@foreach($products as $item)
<div class="searched-item">
    <a href="detail/{{$item['id']}}">
    <img class="trending-image" src="{{asset('images/'.$item['gallery'])}}">
    <div class="">
        <h2>{{$item['name']}}</h2>
    </div>

    </a>
    <h5>{{$item['description']}}</h5>
</div>
@endforeach
    </div>
    
</div>
</div>
@endsection