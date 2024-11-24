<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="mb-3">
        <form action="{{ route('two-factor.verify') }}" method="post">
            @csrf
            <label for="code" class="form-label">Enter Verification Code</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="code" required>
        </form>
    </div>

</body>

</html>