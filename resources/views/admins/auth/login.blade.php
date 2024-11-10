<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="icon" href="/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">

    {{-- link bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" rel="stylesheet" />

</head>

<body>

<main id="Login" style="min-height:100vh">
  <section class="section bg-light min-vh-100 pt-36 pb-36 flex items-center" style="padding-top:180px;padding-bottom:180px">
    <div class="container mx-auto px-4">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card card-rounded border-0 shadow">
            <div class="card-body p-5">
              
              <div class="d-flex justify-content-center mb-4">
                <img src="/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png" alt="Udakost Logo" width="150px" class="w-36">
              </div>
              
              <p class="text-center text-gray-600 mb-4">
                Don't have an account? 
                <a href="/register" class="text-muted font-semibold hover:underline">Sign up</a>
              </p>
              
              {{-- error --}} 
              @if(Session::has('status'))
              <div class="alert alert-danger mt-3">
                  {{ Session::get('status')}}
              </div>
              @endif

              <form action="{{ route('login.process') }}" method="POST">
                @csrf
                <label for="email" class="form-label text-gray-700 font-medium">Email</label>
                <div class="mb-4">
                  <input class="form-control form-control-user shadow-sm" type="email" name="email" placeholder="Enter your email..." />
                </div>
  
                <label for="password" class="form-label text-gray-700 font-medium">Password</label>
                <div class="mb-4 relative">
                  <input class="form-control form-control-user shadow-sm" type="password" name="password" placeholder="Enter your password..." />
                  {{-- <div class="text-right mb-4">
                    <a href="#" class="text-muted text-blue-600 hover:underline">Forgot Password?</a>
                  </div> --}}
                </div>
  
                <div class="d-grid gap-2 py-4">
                <button type="submit" class="btn btn-primary w-full py-2 rounded-md font-semibold hover:bg-blue-700 focus:outline-none transition">
                  Sign In
                </button>
              </div>
  
                <!-- Divider with Or -->
                {{-- <div class="d-flex items-center my-2">
                  <hr class="flex-grow-1 border-gray-250">
                  <span class="px-3 text-gray-500 text-sm">Or sign in with</span>
                  <hr class="flex-grow-1 border-gray-250">
                </div> --}}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

</body>

</html>