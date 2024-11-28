<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('frameworks/bootstrap-5.3.3/dist/css/bootstrap.min.css') }}">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

</head>

<body>

    <main class="form-signin w-100 mx-auto alignt-items-center p-5">

        <div class="d-flex flex-column alignt-items-center mx-auto mb-3">
            <div class="p-2 mx-auto">
                <img class="d-flex justify-content-center mx-auto" style="height: 80px;" src="{{ asset('assets\images\logo-v5.png') }}">
                <h1 class="h3 mb-3 fw-normal">Welcome back</h1>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="p-2 w-25  mx-auto">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember">
                    <label class="form-check-label" for="flexCheckDefault" name="remember">
                        Remember me
                    </label>

                </div>
                <div class="p-2 w-25 mx-auto">
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                </div>
                <div class="p-2 w-25 d-flex justify-content-end mx-auto">
                    <p><a class="link-opacity-100" href="{{ route('password.request') }}">Forgot password?</a></p>
                </div>
                <div>
                    <p class="text-center w-100">
                            Don't have an account yet? 
                        <a href="{{ route('register') }}" class="text-primary">Sign up</a>
                    </p>
                </div>

            </form>

        </div>
    </main>


    <script src="{{ asset('frameworks/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>