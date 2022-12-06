<nav class="navbar sticky-top" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Student System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a href="/" class="student-sytem">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        {{$data['title']}}
                    </h5>
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <x-items />
            </div>
        </div>
    </div>
</nav>