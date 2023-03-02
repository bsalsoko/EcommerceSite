<nav class="navbar navbar-expand-lg bg-light" style="padding: 20px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/contactus">SportsHub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorders">order</a>
        </li>
        
        <li class="nav-item">
          <a href="aboutus" class="nav-link">About Us</a>
        </li>

        <li>
        @if(isset($category))    
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      category
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
          <button class="btn btn-outline-success" float="left" type="submit">Search</button>
        </form>
  
        @if(Session::has('user'))
      <ul class="navbar-nav mr-auto ">
        <li class="header-cart">
          <a  href="/cartlist">cart</a>
        </li>
        @endif



        @if(Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{Session::get('user')['name']}}</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>
        @else
        <ul class="navbar-nav mr-auto ">
          <li><a class="header-login" href="/login">Login</a></li>
          <li><a class="header-login" href="/register">Register</a></li>
        </ul>

        @endif
      </ul>
        
          
        
        
      

        
      
    </div>
  </div>
</nav>