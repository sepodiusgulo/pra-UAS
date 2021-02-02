<header>
    <div class="bawah bg-success">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light px-5">
            <div class="container">
              <a class="navbar-brand" href="#"><img class="w-100" src="http://sariater-hotel.com/wp-content/uploads/2020/10/SAHR-panjang-white-lite.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">HOTEL</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ATTRACTIONS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">MICE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">DINING</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">NEWS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">MORE+</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">BOOK</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">OFFERS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">CARI</a>
                  </li>
                  @auth
                        <a class="my-auto ms-3" style="text-decoration: none; color: white;" href="{{ url('/home') }}">Admin</a>
                    @else
                        <a class="my-auto ms-3 me-2" style="color: white; text-decoration: none;" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="my-auto" style="text-decoration: none; color: white" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </ul>
              </div>
            </div>
          </nav>
    </div>
</div>
</header>
