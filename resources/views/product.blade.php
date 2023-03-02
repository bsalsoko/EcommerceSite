@extends('master')
@section("content")

<body style="background-color:black;">
  <div class="custom-product" >


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="height:600px; width:100%;">


      <div class="carousel-item active"  style="height:400px; width:100%; text-align:center;">
      <a href="detail/22">
        <img src="{{asset('images/slider/mu.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="background-color:#35443585; height: 100px; text-align:center; position: absolute; top: 450px;">
            <h5>Manchester United Football Jersey</h5>
          <!-- This is a comment <p>Some representative placeholder content for the first slide.</p>-->
        </div>
      </a>
      </div>


      <div class="carousel-item"  style="height:400px; width:100%;">
      <a href="detail/21">

        <img src="{{asset('images/slider/arsenal.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="background-color:#35443585; height: 100px; position: absolute; top: 450px;">
        <h5>Arsenal Football Jersey</h5>
          <!-- This is a comment<p>Some representative placeholder content for the second slide.</p>-->
        </div>
      </a>
      </div>


      <div class="carousel-item"  style="height:400px; width:100%;">
      <a href="detail/2">
        <img src="{{asset('images/slider/mc.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="background-color:#35443585; height: 100px; position: absolute; top: 450px;">
        <h5>Manchester City Football Jersey</h5>
          <!-- This is a comment<p>Some representative placeholder content for the third slide.</p>-->
        </div>
      </a>
      </div>


    </div>



    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




    <div style="background-color:black;">

      <p class="container"  style="font-family:courier; color:white; padding:20px; font-size:120%; text-align:center;" >
        Sports Hub is a premier sports website that caters to the needs of sports enthusiasts in Biratnagar.
        We offer a wide range of services, including sports news and updates in our social media sites and sports equipment sales.
        Our team of experts is dedicated to providing accurate and up-to-date information on various sports, including football,
        cricket, basketball, and many more through our facebook pages. We understand the importance of staying current in the sports world and strive to provide
        our audience with the most relevant and useful information. Our goal is to provide a space where the sports community in Biratnagar can come together to share their passion for sports.
      </p>

      

      <img src="{{ asset('images/sportshub2.jpg') }}" style="width:100%; height:60%;" alt="sports hub Image">

      

    </div>




      <div class="trending-wrapper" style="background-color:black; color:white">
        <h3><center><u>OUR PRODUCTS</u></center></h3>
        @foreach($products as $item)
          <div class="trending-item" style="padding:20px;">
          <div class="card" style="width:18rem;  padding:0px; margin:10px;">

                    <a href="detail/{{$item['id']}}">
                        <img src="{{asset('/images/'.$item->gallery)}}" class="card-img-top " height="150" width="100%" alt="{{$item->name}}">
 </a>

                    <div class="">
                        <h5 style="text-align:center; color:black;">{{$item['name']}}</h5>
                    </div>
                    
</div>    
          </div>
        @endforeach

      </div>

  </div>
</body>
@endsection