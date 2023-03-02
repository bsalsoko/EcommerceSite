<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1> Add Member </h1>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form action="/addmember" method="POST" onsubmit="validatesubmit(event)">
            @csrf
             <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label><br>
                <input type="text" name="name" class="" id="name" placeholder="Enter name of user" oninput="validateName()">
                <span id="name-message" style="color:red;"></span>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email" id="email" oninput="validateEmail()">
                <span id="email-error" style="color:red;"></span>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" oninput="validatePassword()" class="form-control" id="password">
                <span id="message" style="color:red;"></span><br>
                <button type="button" id="togglePassword"> Show/Hide Password </button>
            </div>
 
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <a href="/adminuserscontrol"> Go Back to Control User</a><br>

</div>
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

</body>

</html>