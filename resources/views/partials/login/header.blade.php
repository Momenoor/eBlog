{{--@vite(['resources/js/app.js','resources/sass/app.scss'])--}}

<div class="navbar navbar-dark navbar-static py-2">
    <div class="container-fluid">
        <div class="navbar-brand">
            <a href="index.html" class="d-inline-flex align-items-center">
                <img src="{{asset('images/logo_icon.svg')}}" alt="">
                <img src="{{asset('images/logo_text_light.svg')}}" class="d-none d-sm-inline-block h-16px ms-3" alt="">
            </a>
        </div>

        <div class="d-flex justify-content-end align-items-center ms-auto">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
                        <div class="d-flex align-items-center mx-md-1">
                            <i class="ph-lifebuoy"></i>
                            <span class="d-none d-md-inline-block ms-2">Support</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
                        <div class="d-flex align-items-center mx-md-1">
                            <i class="ph-user-circle-plus"></i>
                            <span class="d-none d-md-inline-block ms-2">Register</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
                        <div class="d-flex align-items-center mx-md-1">
                            <i class="ph-user-circle"></i>
                            <span class="d-none d-md-inline-block ms-2">Login</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
