@extends('master')
@section("content")
<div class="container">
<div class="custom-product">
    
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>My Orders</h3>
            
            <br><br>

            @foreach($orders as $item)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image-cartlist" src="{{asset('images/'.$item->gallery)}}">
                            
                    
                        </a>
                    </div>
                    <div class="col-sm-6">
                            <div class="container">
                                <h3>{{$item->name}}</h3>
                                <h3>Rs {{$item->price}}</h3>
                            </div>
                    
                    </div>
                    
                    
                </div>
            @endforeach

        </div>

    </div>



</div>
</div>
@endsection