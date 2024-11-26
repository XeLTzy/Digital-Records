<div class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img class="navbar-brand mt-1" src="{{ asset('assets\images\logo-v5.png') }}" style="height: 50px;"></img>
                <h4 class="text-white d-none d-md-block pe-none mt-2">Dentista Royale D.W.</h4>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="index.html">Home</a> -->
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Services</a>
                        <div class="dropdown-content">
                            <a href="{{ route('consultation') }}">Consultation</a>
                            <a href="{{ route('restorative') }}">Restorative Dentistry</a>
                            <a href="{{ route('endodontics') }}">Endodontics Treatment</a>
                            <a href="{{ route('cosmetic') }}">Cosmetic Dentistry</a>
                            <a href="{{ route('surgery') }}">Oral Surgery</a>
                            <a href="{{ route('orthodontic') }}">Orthodontic Treatment</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#abawtas">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log In</a>
                    </li>
                    <!-- <li class="nav-item">
                        <div class="dropdown dropstart">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu mt-5">
                                <li>
                                    <a class="dropdown-item" href="Login.html">Login</a>
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Log in
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Sign Up</a>
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
</div>