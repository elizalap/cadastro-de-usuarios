@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Usuário')

@section('content')

   <h1>Cadastrar Novo Usuário</h1>

   <form action="{{ route('cadastro.store') }}" method="post" enctype="multipart/form-data" class="form">
      @include('admin.includes.alerts')
      @csrf
      <div class="form-group">
      <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ $users_occ->name ?? old('name') }}">
      </div>
      <div class="form-group">
      <input type="text" class="form-control" name="email" placeholder="E-mail" value="{{ $users_occ->email ?? old('email') }}">
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
      </div>
   </form>


   @endsection