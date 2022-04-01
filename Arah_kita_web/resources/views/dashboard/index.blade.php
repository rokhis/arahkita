@extends('layout.main')
@section('title', 'Arah Kita | Login')
@section('container')
<h1>welcome dashboard</h1>

<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/wisata">Data Wisata</a>
    </li>
</ul>

<form method="POST" action="/logout">
    @csrf
    <button type="submit">logout</button>
</form>
@endsection