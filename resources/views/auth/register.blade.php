<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>


    <link rel="stylesheet" href="{{ asset('frameworks/bootstrap-5.3.3/dist/css/bootstrap.min.css') }}">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <style>
        #terms-container {
            display: none;
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }

        #close-terms {
            display: block;
            margin: 10px 0;
            color: red;
            cursor: pointer;
        }

        img{
            display: block;
            margin: 0 auto; /* Center horizontally */
            max-width: 100%; /* Ensure responsiveness */
            height: 220px; /* Maintain aspect ratio */
            width: 310px;
            margin-top: 0px;
        }

        body {
            text-align: center;
        }
    </style>
</head>

<body>

    <main class="mx-auto alignt-items-center p-5">
        <div class="container-fluid p-3">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="mx-auto">
                            <img class="d-flex justify-content-center mx-auto" style="height: 220px; width:310px; margin-bottom: 90px;" src="{{ asset('assets\images\dental-logo-large.jpg')}}">
                        </div>
                            @if(Session('error'))
                                <div class="alert alert-danger">{{ Session('error') }}</div>
                            @endif
                        <div class="col-xl-3 mb-2 has-validation">
                            <label for="firstname" class="form-label">First Name *</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
                            <div class="valid-feedback">
                                Looks good
                            </div>
                            @error('firstname')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-3 mb-2">
                            <label for="middlename" class="form-label">Middle Name *</label>
                            <input type="text" class="form-control" id="middlename" name="middlename" value="{{ old('middlename') }}" required>
                            <div class="valid-feedback">
                                Looks good
                            </div>
                            @error('middlename')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-3 mb-2">
                            <label for="lastname" class="form-label">Last Name *</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
                            <div class="valid-feedback">
                                Looks good
                            </div>
                            @error('lastname')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-3 mb-2">
                            <label for="suffix" class="form-label">Suffix</label>
                            <input type="text" class="form-control" id="suffix" name="suffix" value="{{ old('suffix') }}">
                            <div class="valid-feedback">
                                Looks good
                            </div>
                            @error('suffix')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <label for="number" class="form-label">Contact Number *</label>
                            <input type="text" class="form-control" id="number" name="number"  value="{{ old('number') }}" required>
                            <div class="valid-feedback">
                                Looks good
                            </div>
                            @error('number')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- <div class="col-md-3 mt-4 form-check form-inline"> <label class="form-label">Gender</label>
                            <div> <input type="radio" id="gender_male" name="gender" value="Male" required> <label for="gender_male">Male</label> </div>
                            <div> <input type="radio" id="gender_female" name="gender" value="Female" required> <label for="gender_female">Female</label> </div>


                            <div class="valid-feedback"> Looks good </div> @error('gender') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div> -->
                        <div class="col-md-3">
                            <label for="birthday" class="form-label">Birthday *</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday') }}" required>
                            <div class="valid-feedback">
                                Looks good
                            </div>
                            @error('birthday')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            <div class="valid-feedback">
                                Looks good
                            </div>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="password" class="form-label">Password *</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <div class="valid-feedback">
                                Looks good
                            </div>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="password_confirmation" class="form-label">Confirm Password *</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            <div class="valid-feedback">
                                Looks good
                            </div>
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-md-3 mx-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="terms_checkbox" required>
                                        <label class="form-check-label" for="terms_checkbox">
                                            I agree to the <a href="#" id="terms-link">Terms and Conditions.</a>
                                        </label>
                                    @error('terms_checkbox')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div id="terms-container">
                            <p>By signing up for an account on Dentista Royale D.W.'s website, you agree to provide accurate information, keep your account details secure, and use the website for lawful purposes. You consent to the collection of your personal and medical data, which we protect in compliance with privacy laws. Payment may be required for some services. You agree to our appointment policies and understand the website is for informational purposes only.</p>
                            <span id="close-terms">Close</span>
                        </div>

                    <div class="row mt-5">
                        <div class="col-md-3 mx-auto">
                            <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
                        </div>
                    </div>
                </div>
            </form>

            

        </div>
        <!-- <div class="d-flex flex-column alignt-items-center mx-auto mb-3">
            <div class="p-2 mx-auto">
                <img class="d-flex justify-content-center mx-auto" style="height: 80px;" src="{{ asset('assets\images\logo-v5.png') }}">
                <h1 class="h3 mb-3 fw-normal">Welcome back</h1>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="p-2 w-25 mx-auto">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <label for="middlename" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="middlename" name="middlename">
                </div>
                <div class="p-2 w-25 mx-auto">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <label for="suffix" class="form-label">Suffix</label>
                    <input type="text" class="form-control" id="suffix" name="suffix">
                </div>
                <div class="p-2 w-25 mx-auto">
                    <label for="number" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="number" name="number" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <div class="p-2 w-25 mx-auto">
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
                </div>
                <div class="p-2 w-25 d-flex justify-content-end mx-auto">
                    <p><a class="link-opacity-100" href="{{ route('password.request') }}">Forgot password?</a></p>
                </div>
            </form>

        </div> -->

    </main>

    <script>
        // Get references to elements
        const termsLink = document.getElementById('terms-link');
        const termsContainer = document.getElementById('terms-container');
        const closeTerms = document.getElementById('close-terms');

        
        termsLink.addEventListener('click', function(event) {
            event.preventDefault(); 
            termsContainer.style.display = 'block'; 
        });

        
        closeTerms.addEventListener('click', function() {
            termsContainer.style.display = 'none';
        });
    </script>

    <script src="{{ asset('frameworks/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>
    <style>
        .invalid-feedback {
            display: inline !important;
        }
    </style>
    

</body>

</html>