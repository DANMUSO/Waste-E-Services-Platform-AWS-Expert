<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AWS EXPERT | AWS IMPACT PLUS HACKATHON</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('v1/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="https://aws-experts.s3.amazonaws.com/awsexpert/v1/css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <div class="sign-up-content">
                <form method="POST" action="{{ route('login') }}" class="signup-form">
                    @csrf
                    <h2 class="form-title">Login to AWS Impact Plus Hackathon</h2>


                    <div class="form-textbox">
                        <label for="inputEmail4"><b>Email</b></label>
                        <input id="email" type="email" style="border: 1px solid black;border-radius: 4px;"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <br> <br>
                    <div class="form-textbox">
                        <label for="inputEmail4"><b>Password</b></label>
                        <input id="password" type="password" style="border: 1px solid black;border-radius: 4px;"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-textbox">
                        <br>
                        <input type="submit" name="submit" id="submit" class="submit" value="Login" />

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </form>

                <p class="loginhere">
                    If you don't havae account ? <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 underline">Register</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('v1/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('v1/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>