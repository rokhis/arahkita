@extends('layout.app', [
    'namePage' => 'Dashboard',
])
@section('title', 'Arah Kita | Dashboard')
@section('content')

    <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-chart">
                    <div class="card-header">
                        <i class="now-ui-icons users_single-02"></i>
                        <h5 class="card-category">User</h5>
                        <h4 class="card-title">Jumlah User : {{ $jumlah_user }} </h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            {{-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-chart">
                    <div class="card-header">
                        <i class="now-ui-icons design_image"></i>
                        <h5 class="card-category">Wisata</h5>
                        <h4 class="card-title">Jumlah Wisata : {{ $jumlah_wisata }} </h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            {{-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-chart">
                    <div class="card-header">
                        <i class="now-ui-icons business_money-coins"></i>
                        <h5 class="card-category">Transaksi</h5>
                        <h4 class="card-title">Jumlah Transaksi : {{ $jumlah_transaksi }} </h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            {{-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var transaksi = <?php echo json_encode($transaksi); ?>;
    </script>
@endsection
