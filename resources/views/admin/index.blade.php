<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Admin Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('admin/assets/css/signin.css')}}" rel="stylesheet">
  </head>
  <body class="text-center" style="background-color: #fff;">
  
  <main class="form-signin">
    <form action="{{url('login')}}" method="POST">
      @csrf
      <img class="mb-1" src="{{asset('admin/img/logo.svg')}}" alt="" width="100" height="70">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      @error('email')
      <div class="alert alert-danger">
        {{$message}}
      </div>
      @enderror
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value='{{old("email")}}'>
        <label for="email" >Email </label>
      </div>
      <div class="form-floating" style="
      top: 7px;">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        <label for="password" >Password</label>
      </div>

      
      <button class="w-100 btn btn-lg btn-primary" style="margin-top: 20px;" type="submit">Sign in</button>
      <p class="mt-3 mb-3 text-muted">&copy; 2021</p>
    </form>
  </main>


    
  </body>
</html>
