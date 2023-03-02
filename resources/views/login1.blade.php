<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <style>
      .container {
        width: 500px;
        margin: 0 auto;
        text-align: center;
        padding: 50px;
        background-color: #f2f2f2;
        border-radius: 10px;
      }
      
      input[type="email"],
      input[type="password"] {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border-radius: 10px;
        border: 2px solid gray;
      }
      
      button[type="submit"] {
        width: 20%;
        padding: 10px;
        border-radius: 10px;
        background-color: blue;
        color: white;
        border: none;
        margin-top: 20px;
      }
      
      #error-message {
        color: red;
        margin-top: 20px;
        display: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Login</h1>
      @if ($errors->has('message'))
        <div class="alert alert-danger">
          {{ $errors->first('message') }}
        </div>
      @endif
      <form action="/login1" method="POST">
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
    
  </body>
</html>