@extends('layout.app', [
    'namePage' => 'Data User',
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
                                <h4 class="card-title"> Data User</h4>
                            </div>
                            <div class="col-md-5">
                                <form action="/user" method="GET">
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
                    @if ($user_mobile->count())
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama User</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">No Hp</th>
                                        <th scope="col">Email</th>
                                        <th class="text-right" scope="col">action</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($user_mobile as $user)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $user->nama }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->no_hp }}</td>
                                                <td>{{ $user->email }}</td>

                                                <td class="text-right">
                                                    <a href="{{ url('user/' . $user->id . '/edit') }}"><button
                                                            class="now-ui-icons shopping_tag-content btn btn-success border-0 p-2"></button></a>
                                                    <a href="/user/delete/{{ $user->id }}"><button
                                                            class="btn btn-danger border-0 p-2 now-ui-icons ui-1_simple-remove"
                                                            id="btn-hapus-user" data-id-user={{ $user->id }}>
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
