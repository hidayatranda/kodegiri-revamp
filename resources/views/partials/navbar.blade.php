<!-- START NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top px-0">
    <div class="bg-brand" style="
    background: #386B22;
    width: 300px;
    height: 90px;
    position: absolute;
    z-index: 1;
    padding: 0;
    border-radius: 0 0 200px 0;
"></div>
    {{-- <div class="bg-nav" style="
background: #7ed957;
width: 300px;
height: 131px;
position: absolute;
z-index: 0;
padding: 0;
right:0;

">

    </div> --}}
    <div class="container" style="z-index: 999">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Kodegiri" class="img-fluid" style="max-height: 50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item active">
                    <a class="nav-link" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#career">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#price">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->