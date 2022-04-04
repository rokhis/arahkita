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
      <ul class="nav">
        <li class=" {{ Request::is('dashboard') ? 'active' :'' }}">
          <a href="/dashboard">
            <i class="now-ui-icons design_app"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li>
          <ul class="nav">
          <li class="">
          <a data-toggle="collapse" href="#laravelExamples">
              <i class="now-ui-icons design_bullet-list-67"></i>
            <p>
              Tabel List
              <b class="caret"></b>
            </p>
          </a>
          </li>
          </ul>
          <div class="collapse show" id="laravelExamples">
            <ul class="nav">
              <li class="{{ Request::is('wisata') ? 'active' :'' }}">
                <a href="/wisata">
                  <i class="now-ui-icons users_single-02"></i>
                  <p> Data Wisata </p>
                </a>
              </li>
              
            </ul>
          </div>
        <li>
          <a href="./map.html">
            <i class="now-ui-icons location_map-big"></i>
            <p>Maps</p>
          </a>
        </li>
        <li>
          <a href="./notifications.html">
            <i class="now-ui-icons ui-1_bell-53"></i>
            <p>Notifications</p>
          </a>
        </li>
        <li>
          <a href="./user.html">
            <i class="now-ui-icons users_single-02"></i>
            <p>User Profile</p>
          </a>
        </li>
        <li>
          <a href="./tables.html">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Table List</p>
          </a>
        </li>
        <li>
          <a href="./typography.html">
            <i class="now-ui-icons text_caps-small"></i>
            <p>Typography</p>
          </a>
        </li>
      </ul>
    </div>
  </div>