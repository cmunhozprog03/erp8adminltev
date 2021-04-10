@extends('adminlte::page')

@section('title', 'ERP Dashboard')

@section('content_header')
    <h1>Empresas</h1>
@stop

@section('content')
    @if ($companies->count())
        <div class="w3-card-4">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">

            </table>
          </div>
        </div>
    @else
        <div class="w3-card-4 alert alert-secondary p-3">
          Nenhum registro encontrado.
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop