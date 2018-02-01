<nav class="navbar navbar-expand-lg bg-white shadow-lite fixed-top navbar-custom2">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/coiner-logo.png') }}" class="logo-main">
    </a>
    <button class="navbar-toggler text-black" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
    </button>


    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

        <ul class="navbar-nav mr-20">
            <li class="nav-item active">
                <a class="nav-link nav-anchor" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-anchor" href="#">Buy/Sell</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-anchor" href="#">Charts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-anchor" href="#">Dashboard</a>
            </li>
        </ul>
        <div class="navbar-nav nav-right authenticated-nav-right">
            <img src="{{ asset('images/pp.png') }}" class="circle circle-xs pp-border">
        </div>

    </div>
</nav>
