<div class="menu-content h-100" data-simplebar>
    <ul class="metismenu left-sidenav-menu">
        <li class="menu-label mt-0">Main</li>
        <li>
            <a href="javascript: void(0);">
                <i data-feather="home" class="align-self-center menu-icon"></i>
                <span>Dashboard</span>
                <span class="menu-arrow">
          <i class="mdi mdi-chevron-right"></i>
        </span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="ti-control-record"></i>{{ __('adminbar.dashboard') }}
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="ti-control-record"></i>Satış Analizi <span class="menu-arrow left-has-menu">
              <i class="mdi mdi-chevron-right"></i>
            </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="apps-email-inbox.html">Ürünler</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Kazanç</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Siparişler</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Varyasyonlar</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Kategoriler</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Kuponlar</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Vergiler</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">İndirmeler</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Stok</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Ayarlar</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sales-index.html">
                        <i class="ti-control-record"></i>Google Analityc </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sales-index.html">
                        <i class="ti-control-record"></i>İstatistikler </a>
                </li>
            </ul>
        </li>
        <hr class="hr-dashed hr-menu" />
        <li class="menu-label mt-0">{{ __('adminbar.setting') }}</li>
        <li>
            <a href="javascript: void(0);">
                <i data-feather="users" class="align-self-center menu-icon"></i>
                <span>Kullanıcı Ayarları</span>
                <span class="menu-arrow">
          <i class="mdi mdi-chevron-right"></i>
        </span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('general.index') }}">
                        <i class="fa fa-circle-thin"></i> {{ __('adminbar.general-setting') }} </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
