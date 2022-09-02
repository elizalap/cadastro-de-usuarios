@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Usuário')

@section('content')

   <div class="form">
      <form action="{{ route('cadastro.store') }}" method="post" enctype="multipart/form-data" class="form">
         <div class="form-header">
            <h1>Cadastro</h1>
         </div>
         @include('admin.includes.alerts')
         @csrf
         <div class="input-box">
            <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $users_occ->nome ?? old('nome') }}">
         </div>
         <div class="input-box">
            <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" value="{{ $users_occ->sobrenome ?? old('sobrenome') }}">
         </div>
         <div class="input-box">
            <input type="text" class="form-control" name="email" placeholder="E-mail" value="{{ $users_occ->email ?? old('email') }}">
         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
         </div>
      </form>
   </div> 

@endsection
