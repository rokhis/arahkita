@extends('layout.app', [
    'namePage' => 'scan',
])
@section('title', 'Arah Kita | Scan tiket')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="card">
                <div class="col-md-4 p-4">
                    <div id="reader"></div>
                    <form action="/scan" method="POST">
                        @csrf
                        <input class="mt-2 form-control" name="kode_tiket" type="text" id="result" required readonly>

                        <Button class="btn btn-primary" type="submit">cek tiket</Button>
                    </form>
                </div>

            </div>
        </div>


    </div>


@endsection
