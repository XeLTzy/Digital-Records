<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication mode</title>
</head>

<body>

    <main class="form-signin w-100 mx-auto alignt-items-center p-5">

        <div class="d-flex flex-column alignt-items-center mx-auto my-5">
            <div class="p-2 mx-auto">
                <img class="d-flex justify-content-center mx-auto" style="height: 80px;" src="{{ asset('assets\images\logo-v5.png') }}">
                <h1 class="h3 mb-3 fw-normal">Verification</h1>
            </div>
            <div class="p-2 w-25 mx-auto">
                <form action="{{ route('two-factor.verify') }}" method="post"">
                @csrf
                <div class=" p-2 w-25 mx-auto">
                    <label for="code" class="form-label">Verification</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="code" min="5" maxlength="5" required>
            </div>
            <div class="p-2 w-25 mx-auto">
                <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>
            </div>
            </form>

        </div>
    </main>
    <!-- <div class="mb-3">
        <form action="{{ route('two-factor.verify') }}" method="post">
            @csrf
            <label for="code" class="form-label">Enter Verification Code</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="code" required>
        </form>
        @if ($errors->has('code'))
        <div class="text-danger">
            {{ $errors->first('code') }}
        </div>
        @endif
    </div> -->

</body>

</html>