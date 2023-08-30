<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        {{-- <span class="app-brand-logo demo"> --}}
            <img src="{{ asset('assets/img/favicon/lgo.png') }}" width="110" height="90" alt
                class="me-3 ms-3 h-auto text-right" />

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        @can('home.index')
        <li class="menu-item {{ (request()->is('home')) ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Home">Home</div>
            </a>
        </li>
        @endcan

        @can('dashboard.index')
        <li class="menu-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        @endcan

        @canany(['layout.empty.index'])
        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Pages</span>
        </li>

        @can('layout.empty.index')
        <li class="menu-item {{ Route::currentRouteNamed('layout.empty') ? 'active' : '' }}">
            <a href="{{ route('layout.empty') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Layout Empty">Layout Empty</div>
            </a>
        </li>
        @endcan
        @endcanany

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pendaftaran</span>
        </li>

        <li class="menu-item {{ Route::currentRouteNamed('apl_01.index') ? 'active' : '' }}">
            <a href="{{ route('apl_01.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-arrow-loop-right-2"></i>
                <div data-i18n="APL-01">APL-01</div>
            </a>
        </li>
        <li class="menu-item {{ Route::currentRouteNamed('apl_01.create') ? 'active' : '' }}">
            <a href="{{ route('apl_01.create') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-arrow-loop-right-2"></i>
                <div data-i18n="APL-01">APL-01</div>
            </a>
        </li>

        <li class="menu-item {{ (request()->is('bank')) ? 'active' : '' }}">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons ti ti-arrow-loop-right-2"></i>
                <div data-i18n="APL-02">APL-02</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Data</span>
        </li>

        @can('bank.index')
        <li class="menu-item {{ (request()->is('bank')) ? 'active' : '' }}">
            <a href="{{ route('bank.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-tool"></i>
                <div data-i18n="Bank">Bank</div>
            </a>
        </li>
        @endcan

        <li
            class="menu-item {{ Route::currentRouteNamed('kompetensi.index','kompetensi.show','kompetensi.edit') ? 'active' : '' }}">
            <a href="{{ route('kompetensi.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-tool"></i>
                <div data-i18n="Kompentensi">Kompentensi</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteNamed('skema.index','skema.show','skema.edit') ? 'active' : '' }}">
            <a href="{{ route('skema.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-tool"></i>
                <div data-i18n="Skema">Skema</div>
            </a>
        </li>

        @canany(['users.index','roles.index','permissions.index'])
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Users Management</span>
        </li>

        @can('users.index')
        <li class="menu-item {{ Route::currentRouteNamed('users.index','users.show','users.edit') ? 'active' : '' }}">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Users">Users</div>
            </a>
        </li>
        @endcan

        @can('roles.index')
        <li class="menu-item {{ Route::currentRouteNamed('roles.index','roles.show','roles.edit') ? 'active' : '' }}">
            <a href="{{ route('roles.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Roles">Roles</div>
            </a>
        </li>
        @endcan


        @can('permissions.index')
        <li
            class="menu-item {{ Route::currentRouteNamed('permissions.index','permissions.show','permissions.edit') ? 'active' : '' }}">
            <a href="{{ route('permissions.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div data-i18n="Permissions">Permissions</div>
            </a>
        </li>
        @endcan

        @endcanany
    </ul>
    <footer class="content-footer footer bg-footer-theme" style="background-color: #7367F0">
        <ul class="menu-inner py-2">
            <li class="menu-item">
                <a href="#" onclick="$('#logout-form').submit();" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-logout " style="color: black"></i>
                    <div data-i18n="Logout" style="color: black">Logout</div>
                </a>
            </li>
        </ul>
    </footer>
</aside>