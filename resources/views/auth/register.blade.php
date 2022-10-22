<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('v1/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="https://aws-experts.s3.amazonaws.com/awsexpert/v1/css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <div class="sign-up-content">
                <form method="POST" action="{{ route('register') }}" class="signup-form">
                    @csrf
                    <h2 class="form-title">Register to AWS Impact Plus Hackathon</h2>


                    <div class="form-textbox">
                        <label for="inputEmail4"><b>Name</b></label>
                        <input id="name" style="border: 1px solid black;border-radius: 4px;" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <br> <br>
                    <div class="form-textbox">
                        <label for="inputEmail4"><b>Email</b></label>
                        <input id="email" style="border: 1px solid black;border-radius: 4px;" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <br> <br>
                    <div class="form-textbox">
                        <label for="inputEmail4"><b>Phone Number</b></label>
                        <input id="phone" style="border: 1px solid black;border-radius: 4px;" type="phone"
                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                            value="{{ old('phone') }}" required autocomplete="Phone Number">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <br> <br>
                    <div class="form-textbox">
                        <label for="inputEmail4"><b>Password</b></label>
                        <input id="password" style="border: 1px solid black;border-radius: 4px;" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <br> <br>
                    <div class="form-textbox">
                        <label for="inputEmail4"><b> Confirm Pwd</b></label>
                        <input id="password-confirm" style="border: 1px solid black;border-radius: 4px;" type="password"
                            class="form-control" name="password_confirmation" required autocomplete="new-password">

                    </div>

                    <div class="form-textbox">
                        <br>
                        <input type="submit" name="submit" id="submit" class="submit" value="Register" />

                    </div>
                </form>

                <p class="loginhere">
                    Already have an account ? <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log
                        in</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('v1/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('v1/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>