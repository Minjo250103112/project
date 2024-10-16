<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Main</div>
            <a class="nav-link" href="{{ route('home') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Pelanggan</div>
            <a class="nav-link" href="{{ route('client') }}?vendor=mysch">
                <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                Pelanggan MySCH.ID
            </a>
            <a class="nav-link" href="{{ route('client') }}?vendor=budimark">
                <div class="sb-nav-link-icon"><i class="fas fa-comments-dollar"></i></div>
                Pelanggan Budimark
            </a>
            <div class="sb-sidenav-menu-heading">Layanan</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                Layanan MySCH.ID
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('package-type') }}?vendor=mysch">Kategori Paket</a>
                    <a class="nav-link" href="{{ route('package') }}?vendor=mysch">Paket</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-lightbulb"></i></div>
                Layanan Budimark
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('package-type') }}?vendor=budimark">Kategori Paket</a>
                    <a class="nav-link" href="{{ route('package') }}?vendor=budimark">Paket</a>
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Pengaturan</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fa-brands fa-whatsapp"></i></div>
                Whatsapp
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html">API Whatsapp</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Pemberitahuan Whatsapp</a>
                </nav>
            </div>
            <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Pengguna
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Remahan
    </div>
</nav>