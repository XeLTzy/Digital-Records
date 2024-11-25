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

        <div class="d-flex flex-column alignt-items-center mx-auto my-5">
            <div class="p-2 mx-auto">
                <img class="d-flex justify-content-center mx-auto" style="height: 80px;" src="{{ asset('assets\images\logo-v5.png') }}">
                <h1 class="h3 mb-3 fw-normal">Password Reset</h1>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="p-2 w-25  mx-auto">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <button class="btn btn-primary w-100 py-2" type="submit">Send password reset</button>
                </div>
            </form>

        </div>
    </main>


    <script src="{{ asset('frameworks/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>