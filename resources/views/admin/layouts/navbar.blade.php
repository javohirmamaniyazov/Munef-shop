<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="{{ url('admin/dashboard')}}"><img
                src="{{ asset('img/banner_munef.jpg') }}" style="width: 35px; height: 35px; border-radius: 20px;" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button"
            data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button"
                    href="{{ route('products.create') }}">+ Create New Product</a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile"  >
                        <img class="img-xs rounded-circle"
                            src="{{ asset('admin/template/assets/images/faces/face15.jpg') }}"
                            alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ auth()->user()->name}}</p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="profileDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="preview-subject mb-1 btn" style="border: none; margin-left: -10px;" type="submit">{{ __('Log Out') }}</button>
                            </form>                            
                        </div>
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>