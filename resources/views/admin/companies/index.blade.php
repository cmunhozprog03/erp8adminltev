
@extends('adminlte::page')

@section('title', 'ERP Dashboard')



@section('content')
   
  @livewire('companies.companies-index')
   
@stop

@section('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
@stop

@section('js')
    @livewireScripts
    <script> console.log('Hi!'); </script>
@stop