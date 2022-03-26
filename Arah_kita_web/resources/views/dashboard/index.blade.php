@extends('layout.main')
@section('title', 'Arah Kita | Login')
@section('container')
<h1>welcome dashboard</h1>
<form method="POST" action="/logout">
    @csrf
    <button type="submit">logout</button>
</form>
@endsection