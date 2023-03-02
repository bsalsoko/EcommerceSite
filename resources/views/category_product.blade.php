@extends('master')
@section("content")
<h1><center>{{$heading}} products<center></h1>


  <div class="trending-wrapper">
   
    <div class="row">
      @foreach($products as $item)
        <div class="col-md-3" style="width:18rem; margin:10px; padding:10px;">
    
          <div class="card" style="width:18rem; margin: 20px; padding:20px;">
            <a href="/detail/{{$item['id']}}">

              <img src="{{asset('/images/'.$item->gallery)}}" class="card-img-top " height="150" width="100%" alt="{{$item->name}}">
              <div class="card-body">

                <h5 class="card-title">{{$item['name']}}</h5></a>
                <p class="card-text">{{$item['description']}}</p>
              </div>
            </a>
          </div>
      
        </div>
    @endforeach
   </div>

  </div>

@stop