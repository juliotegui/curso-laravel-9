@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Novo Usuário</h1>

@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
    @include('users._partials.form')
    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Enviar
      </button>
</form>

@endsection