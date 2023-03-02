@extends('master')
@section("content")
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{asset('images/'.$product['gallery'])}}" alt=""><br>
        </div>
        <div class="col-sm-6">
            <a href="/"> Go Back </a>
            <h1>{{$product['name']}}</h1>
            <h3>Price:{{$product['price']}}</h3>
            <h5>Details:{{$product['description']}}</h5>
            <h4>Category:{{$product['category']}}</h4>

            <br><br>
            <form action="/add_to_cart" method="POST">
                            <table border="1">
            <tr>
                <td>
            <h3>select size</h3>
            <input type="checkbox" id="small" name="size" value="small">
            <label for="small">Small</label><br>

            <input type="checkbox" id="medium" name="size" value="medium" >
            <label for="medium">Medium</label><br>

            <input type="checkbox" id="large" name="size" value="large">
            <label for="large">Large</label><br>
</td>
                <!-- <td style="padding: 20px;">
                Stocks available: {{$product['quantity']}}<br>
                <!-- Enter no. of products required:            <input type="text" id="product_quantity" name="product_quantity" value="1" min="1"> -->
    <!-- <label for="product_quantity">Enter no. of products required:</label>
                            <input type="number" id="product_quantity" name="product_quantity" value="{{ old('product_quantity', '1') }}" min="1" max="{{$product['quantity']}}">
                            @error('product_quantity')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --> -->
                        <td style="padding: 20px;">
    Stocks available: 
    @if($product['quantity'] == 0)
        <span style="color:red;">Out of Stock</span>
    @else
        {{$product['quantity']}}
        <br>
        <label for="product_quantity">Enter no. of products required:</label>
        <input type="number" id="product_quantity" name="product_quantity" value="{{ old('product_quantity', '1') }}" min="1" max="{{$product['quantity']}}">
        @error('product_quantity')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    @endif
</td>

    <!-- @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
                </td>

</tr>

</table>
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary"> Add to Cart</button>

            </form>
            <br><br>
            <button class="btn btn-success"> Buy Now</button>
            <br><br>


        </div>
    </div>
    

@endsection