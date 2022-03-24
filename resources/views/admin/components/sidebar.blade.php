<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin.homepage')}}">
                <div class="brand-logo">
                    <img src="{{asset('image/logo.png')}}" class="img-fluid" alt="Brand logo">
                </div>
                    <h2 class="brand-text mb-0 info">Kynesia</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item @if(request()->is('admin')) active @endif"><a href="{{route('admin.homepage')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Homepage</span></a>
            </li>
            <li class=" navigation-header"><span>Seleksi</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title">Tahap</span></a>
                <ul class="menu-content">
                    <li class = "@if(request()->is('admin/stepOne')) active @endif"><a href="{{route('admin.stepOne')}}"><i class="feather icon-circle"></i><span class="menu-item">Tahap 1</span></a>
                    </li>
                    <li class = "@if(request()->is('admin/stepTwo')) active @endif"><a href="{{route('admin.stepTwo')}}"><i class="feather icon-circle"></i><span class="menu-item">Tahap 2</span></a>
                    </li>
                    <li class = "@if(request()->is('admin/rejected')) active @endif"><a href="{{route('admin.rejected')}}"><i class="feather icon-circle"></i><span class="menu-item">Ditolak</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>