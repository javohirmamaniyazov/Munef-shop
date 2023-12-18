<style>
    @font-face {
        font-family: "Kapakana Regular";
        font-style: normal;
        font-weight: normal;
        src: local("Kapakana Regular"),
            url("{{ asset('fonts/Kapakana[wght].woff') }}") format("woff");
        /* {{ asset('fonts/your-font.woff') }} */
    }

    @font-face {
        font-family: 'GeneralSans-Variable';
        src: url("{{ asset('fonts/GeneralSans-Variable.ttf') }}") format('truetype');
        font-weight: 200 700;
        font-display: swap;
        font-style: normal;
    }

    .nav-title {
        font-family: Kapakana Regular;
        color: var(--black, #292727);
        font-size: 56px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo nav-title" style="font-size: 65px; margin-left: 25px; text-decoration: none;" href="{{ url('admin/dashboard') }}">Munef</a>
        <a class="sidebar-brand brand-logo-mini" href="{{ url('admin/dashboard') }}"><img
                src="{{ asset('img/banner_munef.jpg') }}" style="width: 40px; height: 40px; border-radius: 20px;" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle "
                            src="{{ asset('admin/template/assets/images/faces/face15.jpg') }}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ auth()->user()->name }}</h5>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('products') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('orders.show') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Orders</span>
            </a>
        </li>
    </ul>
</nav>
