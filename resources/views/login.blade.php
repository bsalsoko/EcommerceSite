@extends('master')
@section("content")


@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<div >
    <center><b><h3>"Users should be loggedin in order to buy a product"<h3></b></center>

</div>
<div class="container custom-login">


    <div class="row" >
        <div class="col-sm-offset-4 col-sm-4">
        @if ($errors->has('message'))
        <div class="alert alert-danger">
          {{ $errors->first('message') }}
        </div>
      @endif
        <form action="/login" method="POST" onsubmit="validatesubmit(event)">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"  oninput="validateEmail()">
                <div  class="form-text">We'll never share your email with anyone else.</div>
                <span id="email-error" style="color:red;"></span>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" oninput="validatePassword()">
                <span id="message" style="color:red;"></span><br>
                <button type="button" class="btn btn-success" onclick="togglePassword()">Show Password </button>

            </div>
 
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        


    <script>
      window.formvalid={email:false,password:false};



function togglePassword() {
  var passwordInput = document.getElementById("password");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}


function validatesubmit(event){
    if(!formvalid.email || !formvalid.password ){
      event.preventDefault();
      alert('invalid input');
    }    
  
}

function validatePassword() {
  var password = document.getElementById("password").value;
  var message = document.getElementById("message");
  
  if (password.length >= 8 && password.length <= 20) {
    message.innerHTML = "";
    formvalid.password=true;

  } else {
    message.innerHTML = "Password must be between 8 and 20 characters long.";
    formvalid.password=false;

  }
  
}

function validateEmail() {
    var email = document.getElementById("email").value;
    var emailError = document.getElementById("email-error");
    var emailRegex = /^([a-zA-Z0-9_\.\-])+\@((gmail|yahoo|hotmail|outlook)\.[a-zA-Z]{2,3})$/;

    if (emailRegex.test(email)) {
      emailError.innerHTML = "";
      formvalid.email=true;
    } else {
      emailError.innerHTML = "Invalid email address.";
      formvalid.email=false;

    }
  }

</script>
</div>
</div>
    </div>

@endsection
