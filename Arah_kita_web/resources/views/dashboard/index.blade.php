@extends('layout.app',[
'namePage' => 'Dashboard',
])
@section('title', 'Arah Kita | Dashboard')
@section('content')

    <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
    </div>

@endsection
