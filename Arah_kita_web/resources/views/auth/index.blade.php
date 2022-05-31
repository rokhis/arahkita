@extends('layout.app', [
    'namePage' => 'Data Admin',
])
@section('title', 'Arah Kita | Data User')
@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h4 class="card-title"> Data Admin</h4>
                                <a href="{{ url('/register') }}"><button class="btn btn-primary border-0 p-2"> <i
                                            class="now-ui-icons ui-1_simple-add"></i> Tambah
                                        Admin</button></a>
                            </div>
                            <div class="col-md-5">
                                <form action="/admin" method="GET">
                                    <div class="input-group no-border p-4">
                                        <input type="text" value="{{ $request->search }}" class="form-control"
                                            placeholder="Search..." name="search">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons ui-1_zoom-bold"></i>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    @if ($user->count())
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th scope="col">ID Admin</th>
                                        <th scope="col">Nama Admin</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Is admin</th>

                                        <th class="text-right" scope="col">action</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($user as $usr)
                                            <tr>
                                                <th>{{ $usr->id }}</th>
                                                <td>{{ $usr->nama }}</td>
                                                <td>{{ $usr->username }}</td>
                                                <td>{{ $usr->email }}</td>
                                                <td>{{ $usr->is_admin }}</td>

                                                <td class="text-right">
                                                    <a href="/admin/delete/{{ $usr->id }}"><button
                                                            class="btn btn-danger border-0 p-2 now-ui-icons ui-1_simple-remove"
                                                            id="btn-hapus-admin" data-id-admin={{ $usr->id }}>
                                                            <span data-feather="x-circle"></span></button>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p class="text-center p-4">No Data</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
