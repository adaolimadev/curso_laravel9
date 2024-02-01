@extends('layouts.default')

@section('content')
    <h1>Informações do Usuario</h1>
    {{$user->name;}}<br>
    {{$user->email;}}<br>

    {{date('d/m/y')}}
@endsection

