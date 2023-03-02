<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SportsHub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body style="background-color:#FFFFFF;">
    
    <! -- heading starts here -->
    <nav class="navbar navbar-expand-lg bg-black" style="padding: 20px;">
    <div class="container-fluid">
        <a class="navbar-brand" style="color:white;" href="/">
            SportsHub
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " style="color:white;" aria-current="page" href="/">HOME</a>
                </li>
                @if(Session::has('user'))
                <li class="nav-item">
                    <a class="nav-link" style="color:white;" href="myorders">ORDER</a>
                </li>
                @endif
        
                <li class="nav-item">
                    <a href="aboutus" style="color:white;" class="nav-link">ABOUT US</a>
                </li>

                <li>
                    @if(isset($category))    
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" >
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown" >
                                    <a class="nav-link dropdown-toggle" style="color:white;" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    CATEGORY
                                    </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    @foreach ($category as $cat)
                                        <li><a class="dropdown-item" href="{{"/product/category/".$cat->category}}">{{$cat->category}}</a></li>
                  
                                    @endforeach
                                </ul>
                                </li>
                            </ul>
        
        
                        </div>
                    @endif
                </li>
        
    

            </ul>
   
            <form action="/search" class="d-flex" role="search">
                <input type="text" name="query" class="form-control search-box"  placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" float="left" type="submit" style="color:white";>Search</button>
            </form>
  
                @if(Session::has('user'))
                <ul class="navbar-nav mr-auto ">
                    <li class="header-cart" style="margin-top: 7.5px;">
                        <a  href="/cartlist">CART</a>
                    </li>
                
                @endif



                @if(Session::has('user'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" style="color:white" role="button" data-bs-toggle="dropdown">{{Session::get('user')['name']}}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/logout" >Logout</a></li>
                        </ul>
                    </li>
                @else
                    <ul class="navbar-nav mr-auto ">
                    <li><a class="header-login"  href="/login" style="color:white";>LOGIN</a></li>
                    <li><a class="header-login" href="/register" style="color:white";>REGISTER</a></li>
                    </ul>

                @endif
                    </ul>
        
          
        
        
      

        
      
    </div>
    </div>
</nav>
@yield('content')

    <br>
    <br>
    {{View::make('footer')}}

    

</body>
<style>
    .custom-login{
        height: 500px;
        padding: 100px 0px 0px 500px;
    }

    img.slider-img{
        height: 400px !important
    }

    

    .custom-product{
    }

    .slider-text{
        background-color: #35443585 !important;
    }

    .trending-image{
        height: 100px;
        text-align:center;
    }

    .trending-image-cartlist{
        height: 150px;
    }
    .trending-image-search{
        height: 300px;
    }

    .trending-item{
        float:left;
        
        height:200px;
        margin:5px;
    }

    .trending-wrapper{
        margin: 30px;
        float:left;
    }
    .detail-img{
        height: 300px;
        margin: 30px;
    }
    .col-sm-6{
        padding: 50px;
    }
    .search-box{
        width: 500px !important
    }
    
    .cart-list-divider{
        border-bottom:1px solid #ccc;
        margin-bottom:20px;
        padding-bottom:20px;
    }
    .dropdown-toggle{
        margin-left:30px;
    }
    .header-cart{
        margin-left:20px;
        margin-right:10px;
    }
    .header-login{
        padding:15px;
    }

    
    

    
</style>

</html>