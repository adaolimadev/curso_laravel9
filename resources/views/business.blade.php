@extends('layouts.default')

@section('content')
<h1>Adicionar Business</h1>  
    {{-- Forma de mostrar todos os erros 
         @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach --}}
    <form method="POST" action="{{route('business.store')}}" enctype="multipart/form-data">
        @csrf
        <input 
            type="text" 
            name="name"
            value="{{ old('name')}}"
        >
        @error('name')
            {{$message}}
        @enderror
        <br>
        <input 
            type="text" 
            name="email"
            value="{{ old('email')}}"
        >
        @error('email')
            {{$message}}
        @enderror
        <br>
        <input 
            type="text" 
            name="address"
            value="{{ old('address')}}"
        >
        @error('address')
        {{$message}}
        @enderror
        <br>
        <input 
            type="file"
            name="logo"
        >
        @error('file')
            {{$message}}
        @enderror
        <br>
        <button type="submit">Salvar</button>
    </form> 
    <hr>

    @foreach ($allbusiness as $b)
        @if ($b->logo)
            <img src="{{Storage::disk('public')->url($b->logo)}}" alt="Logo"
            width="100">
        @endif
        <br>
        {{ $b->name }} - {{ $b->email}}<br><br>
    @endforeach
    {{ $allbusiness->links() }}
@endsection