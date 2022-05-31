<div class="sidebar" data-color="blue">

    <div class="logo">
        <a class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="/assets/img/akbaru.png">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Arah Kita
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        @can('admin')
            <ul class="nav">
                <li class=" {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="/dashboard">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>



                <li>
                    <ul class="nav">
                        <li class="">
                            <a data-toggle="collapse" href="#tabellist">
                                <i class="now-ui-icons design_bullet-list-67"></i>
                                <p>
                                    Tabel List
                                    <b class="caret"></b>
                                </p>
                            </a>
                        </li>
                    </ul>
                    <div class="collapse show " id="tabellist">
                        <ul class="nav">
                            <li class="{{ Request::is('wisata') ? 'active' : '' }}">
                                <a href="/wisata">
                                    <i class="now-ui-icons design_image"></i>
                                    <p> Data Wisata </p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="collapse show" id="tabellist">
                        <ul class="nav">
                            <li class="{{ Request::is('user') ? 'active' : '' }}">
                                <a href="/user">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p> Data User </p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="collapse show" id="tabellist">
                        <ul class="nav">
                            <li class="{{ Request::is('transaksi') ? 'active' : '' }}">
                                <a href="/transaksi">
                                    <i class="now-ui-icons business_money-coins"></i>
                                    <p> Data Transaksi </p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="collapse show" id="tabellist">
                        <ul class="nav">
                            <li class="{{ Request::is('tiket') ? 'active' : '' }}">
                                <a href="/tiket">
                                    <i class="now-ui-icons files_paper"></i>
                                    <p> E-Tiket</p>
                                </a>
                            </li>

                        </ul>
                    </div>
            </ul>
        @endcan
        <hr>
        @can('superadmin')
            <ul class="nav">
                <li class="{{ Request::is('admin') ? 'active' : '' }}">
                    <a href="/admin">
                        <i class="now-ui-icons business_badge"></i>
                        <p> Data Admin</p>
                    </a>
                </li>
            </ul>


            <hr>
        @endcan
        <ul class="nav">
            <li class="{{ Request::is('scan') ? 'active' : '' }}">
                <a href="/scan">
                    <i class="now-ui-icons tech_mobile"></i>
                    <p> Scan E-tiket</p>
                </a>
            </li>
        </ul>

    </div>
</div>
