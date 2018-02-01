<nav class="navbar navbar-expand-lg bg-white shadow-lite fixed-top navbar-custom">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/coiner-logo.png') }}" class="logo-main">
    </a>
    <button class="navbar-toggler text-black" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav justify-content-center mx-auto">
            <li class="nav-item active">
                <a class="nav-link nav-anchor" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-anchor" href="#">Buy/Sell</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-anchor" href="#">Chart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-anchor" href="#">Help</a>
            </li>
        </ul>


        <div class="navbar-nav ml-auto nav-right">
                <a href="{{ route('login') }}" class="nav-link nav-anchor text-truncate mt-1 mr-3 text-black">LOG IN</a>
                <a href="{{ route('register') }}" class="btn btn-custom btn-nav mt-6 mr-10 text-uppercase">Create
                    Account</a>
        </div>

    </div>
</nav>
