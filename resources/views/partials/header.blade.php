<body  style="background-color: #d3ac6e;">

<nav class="navbar navbar-expand-lg" style="background-color:#280033;">
    <div class="container-fluid"> <div data-aos="fade-right" class="aos-init aos-animate">
            <a class="navbar-brand nav-linka" href="kingdoms">
                <img src="/favicon.ico" alt="" width="40" height="35" class="d-inline-block align-text-center">Fandom
            </a>
        </div>
        <button class="navbar-toggler rotateicon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon rotateicon"><div class="rotateicon"><i class="fa fa-hand-o-right" aria-hidden="true"></i></div></span>
        </button>
        <div class="collapse navbar-collapse  mx-auto" id="navbarTogglerDemo01">
            <!-- NAVBAR CHOOSE MENU -->
            <div class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/kingdoms"> <i class="fa fa-shield" aria-hidden="true"></i> Kingdoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/author"> <i class="fa fa-feather" aria-hidden="true"></i> Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('shop.index')}}"> <i class="fa fa-book" aria-hidden="true"></i> Book Store</a>
                </li>

            </div>
            <div class="navbar-nav ms-auto">
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product.shoppingCart')}}"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span>{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
                    </li>
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i> User Management
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        @if(Auth::check())
                            <li>{{ Auth::user()->email }}</li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('user.profile')}}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('user.logout')}}">Logout</a></li>
                        @else
                            <li><a class="dropdown-item" href="{{route('user.signup')}}">Sign Up</a></li>
                            <li><a class="dropdown-item" href="{{route('user.signin')}}">Sign In</a></li>
                        @endif
                    </ul>
                </li>
            </div>



        </div>
    </div>
</nav>
