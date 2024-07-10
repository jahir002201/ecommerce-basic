
<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-account-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 14:54:22 GMT -->
<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link href="{{asset('backend/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
        <section class="content-main mt-80 mb-80">
            <div class="card mx-auto card-login">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create an Account</h4>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required>                        </div> <!-- form-group// -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required>
                        </div> <!-- form-group// -->    
                        <div class="mb-3">
                            <label class="form-label">Create password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div> <!-- form-group// -->
                        <div class="mb-3">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                         </div> <!-- form-group  .// -->
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary w-100"> Register </button>
                        </div> <!-- form-group// -->
                    </form>
                    <p class="text-center small text-muted mb-15">or sign up with</p>

                    <p class="text-center mb-2">Already have an account? <a href="{{route('login')}}">Sign in now</a></p>
                </div>
            </div>
        </section>

    </main>
    <script src="{{asset('backend/assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/vendors/bootstrap.bundle.min.js')}}""></script>
    <script src="{{asset('backend/assets/js/vendors/jquery.fullscreen.min.js')}}""></script>
    <!-- Main Script -->
    <script src="{{asset('backend/assets/js/main.js')}}"" type="text/javascript"></script>
</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-account-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 14:54:22 GMT -->
</html>