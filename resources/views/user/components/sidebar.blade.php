<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('user.homepage')}}">
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
            <li class=" nav-item"><a href="{{route('user.homepage')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Homepage</span></a>
            </li>
            <li class=" navigation-header"><span>Pendaftaran</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-clipboard"></i><span class="menu-title">Formulir</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('user.biodata')}}"><i class="feather icon-circle"></i><span class="menu-item">Biodata</span></a>
                    </li>
                    <li><a href="{{route('user.family')}}"><i class="feather icon-circle"></i><span class="menu-item">Keluarga</span></a>
                    </li>
                    <li><a href="{{route('user.education')}}"><i class="feather icon-circle"></i><span class="menu-item">Pendidikan</span></a>
                    </li>
                    <li><a href="{{route('user.downloadable')}}"><i class="feather icon-circle"></i><span class="menu-item">Unduhan</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title">Tahapan Lanjut</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('user.test')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Test Online</span></a>
                    </li>
                    <li><a href="{{route('user.interview')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Wawancara Online</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>