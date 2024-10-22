<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>

    {{-- link bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" rel="stylesheet" />

</head>

<body>
    {{-- <div class="container">
        <h1>Login</h1>

        {{-- error 
        @if(Session::has('status'))
        <div class="alert alert-danger mt-3">
            {{ Session::get('status')}}
        </div>
        @endif

        <form action="/login" method="post">
            @csrf
            <div>
                <label for="email">email</label>
                <input class="form-control" type="text" name="email" />
            </div>
            <div>
                <label for="password">password</label>
                <input class="form-control" type="password" name="password" />
            </div>
            <button class="btn btn-primary mt-3" type="submit">
                Login
            </button>
            <a href="/register">register</a>
        </form>
    </div> --}}


    <div class="login-card">
        <img src="/production/assets/logo.96bf599c.svg" alt="tabnine-logo" width="200px" class="logo">
      
        <span class="signup-prompt">
          Don't have an account? 
          <a href="/signup" data-cy="signup-link" class="signup-link">Sign up</a>
        </span>
      
        <form id="signin-form" novalidate class="signin-form">
          <div class="input-field">
            <label for="email" class="label">Email</label>
            <input id="email" type="email" placeholder="Enter your email" class="input" name="email">
          </div>
      
          <div class="input-field">
            <label for="password" class="label">Password</label>
            <input id="password" type="password" placeholder="Enter your password" class="input" name="password">
            <i class="password-icon">
              <!-- SVG untuk ikon mata -->
            </i>
          </div>
      
          <a href="/forgot-password" class="forgot-password-link">Forgot Password?</a>
      
          <button type="submit" class="login-button">
            <span class="button-caption">Sign In</span>
          </button>
      
          <div class="divider">
            <hr class="divider-line">
            <span class="divider-text">Or sign in with</span>
            <hr class="divider-line">
          </div>
      
          <div class="provider-buttons">
            <button type="button" class="provider-button github-button">
              <!-- SVG untuk ikon GitHub -->
              <span class="provider-name">GitHub</span>
            </button>
      
            <button type="button" class="provider-button microsoft-button">
              <!-- SVG untuk ikon Microsoft -->
              <span class="provider-name">Microsoft</span>
            </button>
      
            <button type="button" class="provider-button google-button">
              <!-- SVG untuk ikon Google -->
              <span class="provider-name">Google</span>
            </button>
          </div>
        </form>
      </div>
      
    
</body>

</html>