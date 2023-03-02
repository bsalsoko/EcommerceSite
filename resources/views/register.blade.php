@extends('master')
@section("content")


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div style=" padding:20px;">
    <center><b><h3>Registration<h3></b></center>

</div>
<div class="container custom-login">


    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
        

        <form action="/register" method="POST" onsubmit="validatesubmit(event)"  >
            @csrf
            <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter your Name" oninput="validateName()">
    <span id="name-message" style="color:red;"></span>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Email" id="email" oninput="validateEmail()">
    <span id="email-error" style="color:red;"></span>
    <div class="form-text">We'll never share your email with anyone else.</div>
  </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" oninput="validatePassword()" class="form-control" id="password">
                <span id="message" style="color:red;"></span><br>
                <button type="button" id="togglePassword"> Show/Hide Password </button>


            </div>
 
            <button type="submit" class="btn btn-primary"> Register</button>
        </form>



       <script>
window.formvalid={name:false,email:false,password:false};




            $(document).ready(function() {
  $("#togglePassword").click(function() {
    var password = $("#password");
    if (password.attr("type") === "password") {
      password.attr("type", "text");
    } else {
      password.attr("type", "password");
    }
  });
});

function validatesubmit(event){
    if(!formvalid.name || !formvalid.email || !formvalid.password ){
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
function validateName() {  
  var name = document.getElementById("name").value;
  var nameMessage = document.getElementById("name-message");
  
  if (/\d/.test(name)) {
    nameMessage.innerHTML = "Name cannot contain numbers.";
    formvalid.name=false;

  } else {
    nameMessage.innerHTML = "";
    formvalid.name=true;

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
